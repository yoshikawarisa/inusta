<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('questions.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: inline-block; vertical-align: top;">
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">Question　　　　　編集</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <br> <br>

    <form action="{{ route('questions.update', $question->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- 名前 -->
        <p><strong>{{ $question->user->name }}</strong></p>
        <br>

        <!-- タイトル -->
        <p>タイトル</p>
        <div class="login1" style="text-align: center;">
            <input type="text" id="title" name="title" value="{{ $question->title }}" class="ed-input">
            <br>
        </div>

        <!-- 本文-->
        <p>本文</p>
        <div class="login1" style="text-align: center;">
            <textarea id="text" name="text" class="ed-input" rows="6" cols="30">{{ $question->text }}</textarea>
        </div>
        <br><br>

        <!-- 完了ボタン -->
        <div class="login1" style="text-align: center;">
            <button class="ed1 circle" type="submit">完了</button>
    </form>
</body>
</html>