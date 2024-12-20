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
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Блог</a></li>
        
        @if ($isLoggedIn)
        <li><a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Выйти
            </a></li>
            <li><form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form></li>
        @else
        <li><a href="{{ route('login') }}" class="nav-link">Вход</a></li>
        <li><a href="{{ route('register') }}" class="nav-link">Регистрация</a></li>
        @endif
        </ul>
    </header>
    <section class="about-us">
        <div class="card">
            <div class="about-img">
                <img src="image1.jpg" alt="Image 1">
            </div>
            <div class="about-text">
                <h3>Чина-товн</h3>
                <p>Чина-товн - один из столиц ��ермании и одного из крупнейших городов мира.</p>
            </div>
        </div>
        <div class="card">
            <div class="about-img">
                <img src="image1.jpg" alt="Image 1">
            </div>
            <div class="about-text">
                <h3>Чина-товн</h3>
                <p>Чина-товн - один из столиц ��ермании и одного из крупнейших городов мира.</p>
            </div>
        </div>
        <div class="card">
            <div class="about-img">
                <img src="image1.jpg" alt="Image 1">
            </div>
            <div class="about-text">
                <h3>Чина-товн</h3>
                <p>Чина-товн - один из столиц ��ермании и одного из крупнейших городов мира.</p>
            </div>
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
</body>
</html>
