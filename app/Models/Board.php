<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{

    protected $guarded = array('id');

    public static $rules = array(
        'person_id' => 'required',
        'title' => 'required',
        'message' => 'required'
    );

    public function getData()
    {
        return $this->id . ': ' . $this->title . ' ('
            . $this->person->name . ')';
    }

    // 関連モデルを呼び出すときはメソッドとして()をつける必要はない
    // Board::find(1)->person みたいな感じでOK
    public function person()
    {
        return $this->belongsTo('App\Models\Person');
    }
}
