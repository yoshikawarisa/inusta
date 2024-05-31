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
        <h1 class="text-gradient" style="text-align:"><a href="{{ route('posts.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
        </h1>
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;"> Post　　　　　</h2>
        <button class="c-btn circle" style="font-size: 25px; color: #5e44449f" vertical-align: top;" onclick="window.location='{{ route('posts.edit', $post->id) }}'">編集→</button><br><br>

    <div class="post">
        <h2>{{ $post->user->name }}</h2>
        <p> {{ $post->text }}</p>
        @if($post->photo)
        <img src="{{ asset('storage/' . $post->photo) }}" style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px;">
        @else
        <span>なし</span>
        @endif
    </div>


    
    <h3 style="margin-bottom: 20px; padding: 15px; border-radius: 10px; color: #ff711e9f; background-color: #f0f0f0;">

        コメント

        <form action="{{ route('post_comments.store', $post->id) }}" method="POST">
            @csrf
            <div class="login1" style="text-align: center;">
                <textarea id="text" name="text" class="ed-input" rows="1" cols="20"></textarea>
            </div>
            <br>
        
            <div class="login1" style="text-align: center; font-size: 20px;">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <button type="submit" style="color: #ff711e9f; font-size: 20px; border: none; background: none;">送信</button>
            </div>
        </form>
    </h3>
    

    <br>
    <h4 style="color: #ff711e9f; font-size: 20px;">
        コメント一覧
    </h4>
    
    <h5 style="margin-bottom: 20px; padding: 15px; border-radius: 10px; color: #0000009f; background-color: #f0f0f0;">
        @foreach ($post->comments()->get() as $comment)
            <div style="display: flex; align-items: center;">
                <p style="flex: 1;">{{$comment->text}}</p>
                <form action="{{ route('post_comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="color: #ff711e9f; font-size: 15px; border: none; background: none; margin-left: 10px;">削除</button>
                </form>
            </div>
            <br><br>
        @endforeach
        
        @if ($post->comments()->count() === 0)
            <p>まだコメントはありません</p>
        @endif
    </h5>
    
</body>
</html>