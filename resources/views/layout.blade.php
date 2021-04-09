<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Тестовое задание</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a class="navbar-brand">Тестовое задание</a>
            <form action="{{ route('contact-form') }}" method="post" class="form-inline">
                @csrf
                <input required class="form-control mr-sm-2" type="text" placeholder="Имя" name="name" id="name" value="">
                <input required class="form-control mr-sm-2" type="text" placeholder="Телефон" name="phone" id="phone">
                <input required class="form-control mr-sm-2" type="text" placeholder="Email" name="email" id="email">
                <input class="form-check-input" type="radio" name="whantToBy" id="whantToBy1" value="1" checked>
                <label class="form-check-label" for="whantToBy1">
                    Да
                </label>
                <input class="form-check-input" type="radio" name="whantToBy" id="whantToBy2" value="0">
                <label class="form-check-label" for="whantToBy2">
                    Нет
                </label>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Добавить</button>
            </form>
        </nav>
    </header>
    <article>
        <div class="container">
            @yield('table')
        </div>
    </article>
</body>
</html>