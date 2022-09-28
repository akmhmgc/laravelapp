@extends('layouts.helloapp')

@section('title', 'タイトル')

@section('menubar')
   @parent
   インデックスページ
@endsection

@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>必要なだけ記述できます。</p>
   <p>{{$view_message}}</p>
   <p>{{$hoge}}</p>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection
