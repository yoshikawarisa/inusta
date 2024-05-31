<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts Index</title>
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
<script>
    $(document).ready(function() {
        $('.newiine_btn').click(function() {
            // ボタンのクリックイベントをキャッチ
            var button = $(this);
            var iineCount = button.find('.newiine_count'); // いいね数の要素
            var iineName = button.data('iinename'); // いいねボタンの名前

            // ここにいいねのロジックを追加します（サーバーへのリクエストなど）
            // 仮に以下のようにして、いいねの数を増やすだけのロジックを記述します
            var currentCount = parseInt(iineCount.text()); // 現在のいいね数を取得
            iineCount.text(currentCount + 1); // いいね数をインクリメント

            // ハートの色を切り替える
            var heartIcon = button.find('.material-icons-round');
            if (heartIcon.hasClass('liked')) {
                heartIcon.removeClass('liked');
            } else {
                heartIcon.addClass('liked');
            }
        });
    });
</script>
</head>

<body class="p01">
    <div class="container">
        <h1 class="text-gradient" style="text-align:"><a href="{{ route('users.index') }}" style="text-decoration: none; color: inherit;">inusta</a></h1>
        </h1>

        <div style="display: inline-block; vertical-align: top;">
            <h2 style="display: inline-block; text-align: left; margin: 0; vertical-align: top;">Posts　　　　</h2>
            <button class="c-btn circle" style="font-size: 25px; color: #5e44449f" vertical-align: top;" onclick="window.location='{{ route('posts.create') }}'">➕新規作成</button>
        </div>
        <br><br>
        
        <ul class="post-list">
            @foreach($posts as $post)
            <li class="post">
                <div class="post-header">
                    <h2>{{ $post->user->name }}</h2>
                    @if(Auth::user()->bookmarks->contains($post->id))
                        <i class="fas fa-heart like-button liked"></i>
                    @else
                        <i class="far fa-heart like-button"></i>
                    @endif
                </div>
                <div class="post-content">
                    <a href="{{ route('posts.show', $post->id) }}"><p>{{ $post->text }}</p></a>
                </div>
                @if($post->photo)
                    <img src="{{ asset('storage/' . $post->photo) }}" class="post-image">
                @endif
        
                <!-- いいねボタン -->
<div style="text-align: right;">
    <button type="submit" class="newiine_btn" data-iinename="いいねボタンの名前" style="border: none;">
        <span class="material-icons-round">favorite</span>
    </button>
</div>

            </li>
            @endforeach
        </ul>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="newiine_app/newiine.js"></script>

    </div>


</body>
</html>
