<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs Index</title>
</head>

<body>
    <h1>My Dogs</h1>
    <ul>
        @foreach($dogs as $dog)
            <li>{{ $dog->name }} - {{ $dog->breed }} - {{ $dog->age }}</li>
        @endforeach
    </ul>
</body>
</html>
