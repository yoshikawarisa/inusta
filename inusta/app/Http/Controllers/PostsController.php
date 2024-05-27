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
            'photo' => 'nullable|image|max:2048',
        ]);

        Post::create([
            'text' => $request->text,
            'photo' => $request->file('photo') ? $request->file('photo')->store('posts','public') : null,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('posts.index');
    }


    public function show($id) //画面を出します(表示のみ)
    {
        $post = Post::with('user')->find($id);
        return view('posts.show', compact('post'));
    }

    public function edit($id)   //画面を出します(表示のみ)
    {
        $post = Post::find($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'text' => 'required|max:50',
            'photo' => 'nullable|image|max:2048',
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'text' => $request->text,
            'photo' => $request->file('photo') ? $request->file('photo')->store('posts','public') : $post->photo,
        ]);
        return redirect()->route('posts.index');
    }
}