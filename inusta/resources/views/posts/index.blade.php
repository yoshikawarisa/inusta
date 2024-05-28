<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Index</title>
</head>

<body>
    <h1><a href="{{ route('users.index') }}">inusta</a></h1>
    <h2>Posts</h2>

    <ul>
        @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->id) }}">{{ $post->text }}</a> -

            @if($post->photo)
                <img src="{{ asset('storage/' . $post->photo) }}" style="width: 100px; height: auto;">
            @else
                <span>画像なし</span>
            @endif
            
            @if(Auth::user()->bookmarks->contains($post->id))
                <form action="{{ route('bookmarks.destroy',$post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">いいね解除</button>
                </form>
            @else
                <form action="{{ route('bookmarks.store', $post->id) }}" method="POST">
                    @csrf
                    <button type="submit">いいね</button>
                </form>
            @endif
        </li>
        @endforeach
    </ul>
    <button><a href="{{route('posts.create')}}">新規登録</a></button>
</body>
</html>
