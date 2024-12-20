<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>ChinaTour</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="{{ route('index') }}">Главная</a></li>
            <li><a href="{{ route('where-to-go') }}">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Блог</a></li>
            @if ($isLoggedIn)
                <li><a href="{{ route('logout') }}"
                       class="nav-link"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Выйти
                    </a>
                </li>
                <li><form id="logout-form"
                          method="POST"
                          action="{{ route('logout') }}"
                          style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}" class="nav-link">Вход</a></li>
                <li><a href="{{ route('register') }}" class="nav-link">Регистрация</a></li>
            @endif
        </ul>
    </header>
    <section class="hero">
        <img src="img/image 25.jpg" alt="" width="1210px" height="541px">
    </section>
    <section class="about">
        <p>Китай — Это страна, где культура, традиции и современные достижения<br>переплетаются, создавая уникальный облик. Китай подарил миру не только такие<br>изобретения, как бумага, порох, компас и печатный станок, но и философские<br>учения, такие как конфуцианство и даосизм</p>
    </section>
    <section class="counter">
        <h1> Лучшие места по мнению пользователей </h1>
        <div class="cards">
        @foreach ($posts as $post)
            <div class="card">
                <div class="about-img">
                    <img src="{{ $post->image }}" alt="Image for {{ $post->title }}">
                </div>
                <div class="about-text">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('show', $post->id) }}">Подробнее</a>
                </div>
            </div>
        @endforeach
        </div>
    </section>
    <footer>
        <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
            <li><a href="#">Главная</a></li>
    </footer>
<style>
    h1 {
        text-align: center;
        font-size: 30px;
    }

    section {
        background-image: url('Group 27.svg');
    }

    .hero{
        display: flex;
        justify-content: center;

        margin-top: 130px;
    }

    .about p {
        display: flex;
        justify-content: center;

        margin-bottom: 20px;
        font-size: 28px;
    }

    .counter {
        margin-top: 100px;
    }

    .cards {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }


</style>
</body>
</html>
