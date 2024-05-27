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
    <h2>Post 編集</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- 名前 -->
        <p><strong>{{ $post->user->name }}</strong></p>

        <!-- 内容 -->
        <label for="text">内容:</label><br>
        <input type="text" id="text" name="text" value="{{ $post->text }}"><br>

        <!-- 画像-->
        <label for="photo">画像:</label><br>
        @if($post->photo)
            <img src="{{ asset('storage/' . $post->photo) }}" alt="Post Image" style="width: 100px; height: auto;"><br>
        @endif
        <input type="file" id="photo" name="photo"><br>

        <!-- 更新ボタン -->       
        <input type="submit" value="更新">
    </form>
</body>
</html>
