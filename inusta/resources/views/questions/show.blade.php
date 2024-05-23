<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>質問の詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>inusta</h1>
    <h2>Question 詳細</h2>
    <a href="{{ route('questions.edit', $question->id) }}">編集</a>

    <div>
        <p><strong>{{ $question->user->name }}</strong></p>
        <p><strong>タイトル:</strong> {{ $question->title }}</p>
        <p><strong>本文:</strong> {{ $question->text }}</p>
        <p><strong>解決済？:</strong> {{ $question->judgement ? 'はい' : 'いいえ' }}</p>
    </div>


    <h2>コメントを書く</h2>
    <form action="{{ route('question_comments.store',$question->id) }}" method="POST">
        @csrf
        <label for="text">コメント:</label>
        <textarea name="text" id="text"></textarea>
        <button type="submit">投稿</button>
    </form>

    <br><br>
    <h3>コメント一覧</h3> 
    @foreach ($question->comments as $comment)
        <p>{{$comment->text}}</p>
        <form action="{{ route('question_comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
    @endforeach
</body>
</html>
