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
    <section class="main">
        <div class="main-text">
            <h2>Путешествие в</h2>
            <h1>Китай</h1>
            <p>Китай - столица Южной Китайской Республики и один из самых крупных государств в мире. Обладает уникальными месторождениями, красивыми картинками и историческими достопримечательностями.</p>
            <a href="#">Подробнее</a>
        </div>
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
    <section class="exchange-rate">
        <h5>Курс валют</h5>
            @if(isset($exchangeRate) && $exchangeRate !== null)
            <input type="number" name="exchangeRate" class="exchangeRate" value="1" onchange="document.querySelector('.exchangeResult').innerHTML = (document.querySelector('.exchangeRate').value * {{$exchangeRate}}).toFixed(2)"> 
            <p>юань (CNY) = <span class="exchangeResult">{{ number_format($exchangeRate, 2) }}</span> рублей (RUB)</p>
            
            @else
                <p>Курс валют временно недоступен. Пожалуйста, попробуйте позже.</p>
            @endif
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
