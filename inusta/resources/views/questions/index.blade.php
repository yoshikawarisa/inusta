<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions Index</title>
</head>

<body>
    <h1><a href="{{ route('users.index') }}">inusta</a></h1>
    <h2>Qustions</h2>

    <ul>
        @foreach($questions as $question)
            <li>
                <a href="{{ route('questions.show', $question->id) }}">{{ $question->title }}</a>
                {{ $question->user->name }}
                <form action="{{route('questions.toggleStatus', $question->id) }}" method="POST">
                    @csrf
                    <button type="submit">
                        {{$question->judgement ? '解決済' : '未解決' }}
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
    <button><a href="{{route('questions.create')}}">新規登録</a></button>
</body>
</html>