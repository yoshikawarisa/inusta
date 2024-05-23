<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>inusta</h1>
    <h2>Question 編集</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('questions.update', $question->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- 名前 -->
        <p><strong>{{ $question->user->name }}</strong></p>

        <!-- タイトル -->
        <label for="title">タイトル:</label><br>
        <input type="text" id="title" name="title" value="{{ $question->title }}"><br>

        <!-- 本文-->
        <label for="text">本文:</label><br>
        <input type="text" id="text" name="text" value="{{ $question->text }}"><br>

        <!-- 解決判定 -->
        <label for="judgement">解決済？:</label><br>
        <select name="judgement" id="judgement">
            <option value="0" @if(!$question->judgement) selected @endif>いいえ</option>
            <option value="1" @if($question->judgement) selected @endif>はい</option>

        <!-- 更新ボタン -->
        <input type="submit" value="更新">
    </form>
</body>
</html>