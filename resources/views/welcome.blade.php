<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ChinaTour</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Блог</a></li>
        </ul>
    </header>
    <section class="slider">
    </section>
    <section class="about-us">
            @foreach ($posts as $post)
                <div class="card">
                    <div class="about-img">
                        <img src="{{ $post->image }}" alt="Image for {{ $post->title }}">
                    </div>
                    <div class="about-text">
                        <h2>{{ $post->title }}</h2>
                        <p>{{ $post->content }}</p>
                    </div>
                </div>
            @endforeach
        <a href="#">Подробнее</a>
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
