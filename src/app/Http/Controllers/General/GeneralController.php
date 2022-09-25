<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OriginalTable;

class GeneralController extends Controller
{
    public function index(Request $request)
    {
        $tables = OriginalTable::all();
        // dd($tables);
        return view('index', compact('tables'));
    }
    public function tableList(Request $request)
    {
        return view('table-list');
    }
    public function upload(Request $request)
    {
        return view('upload');
    }
    public function result(Request $request)
    {
        return view('result');
    }
    public function tableSetting(Request $request)
    {
        return view('table-setting');
    }
    public function columnSetting(Request $request)
    {
        return view('column-setting');
    }
    public function teacherData(Request $request)
    {
        return view('teacher-data');
    }
    public function recordList(Request $request)
    {
        return view('record-list');
    }
}
