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
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('questions.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: inline-block; vertical-align: top;">
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">Question　　　 新規作成</h2>
        <br><br>
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
        <p>タイトル</p>
        <div class="login1" style="text-align: center;">
            <input type="text" id="title" name="title" value="" class="ed-input">
            <br>
        </div><br>


        <!-- 本文 -->
        <p>本文</p>
        <div class="login1" style="text-align: center;">
            <textarea id="text" name="text" class="ed-input" rows="6" cols="30"></textarea>
            <br>
        </div>

        <br>

        <!-- 登録ボタン -->
        <div class="login1" style="text-align: center; font-size: 40px;">　
            <button class="ed1 circle" type="submit">投稿</button>
            <br><br>
        </div>
    </form>
    
    
</body>
</html>