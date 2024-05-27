<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostComment; // PostCommentモデルを使用するために追加

class PostCommentsController extends Controller
{
    public function store(Request $request, $postId)
    {
        $request->validate([
            'text' => 'required|string',
        ]);

        $comment = PostComment::create([
            'user_id' => auth()->id(),
            'post_id' => $postId,
            'text' => $request->text,
        ]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $comment = PostComment::find($id);
        $comment->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->back();
    }
}
