<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>Registraation</title>
</head>
<body>
    <section class="reg">
        <header>
            <ul>
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Туры</a></li>
            <li><a href="#">Контакты</a></li>
            <li><a href="#">Блог</a></li>
            </ul>
        </header>
        <h1>Добавить пост</h1>

        <form action="/post" method="post">
            @csrf
            <label for="title">Заголовок:</label>
            <input type="text" id="title" name="title" required>
            <label for="city">Город:</label>
            <input type="text" id="city" name="city" required>
            <label for="title">Текст:</label>
            <input type="text" id="text" name="content" required>
            <label for="image">Изображение</label>
            <input type="text" id="image" name="image" required>
            <input type="submit" value="Опубликовать">
        </form>
        <footer>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Главная</a></li>
                <li><a href="#">Главная</a></li>
        </footer>
    </section>
</body>
</html>
