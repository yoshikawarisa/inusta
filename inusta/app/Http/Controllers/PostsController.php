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

}
