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
    <h2>My Dog 登録</h2>
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
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name"><br>
    
        <!-- 性別 -->
        <label for="gender">性別:</label><br>
        <select name="gender" id="gender">
            <option value=""> 選択してください</option>
            <option value="male"> 男の子</option>
            <option value="female"> 女の子</option>
        </select><br>

        <!-- 年齢 -->
        <label for="age">年齢:</label><br>
        <input type="number" id="age" name="age"><br>
    
        <!-- 性格 -->
        <label for="personality">性格:</label><br>
        <input type="text" id="personality" name="personality"><br><br>
    
        <!-- 犬種 -->
        <label for="breed">犬種:</label><br>
        <input type="text" id="breed" name="breed"><br>

        <!-- アイコン -->
        <label for="icon">アイコン:</label><br>
        <input type="file" id="icon" name="icon"><br>

        <!-- 登録ボタン -->
        <input type="submit" value="登録">
    </form>
    
</body>
</html>