<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* フォーカス時のスタイル */
        select:focus {
            font-size: 18px; /* 選択肢の文字サイズを変更 */
        }
    </style>
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('dogs.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: inline-block; vertical-align: top;">
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">My Dogs　　　　 新規登録</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('dogs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <!-- 名前 -->
        <p>名前</p>
        <div class="login1" style="text-align: center;">
            <input type="text" id="name" name="name" value="" class="ed-input">
            <br>
        </div>

        <!-- 性別 -->
        <label for="gender">性別:</label><br>
        <div class="login1" style="text-align: center;">
            <select name="gender" id="gender" class="ed-input">
                <option value="" style="font-size: 18px;">選択してください</option>
                <option value="male">男の子</option>
                <option value="female">女の子</option>
            </select>
        </div>        

        <!-- 年齢 -->
        <p>年齢</p>
        <div class="login1" style="text-align: center;">
            <input type="number" id="age" name="age" value="" class="ed-input">
            <br>
        </div>
    
        <!-- 性格 -->
        <p>性格</p>
        <div class="login1" style="text-align: center;">
            <input type="text" id="personality" name="personality" value="" class="ed-input">
            <br>
        </div>
        
        <!-- 犬種 -->
        <p>犬種</p>
        <div class="login1" style="text-align: center;">
            <input type="text" id="breed" name="breed" value="" class="ed-input">
            <br>
        </div>

        <!-- アイコン -->
        <div style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">
                <p style="margin-left: 0; margin-bottom: 0;">アイコン</p><br>
            </div>
        </div>
        <div style="text-align: center;">
            <input type="file" id="icon" name="icon" onchange="previewImage(event)"><br><br>
            <img id="preview" src="#" alt="犬のアイコン" style="width: 200px; height: 200px; border-radius: 50%; display: none;"><br><br>
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
        

        <!-- 登録ボタン -->
        <div class="login1" style="text-align: center; font-size: 30px;">
            <button class="ed1 circle" type="submit">登録</button>
            <br><br>
        </div>
    </form>
    
</body>
</html>