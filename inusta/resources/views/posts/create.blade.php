<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        ul, ol {
            list-style: none;
        }
    </style>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons|Material+Icons+Round" rel="stylesheet">
    <link rel="stylesheet" href="newiine_app/newiine.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('posts.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: inline-block; vertical-align: top;">
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">Post　　　　　新規作成</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <br><br>

    <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- つぶやき-->
            <p>つぶやき</p>
            <div class="login1" style="text-align: center;">
                <textarea id="text" name="text" class="ed-input" rows="6" cols="30"></textarea>
            </div>
            <br><br>
        
            <!-- 画像 -->
            <p>写真</p>
            <div style="text-align: center;">
                <input type="file" id="icon" name="photo" onchange="previewImage(event)"><br><br>
                <img id="preview" src="#" alt="犬のアイコン" style="width: 300px; /* 画像の幅を指定 */
                height: 300px; /* 画像の高さを指定 */
                object-fit: cover; /* 画像を均等に収めるように指定 */
                border-radius: 8px; /* 画像の角を丸める */ display: none;"><br><br>
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
        </script>

        
        <!-- 投稿ボタン -->
        <div class="login1" style="text-align: center; font-size: 30px;">
            <button class="ed1 circle" type="submit">投稿</button>
            <br><br>
        </div>
    </form>
    
</body>
</html>


