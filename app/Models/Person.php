<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function getData()
    {
        return $this->id . ': ' . $this->name . ' (' . $this->age . ')';
    }

    // スコープの追加
    public function scopeNameEqual($query, $str)
    {
        eval(\Psy\sh());
        return $query->where('name', $str);
    }

    public function scopeAgeGreaterThan($query, $n)
    {
        return $query->where('age', '>=', $n);
    }

    public function scopeAgeLessThan($query, $n)
    {
        return $query->where('age', '<=', $n);
    }
}
