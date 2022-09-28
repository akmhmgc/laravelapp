<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index()
    {
        $data = [
            'name' => '',
            'hoge' => 'hoge'
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request)
    {
        // フォームからの送信の受け取り方
        $name = $request->name;
        $data = [
            'name' => $name,
        ];
        return view('hello.index', $data);
    }
}
