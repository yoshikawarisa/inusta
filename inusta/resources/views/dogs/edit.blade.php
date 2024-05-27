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
    <h2>My Dog 編集</h2>
    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('dogs.update', $dog->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- 名前 -->
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name" value="{{ $dog->name }}"><br>

        <!-- 性別 -->
        <label for="gender">性別:</label><br>
        <select name="gender" id="gender" value="{{ $dog->gender }}">
            <option value="male" {{ $dog->gender == 'male' ? 'selected' : '' }}> 男の子</option>
            <option value="female" {{ $dog->gender == 'female' ? 'selected' : '' }}> 女の子</option>
        </select><br>

        <!-- 年齢 -->
        <label for="age">年齢:</label><br>
        <input type="number" id="age" name="age" value="{{ $dog->age }}"><br>

        <!-- 性格 -->
        <label for="personality">性格:</label><br>
        <input type="text" id="personality" name="personality" value="{{ $dog->personality }}"><br><br>

        <!-- 犬種 -->
        <label for="breed">犬種:</label><br>
        <input type="text" id="breed" name="breed" value="{{ $dog->breed }}"><br>

        <!-- アイコン -->
        <label for="icon">アイコン:</label><br>
        @if ($dog->icon)
            <img src="{{ asset('storage/' . $dog->icon) }}" alt="Dog Icon" style="width: 100px; height: auto;"><br>
        @endif
        <input type="file" id="icon" name="icon"><br>

        <!-- 送信ボタン -->
        <input type="submit" value="更新">
    </form>
</body>
</html>