<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index()
    {
        $data = [
            'msg' => 'これはBladeを利用したサンプルです',
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        eval(\Psy\sh());
        // フォームからの送信の受け取り方
        $name = $request->name;
        $data = [
            'msg' => "こんにちは" . $name . 'さん',
        ];
        return view('hello.index', $data);
    }
}
