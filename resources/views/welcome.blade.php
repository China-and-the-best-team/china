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
        @if ($isLoggedIn)
            <a href="{{ route('logout') }}" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Выйти
            </a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
        @else
            <a href="{{ route('login') }}" class="nav-link">Вход</a>
            <a href="{{ route('register') }}" class="nav-link">Регистрация</a>
        @endif
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
    <section class="exchange-rate">
        <h2>Курс валют</h2>
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
