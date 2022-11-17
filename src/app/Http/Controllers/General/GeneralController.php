<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OriginalTable;
use App\Models\Record;
use App\Models\TableColumn;
use SebastianBergmann\CodeCoverage\Driver\Selector;

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
        return view('record-list', compact('tables', 'selectedTable'));
    }
}
