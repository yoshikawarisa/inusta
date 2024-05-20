<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルを使用するために追加
use App\Http\Requests\StoreUserRequest;

class PostsController extends Controller
{
    public function register()
    {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.register', ['posts' => $posts]); // views/posts/register.blade.php を表示する
    }

    public function store(StoreUserRequest $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->Email = $request->Email;
        $post->password = $request->password;
        $post->save();
        return redirect()->route('posts.register');
    }

    public function show(Request $request, $id)
    {
        $post = Post::findOrFail($id);
    
        return view('posts.show', [
            'post' => $post,
        ]);
    }
}