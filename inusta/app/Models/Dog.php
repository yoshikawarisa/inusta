<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;
    
    // モデルが関連付けられるテーブル名
    protected $table = 'dogs';

    // 可変項目
    protected $fillable = [
        'name', 'breed', 'age',
    ];
}
