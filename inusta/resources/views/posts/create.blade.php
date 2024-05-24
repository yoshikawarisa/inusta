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
    <h2>Post 新規作成</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- 内容-->
        <label for="text">内容</label><br>
        <input type="text" id="text" name="text"><br>

        <!-- 写真 -->
        <label for="photo">写真:</label><br>
        <input type="file" id="photo" name="photo"><br>
        
        <!-- 投稿ボタン -->
        <input type="submit" value="投稿">
    </form>
    
</body>
</html>