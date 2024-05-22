<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>犬の詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>inusta</h1>
    <h2>My Dog 詳細</h2>
    <a href="{{ route('dogs.edit', $dog->id) }}">編集</a>
    <div>
        <h3>{{ $dog->name }}</h3>
        <p><strong>性別:</strong> {{ $dog->gender }}</p>
        <p><strong>年齢:</strong> {{ $dog->age }}</p>
        <p><strong>性格:</strong> {{ $dog->personality }}</p>
        <p><strong>犬種:</strong> {{ $dog->breed }}</p>
        <p><strong>アイコン:</strong></p>
        <img src="{{ asset('storage/' . $dog->icon) }}" alt="犬のアイコン">
    </div>
</body>
</html>
