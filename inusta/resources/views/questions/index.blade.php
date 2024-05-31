<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-7srjXO2gFj/97MjRV0LdQ/k5w4Wn7z7FEdZD0EV5xtJLP5W75anphJpTjsAY3wI53k+Lpmzy8NqKNVY3B76oXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('users.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
    <div style="display: flex; align-items: center;">
        <h2>Qustions　　　</h2>
        <button class="c-btn circle" style="font-size: 25px; color: #5e44449f; margin-left: 10px;" onclick="window.location='{{ route('questions.create') }}'">➕新規作成</button>
    </div>
    

    <ul style="text-align: center;">
        @foreach($questions as $question)
            <li style="display: inline-block; margin: 0 10px;">
                <div class="question-container">
                    @if($question->judgement)
                        <span class="resolved-mark">解決</span>
                    @endif
                    <div class="question-header">{{$question->user->name}}</div>
                    <form action="{{ route('questions.toggleStatus', $question->id) }}" method="POST">
                        @csrf
                        <a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a><br><br>
                        <div class="button-container1">
                            <button type="submit" style="border: none; color: #ff711e9f;">
                                {{ $question->judgement ? '解決済' : '未解決' }}
                            </button>
                        </div>
                    </form>
                </div>
            </li><br><br>
        @endforeach
    </ul>
    
    
    
    
    
</body>
</html>
