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
        <h1>Регистрация</h1>
        <form action="/register" method="post">
            @csrf
            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Почта:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Зарегистрироваться">
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
