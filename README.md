## Railsとのデフォルトの違い
- ユーザー認証の仕組みがあらかじめあるっぽい
- パラメータはコントローラーで取得するのではなくRoute内で設定する
- 名前空間とファイル名の対応はRailsと同じ
- 関数はスコープゲート
    - `global`を使用すると外のスコープの変数を使用可能

```php
<?php

$a = 1; /* グローバルスコープ */

// メソッドはスコープゲート
function test()
{
  global $a; // global宣言をすると使用可能
  echo $a;
}

test();
```

- 一つのコントローラーに一つのアクションしか実装しない専用のコントローラー（シングルアクションコントローラー）が存在

- デバッグ方法
    - 好きな場所に`eval(\Psy\sh());`を差し込む
    - 以下のコマンドでサーバーを起動する

    ```sh
    $ php -S localhost:8000 -t public server.php
    ```

- コントローラーとviewが対応しているわけではなくルートやコントローラーから好きなviewを返すことができる
    - 規約が弱め？

```php
// Routeから直接viewを返している
Route::get('hello', function() {
    return view('hello.index');
 });
```

```php
# controller
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request, Response $response)
    {
        // コントローラーから指定したviewを返すことも可能
        return view('hello.index');
    }
}
```

- publicをつけてプロパティを宣言するとアクセスが可能

```php
<?php

class User{
    // プロパティを宣言するだけでアクセスすることが可能
    public $name;

    public function greeting(){
        echo "私の名前は $this->name です";
    }
}

$user = new User;
$user->name = '太郎';
$user->greeting(); #=> 私の名前は太郎です
```

- view内で定義されていない変数を参照しようとするとエラーになる
- 継承という仕組みを使ってレイアウトを管理している
