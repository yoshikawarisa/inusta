<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // Postモデルを使用するために追加
use App\Http\Requests\StoreUserRequest;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $posts = Post::all(); // postsテーブルに保存されているデータをすべて取得
        return view('posts.dashboard', ['posts' => $posts]); // views/posts/dashboard.blade.php を表示する
    }
}
