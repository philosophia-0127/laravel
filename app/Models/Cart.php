<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    public function products()
    {
        return $this->belongsToMany(
            Product::class,  //関係するモデルクラス
            'line_items'  //中間テーブル
        )->withPivot(['id', 'quantity']);
    }
}
