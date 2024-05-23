<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>inusta</h1>
    <h2>Questions 登録フォーム</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('questions.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- タイトル -->
        <label for="title">タイトル:</label><br>
        <input type="text" id="title" name="title"><br>

        <!-- 本文 -->
        <label for="text">本文:</label><br>
        <input type="text" id="text" name="text"><br>

        <!-- 登録ボタン -->
        <input type="submit" value="登録">
    </form>
    
</body>
</html>