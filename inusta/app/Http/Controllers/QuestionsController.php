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

    public function create()   //画面を出します(表示のみ)
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:50',
            'text' => 'required|string',
        ]);

        $question = Question::create([
            'title' => $request->title,
            'text' => $request->text,
            'user_id' => auth()->id(),
            'judgement' => false,
        ]);

        return redirect()->route('questions.index');
    }
}
