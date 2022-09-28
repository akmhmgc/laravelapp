<body>
   <h1>Blade/Index</h1>
   <p>{{$msg}}</p>
   <form method="POST" action="/hello">
       @csrf
       <input type="text" name="name">
       <input type="submit">
   </form>
</body>
