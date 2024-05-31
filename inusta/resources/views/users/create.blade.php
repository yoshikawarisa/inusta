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
    <h1 class="text-gradient" style="text-align:">inusta</h1>
    <h2>新規登録</h2><br>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <!-- 名前 -->
        <div class="login1" style="text-align: center;">
            <input type="text" id="name" name="name" value="" placeholder="名前" class="ed-input">
            <br><br>
        </div>
    
        <!-- メールアドレス -->
        <div class="login1" style="text-align: center;">
            <input type="email" id="email" name="email" value="" placeholder="メールアドレス" class="ed-input">
            <br><br>
        </div>
        
        <!-- パスワード -->
        <div class="login1" style="text-align: center;">
            <input type="password" id="password" name="password" value="" placeholder="パスワード" class="ed-input">
            <br><br>
        </div>
        
        <!-- パスワード（確認） -->
        <div class="login1" style="text-align: center;">
            <input type="password" id="password_confirmation" name="password_confirmation" value="" placeholder="パスワード（確認）" class="ed-input">
            <br><br>
        </div>
        
        <!-- 登録ボタン -->
        <div class="login1" style="text-align: center;">
            <button class="ed1 circle" type="submit">登録</button>
            <br><br>
        </div>
    </form>
</body>
</html>