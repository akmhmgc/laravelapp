<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{

    public function index(Request $request)
    {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ]);
        // バリデーションに失敗した時の処理
        if ($validator->fails()) {
            return redirect('/hello') // リダイレクトする場所を表示
                ->withErrors($validator)
                ->withInput(); // 入力されたinputをそのまま付加してリダイレクトする
        }

        return view('hello.index', ['msg' => '正しく入力されました！']);
    }
}
