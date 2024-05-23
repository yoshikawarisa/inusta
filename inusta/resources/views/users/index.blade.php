<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>inusta</h1>
    <span>ようこそ、<a href="{{ route('users.edit', $user->id) }}">{{ Auth::user()->name }}</a>さん</span>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
    <button><a href="{{route('dogs.index')}}">My Dogs</a></button>
    <button><a href="{{route('questions.index')}}">Questions</a></button>
</body>
</html>