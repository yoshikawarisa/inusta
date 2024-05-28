<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_id'];

    public function user() //親は１つだからsない
    {
        return $this->belongsTo(User::class);  //userに属します
    }

    public function post() //親は１つだからsない
    {
        return $this->belongsTo(Post::class);  //postに属します
    }
}
