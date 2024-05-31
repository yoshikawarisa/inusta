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

    public function show($id) //画面を出します(表示のみ)
    {
        $question = Question::with('user')->find($id);
        return view('questions.show', compact('question'));
    }

    public function edit($id)   //画面を出します(表示のみ)
    {
        $question = Question::find($id);
        return view('questions.edit', compact('question'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'title' => 'required|max:50',
            'text' => 'required',
            'judgement' => 'boolean',
        ]);

        $question = Question::findOrFail($id);
        $question->update([
            'title' => $request->title,
            'text' => $request->text,
        ]);
        return redirect()->route('questions.index');
    }

    public function toggleStatus($id)
    {
        $question = Question::findOrFail($id);
        $question->judgement = !$question->judgement;
        $question->save();
        return redirect()->route('questions.index');
    }
}
