<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Регистрация</title>
</head>
<body>
    <section class="reg">
        <header>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Куда сходить?</a></li>
                <li><a href="#">Создание постов</a></li>
                <li><a href="#">Аккаунт</a></li>
            </ul>
        </header>
        <h1>Вход в систему</h1>
            <form method="POST" action="{{ route('login') }}" class="auth-form">
                @csrf
                <div class="form-group">
                    <label for="email">Электронная почта</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input id="password" type="password" name="password" required>
                </div>
                <button type="submit" class="button">Войти</button>

                @if ($errors->any())
                    <div class="auth-errors">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>
        <footer>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Куда сходить?</a></li>
                <li><a href="#">Создание постов</a></li>
                <li><a href="#">Аккаунт</a></li>
            </ul>
        </footer>
    </section>
</body>
</html>
