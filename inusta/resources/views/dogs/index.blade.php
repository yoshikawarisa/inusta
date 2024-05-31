<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dogs Index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        ul, ol {
            list-style: none;
        }
    </style>
    
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('users.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: inline-block; vertical-align: top;">
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;"> Dogs　　　　</h2>
        <button class="c-btn circle" style="font-size: 25px; color: #5e44449f" vertical-align: top;" onclick="window.location='{{ route('dogs.create') }}'">　➕新規登録</button>
    </div>
    
    <ul>
        @foreach($dogs as $dog)
        <li>
            <br>
            <a class="c-btn circle" href="{{ route('dogs.show', $dog->id) }}" style="font-size: 25px; vertical-align: top; text-decoration: none; color:#5e44449f">{{ $dog->name }}</a>


            <br>
            <div style="display: flex; justify-content: center; align-items: center; width: 80%; height: 80%;">
                <img src="{{ asset('storage/' . $dog->icon) }}" alt="犬のアイコン" style="width: 200px; height: 200px; border-radius: 50%;">
            </div>
            
            <br><br><br>
        </li>
        @endforeach
    </ul>
</body>
</html>