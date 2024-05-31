<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>質問の詳細</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1 class="text-gradient" style="text-align:"><a href="{{ route('questions.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
        </h1>
        <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;"> Question　　　　　</h2>
        <button class="c-btn circle" style="font-size: 25px; color: #5e44449f" vertical-align: top;" onclick="window.location='{{ route('questions.edit', $question->id) }}'">編集→</button><br><br><br>


        <ul style="text-align: right;">
            <li style="display: inline-block; margin: 0 30px; position: relative;">
                <div class="question-container">
                    @if($question->judgement)
                        <span class="resolved-mark">解決</span>
                    @endif
                    <div><strong>{{$question->title}}</strong></div><br>
                    <!-- Displaying the title -->
                    <div style="position: absolute; top: -40px; left: -40px;">{{$question->user->name}}</div>
                    <form action="{{ route('questions.toggleStatus', $question->id) }}" method="POST">
                        @csrf
                        {{ $question->text }}<br> <!-- Displaying the text -->
                        <div class="button-container1">
                            <button type="submit" style="border: none; color: #ff711e9f;">
                                {{ $question->judgement ? '解決済' : '未解決' }}
                            </button>
                        </div>
                    </form>
                </div>
            </li><br><br>
        </ul>
        
        
        <h3 style="margin-bottom: 20px; padding: 15px; border-radius: 10px; color: #ff711e9f; background-color: #f0f0f0;">

            コメント
    
            <form action="{{ route('question_comments.store', $post->id) }}" method="POST">
                @csrf
                <div class="login1" style="text-align: center;">
                    <textarea id="text" name="text" class="ed-input" rows="1" cols="20"></textarea>
                </div>
                <br>
            
                <div class="login1" style="text-align: center; font-size: 20px;">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <button type="submit" style="color: #ff711e9f; font-size: 20px; border: none; background: none;">送信</button>
                </div>
            </form>
        </h3>
        


    <form action="{{ route('question_comments.store',$question->id) }}" method="POST">
        @csrf
        <label for="text">コメント:</label>
        <textarea name="text" id="text"></textarea>
        <button type="submit">投稿</button>
    </form>





    <br><br>
    <h3>コメント一覧</h3> 
    @foreach ($question->comments as $comment)
        <p>{{$comment->text}}</p>
        <form action="{{ route('question_comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit">削除</button>
        </form>
    @endforeach
</body>
</html>
