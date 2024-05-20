<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function User() //親は１つだからsない
    {
        return $this->belongsTo(User::class);  //postに属します
    }
}
