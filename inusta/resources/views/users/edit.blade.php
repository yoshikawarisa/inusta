<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('users.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <h2>ユーザー情報の編集</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <!-- 名前 --> 
        <p>名前</p>
        <div class="login1" style="text-align: center;">
            <input type="text" id="name" name="name" value="{{ $user->name }}" class="ed-input">
            <br>
        </div>
    
        <!-- メールアドレス -->
        <p>メールアドレス</p>
        <div class="login1" style="text-align: center;">
            <input type="email" id="email" name="email" value="{{ $user->email }}" class="ed-input">
            <br>
        </div>

        <!-- パスワード -->
        <p>パスワード</p>
        <div class="login1" style="text-align: center;">
            <input type="password" id="password" name="password" value="" class="ed-input">
            <br>
        </div>

        <!-- パスワード（確認） -->
        <p>パスワード（確認）</p>
        <div class="login1" style="text-align: center;">
            <input type="password" id="password_confirmation" name="password_confirmation" value="" class="ed-input">
            <br><br>
        </div>

        <!-- 更新ボタン -->
        <div class="login1" style="text-align: center;">
            <button class="ed1 circle" type="submit">完了</button>
            <br><br>
        </div>

    </form>
</body>
</html>