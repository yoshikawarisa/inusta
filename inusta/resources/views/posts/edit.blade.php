<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Edit</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('posts.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: inline-block; vertical-align: top;">
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">Post　　　　　編集</h2>
        
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        
        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data"><br>
            @csrf
            @method('PUT')
            <!-- つぶやき -->
            <p>つぶやき</p>
            <div class="login1" style="text-align: center;">
                <textarea id="text" name="text" class="ed-input" rows="6" cols="30">{{ $post->text }}</textarea>
            </div>
            <br>

            <!-- 写真-->
            <p>現在の写真</p>
            <div style="text-align:">
                <img src="{{ asset('storage/' . $post->photo) }}" alt="Post Image" style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px;"><br>
                <div style="text-align: center;">
                    <img id="preview" src="#" alt="プレビュー画像" style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px; display: none;">
                </div>
            </div><br><br>
        
        
            <!-- 変更後の写真 -->
            <p>変更後の写真</p>
            <div style="text-align: center;">
                <input type="file" id="icon" name="icon" onchange="previewImage(event)"><br><br>
                <img id="preview" src="#" alt="選択した写真" style="width: 300px; height: 300px; object-fit: cover; border-radius: 8px; display: none;"><br>
            </div>
            
            <script>
                function previewImage(event) {
                    var reader = new FileReader();
                    reader.onload = function(){
                        var preview = document.getElementById('preview');
                        preview.src = reader.result;
                        preview.style.display = 'inline-block'; // プレビューを表示
                    };
                    reader.readAsDataURL(event.target.files[0]);
                }
            </script><br><br>
        

            <!-- 更新ボタン -->       
            <div class="login1" style="text-align: center;">
                <button class="ed1 circle" type="submit">完了</button>
                <br><br>
            </div>
        </form>
    </div>
</body>
</html>
