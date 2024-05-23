<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs Index</title>
</head>

<body>
    <h1>inusta</h1>
    <h2>My Dogs</h2>
    <ul>
        @foreach($dogs as $dog)
            <li><a href="{{ route('dogs.show', $dog->id) }}">{{ $dog->name }}</a> - {{ $dog->breed }}</li>
        @endforeach
    </ul>
    <button><a href="{{route('dogs.create')}}">新規登録</a></button>
</body>
</html>