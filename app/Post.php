<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // テーブルの関連付け
    protected $table = 'post';

    // 更新可能な項目の設定
    protected $fillable = [
        'title',
        'content',
        'finished'
    ];
}