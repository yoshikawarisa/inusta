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
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('dogs.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>

    <div style="display: inline-block; vertical-align: top;">
        <div style="text-align: center;">
            <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">My Dog　　　</h2>
            <br><br>
            <a style="font-size: 25px; vertical-align: top; text-decoration: none; color:#d86565f1;">　　　　　　{{ $dog->name }}</a>
        </div>
        
    </div><br><br><br>

    
    <div style="display: flex; justify-content: center;">
        <img src="{{ asset('storage/' . $dog->icon) }}" alt="犬のアイコン" style="width: 200px; height: 200px; border-radius: 50%;">
    </div>
    <br><br>

    <div style="text-align: center; color: #d86565f1; font-size: 25px;">
        @if ($dog->gender == 'female')
            <p style="display: inline-block; margin: 0;">女の子</p>
        @elseif ($dog->gender == 'male')
            <p style="display: inline-block; margin: 0;">男の子</p>
        @else
            <p style="display: inline-block; margin: 0;">不明</p>
        @endif
        　　　<p style="display: inline-block; margin: 0;">{{ $dog->age }}歳</p>
        <br><br><br>
    
        <p style="display: inline-block; margin: 0;">{{ $dog->personality }}</p>
        <p style="display: inline-block; margin: 0;">　　{{ $dog->breed }}</p>
        <br>
    </div>    
    
    <br><br>
    <div style="text-align: right;">
        <button class="c-btn circle" style="font-size: 25px; color: #5e44449f;" onclick="window.location='{{ route('dogs.edit', $dog->id) }}'">編集</button>
    </div>
    

</body>
</html>