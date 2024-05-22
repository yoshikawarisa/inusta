<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogsController extends Controller
{
    public function index()
    {
        // Dogsテーブルから全てのデータを取得
        $dogs = Dog::all();
        
        // 取得したデータをビューに渡して表示
        return view('dogs.index', ['dogs' => $dogs]);
    }
}

