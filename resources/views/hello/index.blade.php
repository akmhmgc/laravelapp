<body>
    <h1>Blade/Index</h1>
    @if ($name == '')
    <p>名前を入力してください</p>
    @else
    <p>こんにちは{{ $name }}さん</p>
    @endif

    @isset ( $hoge )
    <p>変数hoge: {{$hoge}}</p>
    @endisset
    <form method="POST" action="/hello">
        @csrf
        <input type="text" name="name">
        <input type="submit">
    </form>
</body>
