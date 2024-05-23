<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionComment extends Model
{
    use HasFactory;
    protected $fillable = ['question_id', 'user_id', 'text'];

    public function question() //親は１つだからsない
    {
        return $this->belongsTo(Question::class);  //questionに属します
    }

    public function user() //親は１つだからsない
    {
        return $this->belongsTo(User::class);  //userに属します
    }
}