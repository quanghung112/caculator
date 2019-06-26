<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculateController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function caculate(Request $request)
    {
        $fisrtNumber = $request->first;
        $secondNumber = $request->second;
        $caculate = $request->Caculate;
        if ($caculate == '+') {
            $result = $fisrtNumber + $secondNumber;
        }
        if ($caculate == '-') {
            $result = $fisrtNumber - $secondNumber;
        }
        if ($caculate == '*') {
            $result = $fisrtNumber * $secondNumber;
        }
        if ($caculate == '/') {
            if ($secondNumber==0){
                $result="Can't division";
            }else{
                $result = $fisrtNumber / $secondNumber;
            }
        }
        return view('index', compact('result'));
    }
}
