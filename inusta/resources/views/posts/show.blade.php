<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>投稿の詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>inusta</h1>
    <h2>Post 詳細</h2>
    <a href="{{ route('posts.edit', $post->id) }}">編集</a>

    <div>
        <p><strong>{{ $post->user->name }}</strong></p>
        <p><strong>内容:</strong> {{ $post->text }}</p>
        <p><strong>画像:</strong> </p>
        @if($post->photo)
        <img src="{{ asset('storage/' . $post->photo) }}" style="width: 100px; height: auto;">
        @else
        <span>なし</span>
        @endif
    </div>
</body>
</html>