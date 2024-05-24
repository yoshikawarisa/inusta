<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionComment; // QuestionCommentモデルを使用するために追加

class QuestionCommentsController extends Controller
{
    public function store(Request $request, $questionId)
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $comment = QuestionComment::create([
            'user_id' => auth()->id(),
            'question_id' => $questionId,
            'text' => $request->text,
            'photo' => $request->text,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $comment = QuestionComment::find($id);
        $comment->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->back();
    }
}
