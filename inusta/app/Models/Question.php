<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // モデルが関連付けられるテーブル名
    protected $table = 'questions';

    // 可変項目
    protected $fillable = ['title', 'text','user_id','judgement'];

    public function user()
    {
        return $this->belongsTo(User::class); 
    }

    public function comments()
    {
        return $this->hasMany(QuestionComment::class); 
    }
}
