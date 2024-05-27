<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'user_id', 'text'];

    public function post() //親は１つだからsない
    {
        return $this->belongsTo(Post::class);  //postに属します
    }

    public function user() //親は１つだからsない
    {
        return $this->belongsTo(User::class);  //userに属します
    }
}
