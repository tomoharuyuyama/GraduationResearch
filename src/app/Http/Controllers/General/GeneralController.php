<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OriginalTable;
use App\Models\Record;
use App\Models\TableColumn;
use SebastianBergmann\CodeCoverage\Driver\Selector;
use Symfony\Component\HttpFoundation\RequestStack;

class GeneralController extends Controller
{
    public function index(Request $request)
    {
        $tables = OriginalTable::all();
        $record = Record::all();
        return view('index', compact('tables', 'record'));
    }
    public function add_table(Request $request)
    {
        // dd($request);
        // ディレクトリ名
        $dir = 'baseImages';

        // アップロードされたファイル名を取得
        $file_name = $request->file('base_image')->getClientOriginalName();

        // sampleディレクトリに画像を保存
        $request->file('base_image')->storeAs('public/' . $dir, $file_name);

        // オリジナルテーブルインサート
        $newTable = new OriginalTable;
        $newTable->name = $request->table_name;
        $newTable->base_img_path = 'storage/' . $dir . '/' . $file_name;
        $newTable->save();

        return redirect()->route('top_page');
    }
    public function edit_table_name(Request $request)
    {
        $editTable = OriginalTable::find($request->tableId);
        $editTable->name = $request->table_name;
        $editTable->save();

        return redirect()->route('table_setting', ['tableId' => $request->tableId]);
    }
    public function add_column(Request $request)
    {
        // カラムインサート
        $newColumn = new TableColumn;
        $newColumn->column_name = $request->column_name;
        $newColumn->table_id = $request->tableId;
        $newColumn->detection_type = 'Consistent';
        $newColumn->range_x = 0;
        $newColumn->range_y = 0;
        $newColumn->range_h = 0;
        $newColumn->range_w = 0;
        $newColumn->save();

        return redirect()->route('table_setting', ['tableId' => $request->tableId]);
    }
    public function delete_table(Request $request, $tableId)
    {
        // オリジナルテーブルを削除
        OriginalTable::where('id', $tableId)->delete();
        return redirect()->route('top_page');
    }
    public function delete_column(Request $request)
    {
        TableColumn::where('id', $request->columnId)->delete();
        return redirect()->route('table_setting', ['tableId' => $request->tableId]);
    }
    public function tableList(Request $request, $tableId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);

        return view('table-list', compact('tables', 'selectedTable'));
    }
    public function upload(Request $request, $tableId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);
        // dd($selectedTable);
        return view('upload', compact('tables', 'selectedTable'));
    }
    private function storeRecord($img_data, $original_table_id)
    {
        // dd($request);
        // ディレクトリ名
        $dir = 'uploadImages';

        // アップロードされたファイル名を取得
        $file_name = $img_data->getClientOriginalName();

        // sampleディレクトリに画像を保存
        $img_data->storeAs('public/' . $dir, $file_name);

        // レコードインサート
        $record = new Record();
        $record->img_path = 'storage/' . $dir . '/' . $file_name;
        $record->original_table_id = $original_table_id;
        $record->column_id = 0;

        // python検証
        $path = app_path() . "/Python/app.py";
        $command = "export LANG=ja_JP.UTF-8; python3 " . $path . " " . $file_name;
        exec($command, $output);
        if (count($output) == 2) {
            # code...
            explode(',', $output[1]);
            $output = array_diff($output, array(""));

            // dbに保存
            // dd($output);
            $record->value = $output[1];
            // dd($record);
            $record->save();
        }
        return;
    }
    public function uploadImg(Request $request)
    {
        foreach ($request->file('upload_image') as $upload_image) {
            $this->storeRecord($upload_image, $request->original_table_id);
        }
        return redirect()->route('upload', ['tableId' => $request->original_table_id]);
    }
    public function result(Request $request, $tableId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);
        return view('result', compact('tables', 'selectedTable'));
    }
    public function tableSetting(Request $request, $tableId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);
        $tableColumns = TableColumn::where('table_id', $tableId)->get();

        $recordCounts = [];
        foreach ($tableColumns as $tableColumn) {
            $recordCount = Record::where('column_id', $tableColumn->id)->count();
            array_push($recordCounts, $recordCount);
        }

        return view('table-setting', compact('tables', 'selectedTable', 'tableColumns', 'recordCounts'));
    }
    public function columnSetting(Request $request, $tableId, $columnId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);
        $selectedColumn = TableColumn::find($columnId);
        return view('column-setting', compact('tables', 'selectedTable', 'columnId', 'selectedColumn'));
    }
    public function editColumn(Request $request)
    {
        $editColumn = TableColumn::find($request->columnId);
        $editColumn->column_name = $request->column_name;
        $editColumn->range_x = $request->range_x;
        $editColumn->range_y = $request->range_y;
        $editColumn->range_w = $request->range_w;
        $editColumn->range_h = $request->range_h;
        $editColumn->save();
        return redirect()->route('column_setting', ['tableId' => $request->tableId, 'columnId' => $request->columnId]);
    }
    public function teacherData(Request $request, $tableId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);
        $selectedColumn = TableColumn::find($request->columnId);
        return view('teacher-data', compact('tables', 'selectedTable', 'selectedColumn'));
    }
    public function recordList(Request $request, $tableId)
    {
        $tables = OriginalTable::all();
        $selectedTable = OriginalTable::find($tableId);
        $records = Record::where('original_table_id', $tableId)->get();
        return view('record-list', compact('tables', 'selectedTable', 'records'));
    }


    // python
    public function execute_python(Request $request)
    {
        $path = app_path() . "/Python/app.py";
        $image_pass = $request->hoge;
        $command = "export LANG=ja_JP.UTF-8; python3 " . $path . " " . $image_pass;
        exec($command, $output);
        dd($output);
        // return view('index', compact('output'));
    }
    public function python()
    {
        $tables = OriginalTable::all();
        return view('python', compact('tables'));
    }

    /**
     * CSV出力
     */
    public function postCSV()
    {
        // データの作成
        $users = [
            ['name' => '太郎', 'age' => 24],
            ['name' => '花子', 'age' => 21]
        ];
        // カラムの作成
        $head = ['名前', '年齢'];

        // 書き込み用ファイルを開く
        $f = fopen('test.csv', 'w');
        if ($f) {
            // カラムの書き込み
            mb_convert_variables('SJIS', 'UTF-8', $head);
            fputcsv($f, $head);
            // データの書き込み
            foreach ($users as $user) {
                mb_convert_variables('SJIS', 'UTF-8', $user);
                fputcsv($f, $user);
            }
        }
        // ファイルを閉じる
        fclose($f);

        // HTTPヘッダ
        header("Content-Type: application/octet-stream");
        header('Content-Length: ' . filesize('test.csv'));
        header('Content-Disposition: attachment; filename=test.csv');
        readfile('test.csv');

        return view('user.index', compact('users'));
    }
}
