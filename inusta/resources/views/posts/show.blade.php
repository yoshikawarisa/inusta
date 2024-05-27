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

    <h3>コメントを書く</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('post_comments.store',$post->id) }}" method="POST">
        @csrf
        <label for="text">コメント:</label>
        <textarea name="text" id="text"></textarea>
        <button type="submit">投稿</button>
    </form>

    <br><br>
    <h4>コメント一覧</h4> 
    @foreach ($post->comments()->get() as $comment)
        <p>{{$comment->text}}</p>
        <form action="{{ route('post_comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
    @endforeach
    
    @if ($post->comments()->count() === 0)
        <p>コメントはありません。</p>
    @endif
    
    


</body>
</html>