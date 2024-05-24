<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Index</title>
</head>

<body>
    <h1>inusta</h1>
    <h2>Posts</h2>

    <ul>
        @foreach($posts as $post)
        <li>
            <a href="">{{ $post->text }}</a> - 
            @if($post->photo)
                <img src="{{ asset('storage/' . $post->photo) }}" style="width: 100px; height: auto;">
            @else
                <span>画像なし</span>
            @endif
        </li>
    @endforeach
    
    </ul>
    <button><a href="{{route('posts.create')}}">新規登録</a></button>
</body>
</html>