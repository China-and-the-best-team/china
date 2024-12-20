<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <link  rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body class="about-tour">
<header>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Блог</a></li>
        </ul>
    </header>
    <section class="text-container">
    <h1>{{ $post->title }}</h1>
    <img src="{{ $post->image }}" alt="Image for {{ $post->title }}">
    <p>{{ $post->content }}</p>
    <h3>Комментарии</h3>
    <div class="comment">
        
        @foreach ($post->comments as $comment)
            <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}</p>
        @endforeach
    
    @auth
        <form action="{{ route('comments.store', $post->id) }}" method="POST">
            @csrf
            <textarea name="comment" placeholder="Leave a comment" required></textarea>
            <button type="submit">Submit</button>
        </form>
    @else
        <p>Пожалуйста <a href="{{ route('login') }}">выполните вход</a> чтобы оставить комментарий.</p>
    @endauth
    </div>
</section>
</body>
</html>