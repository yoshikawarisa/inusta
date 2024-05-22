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

    public function create()   //画面を出します(表示のみ)
    {
        return view('dogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'personality' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'icon' => 'required|image|max:2048',
        ]);

        $dog = Dog::create([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'user_id' => auth()->id(),
            'personality' => $request->personality,
            'breed' => $request->breed,
            'icon' => $request->file('icon') ? $request->file('icon')->store('dogs','public') : null,
        ]);

        return redirect()->route('dogs.index');
    }

    public function edit($id)   //画面を出します(表示のみ)
    {
        $dog = Dog::find($id);
        return view('dogs.edit', compact('dog'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string',
            'age' => 'required|integer',
            'personality' => 'required|string|max:255',
            'breed' => 'required|string|max:255',
            'icon' => 'required|image|max:2048',
        ]);

        $dog = Dog::find($id);
        $dog->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'age' => $request->age,
            'personality' => $request->personality,
            'breed' => $request->breed,
            'icon' => $request->file('icon') ? $request->file('icon')->store('dogs','public') : $dog->icon,
        ]);
        return redirect()->route('dogs.index');
    }
}