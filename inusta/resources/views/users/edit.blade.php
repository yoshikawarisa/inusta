<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Edit</title>
</head>

<body>
    <h1>inusta</h1>
    <h2>ユーザー情報変更</h2>
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
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br>
    
        <!-- メールアドレス -->
        <label for="email">メールアドレス:</label><br>
        <input type="email" id="email" name="email" value="{{ $user->email }}"><br>
    
        <!-- パスワード -->
        <label for="password">パスワード:</label><br>
        <input type="password" id="password" name="password"><br>
    
        <!-- パスワード（確認） -->
        <label for="password_confirmation">パスワード（確認）:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation"><br><br>
        
        <!-- 送信ボタン -->
        <input type="submit" value="更新">
    </form>
</body>
</html>
