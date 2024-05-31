<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // モデルが関連付けられるテーブル名
    protected $table = 'posts';

    // 可変項目
    protected $fillable = ['text','photo','user_id'];

    //PostモデルがUserモデルに属している
    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function bookmarkedBy() 
    {
        return $this->belongsToMany(User::class, 'bookmarks')->withTimestamps();
    }
}