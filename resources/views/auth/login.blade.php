<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Регистрация</title>
</head>
<body>
    <section class="reg">
        <h1>Вход в систему</h1>
            <form method="POST" action="{{ route('login') }}" class="auth-form">
                @csrf
                <div class="form-group">
                    <label for="email">Электронная почта</label><br>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label><br>
                    <input id="password" type="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="button">Войти</button>
                </div>

                @if ($errors->any())
                    <div class="auth-errors">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
            </form>
    </section>
    <style>
        h1 {
            text-align: center;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
        }

        input {
            margin-bottom: 20px;
        }
    </style>
</body>
</html>
