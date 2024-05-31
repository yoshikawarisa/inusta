<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://kit.fontawesome.com/27a886eeb5.js" crossorigin="anonymous"></script>
</head>

<body>
    <br><br><br><br><br><br>
    <h1 class="text-gradient" style="text-align: center;">inusta</h1>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form method="POST" action="{{ route('users.login') }}">
        @csrf

        <div class="login1" style="text-align: center;">
            <input type="email" id="email" name="email" value="" placeholder="メールアドレス" >
            <br><br><br>

            <input type="password" id="password" name="password"  value="" placeholder="パスワード" ><br><br><br>

            <button class="c-btn circle" type="submit" style="font-size: 20px;">ログイン</button>
<br><br><br><br><br>
        </div>
    </form>
    <p class="new">　　初めての方はこちら　　
        <button class="c-btn circle" style="font-size: 20px" onclick="window.location='{{ route('users.create') }}' ">新規登録</button>
    </p>
</body>
</html>
