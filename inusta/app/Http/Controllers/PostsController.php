<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        // postsテーブルから全てのデータを取得
        $posts = Post::all();
        
        // 取得したデータをビューに渡して表示
        return view('posts.index', ['posts' => $posts]);
    }

    public function create()   //画面を出します(表示のみ)
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'text' => 'required|string|max:50',
        ]);

        $question = Post::create([
            'text' => $request->text,
            'photo' => $request->file('photo') ? $request->file('photo')->store('posts','public') : null,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index');
    }


}
