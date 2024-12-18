<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $post->title }}</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
        </ul>
    </header>
    <section class="post">
        <h1>{{ $post->title }}</h1>
        <h2>{{ $post->city }}</h2>
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <p>{{ $post->content }}</p>
        <p>Публицировано: {{ $post->created_at->format('d.m.Y') }}</p>
        <hr>
    </section>
    <footer>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Блог</a></li>
        </ul>
    </footer>
</body>
</html>
