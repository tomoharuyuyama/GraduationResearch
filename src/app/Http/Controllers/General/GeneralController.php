<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(Request $request)
    {
        $test = "やあ";
        return view('index', compact('test'));
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
}
