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
$user->greeting();
