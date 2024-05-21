<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>inusta</h1>
    <span>ようこそ、<a href="{{ route('users.edit', $user->id) }}">{{ Auth::user()->name }}</a>さん</span>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">ログアウト</button>
    </form>
</body>
</html>