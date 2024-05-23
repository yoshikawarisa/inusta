<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function index()
    {
        // questionsテーブルから全てのデータを取得
        $questions = Question::all();
        
        // 取得したデータをビューに渡して表示
        return view('questions.index', ['questions' => $questions]);
    }
}
