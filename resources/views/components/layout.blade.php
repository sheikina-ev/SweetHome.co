<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Кондитерская')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script defer src="{{ asset('assets/js/main.js') }}"></script>
    <link href="https://fonts.google.com/specimen/Montserrat" rel="stylesheet">
    <script defer src="{{ asset('assets/js/app.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>{{ $title  }}</title>
</head>
<body>
<div class="wrapper">
    <div class="block1">
        <!-- Навигационные ссылки и логотип -->
        <div class="navigation">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('/public/images/Sweet%20Home.png') }}" style="width: 150px;" alt="logo">
                </a>
            </div>
            <nav class="links">
                <a class="one" href="#">О нас</a>
                <!-- Логин заменить на каталог -->
                <a class="two" href="{{ route('products') }}">Каталог</a>
                <a class="three" href="#delivery">Доставка и оплата</a>
                <a class="four" href="#reviews">Отзывы</a>
                <a class="five" href="#lnks">Контакты</a>
            </nav>
            <div class="new">
                <div class="dropdown" id="loginDropdown">
                    <!-- Изображение для входа -->
                    @auth
                        <a href="{{ route('profile') }}">
                            @else
                                <a href="{{ route('login') }}">
                                    @endauth
                                    <img src="{{ asset('/public/images/login.png') }}" alt="LoginImage" class="login" id="loginImage">
                                </a>
                                <!-- Выпадающий список -->
                                <div class="dropdown-content" id="loginDropdownContent">
                                    <!-- Форма для выхода из системы -->
                                    @auth
                                        <a href="#">История заказов</a>
                                        <a href="#">Доставка</a>
                                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" style="background: none; border: none; cursor: pointer;">Выйти</button>
                                        </form>
                            @endauth
                        </a>
                </div>
            </div>



            <!-- Добавьте другие ссылки как вам нужно -->

            <a href="{{ route('home') }}">
                <img src="{{ asset('/public/images/carts.png') }}" alt="CartsImage" class="carts">
            </a>
            <a href="{{ route('home') }}">
                <img src="{{ asset('/public/images/search.png') }}" alt="SearchImage" class="search">
            </a>
        </div>
            </div>

        </div>
<main>
    {{$slot}}
</main>

<footer>
    <img src="{{ asset('assets/images/SH.png') }}" alt="">
    <div id="lnks">
        <a href="#about">О нас</a>
        <a class="two" href="#orders">Каталог</a>
        <a href="#delivery">Доставка и оплата</a>
        <a href="#reviews">Отзывы</a>
        <a href="#lnks">Контакты</a>
        <a href="#">8 (800) 302-40-15</a>
    </div>
</footer>

</body>
</html>
<style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: grey;
        min-width: 160px;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }
    * {
        padding: 0;
        margin: 0;
        font-family: 'Montserrat', sans-serif;
    }
    body {
        background: rgb(99, 39, 120);
    }
    .new {
        margin-left: 1600px;
        margin-bottom: 50px;
        margin-top: -40px;
        cursor: pointer;
    }
    html{
        scroll-behavior: smooth;
    }
    .navigation{
        width: 100%;
        height: 155px;
        background-color: black;
    }

    .links > a {
        text-decoration: none;
        margin-right: 80px;
        cursor: pointer;
        color: white;
    }

    .login{
        margin-right: 30px;
    }
    .carts{
        margin-right: 30px;
    }

    .links {
        font-size: 20px;
        display: flex;
        justify-content: center;
        margin-top: -50px;
    }
    .logo {
        margin-left: 60px;
        padding-top: 50px;
    }


    .wrapper {
        display: flex;
        flex-direction: column;
    }
    #lnks{
        font-family: sans-serif;
        font-size: 20px;
        margin-top: -30px;
        padding-left: 621px;

        justify-content: center;
    }
    #lnks > a {
        text-decoration: none;
        margin-right: 80px;
    }


    main {
        flex: 1; /* Основной контент занимает доступное пространство */
    }

    footer {
        background-color: black;
        width: 100%;
        height: 150px;
        margin-top: 300px; /* Помещает футер внизу, даже если основной контент небольшой */
    }

    footer > img {
        margin-top: 108px;
        margin-left: 250px;
    }

</style>
<script>
    // Проверяем, авторизован ли пользователь
    $(document).ready(function() {
// Обработчик события клика на изображение для входа
        $("#loginImage").click(function() {
            @guest
            // Если пользователь не авторизован, перенаправляем его на страницу логина
            window.location.href = "{{ route('login') }}";
            @endguest
        });

// При наведении на изображение для входа
        $("#loginImage").hover(function() {
            @auth
            // Если пользователь авторизован, показываем выпадающий список
            $("#loginDropdownContent").css("display", "block");
            @endauth
        }, function() {
// При уходе мыши с изображения скрываем выпадающий список
            $("#loginDropdownContent").css("display", "none");
        });
    });
</script>
