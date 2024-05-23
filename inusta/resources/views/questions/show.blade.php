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
</body>
</html>
