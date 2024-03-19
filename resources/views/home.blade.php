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
</head>
<body>
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

        <div class="line"></div>
</div>

    <h1>The Ideal <span>Prepared</span><br> Cake Regular! </h1>
    <div class="descriptions">Добро пожаловать в "Sweet Home" – ваш<br>
        дом сладких наслаждений! Наши<br>
        уникальные десерты приготовлены с<br>
        любовью для ваших вкусовых удовольствий.</div>
    <button class="order">
        <!-- -->
        <a class="two" href="{{ route('products') }}">Заказать</a>
    </button>

</div>

<!-- Преимущества кондитерской -->
<div class="block2" id="about">
    <h2>Наши преимущества</h2>
    <img src="/public/images/b2.png" alt="pros">
    <div class="pros">
        <img src="/public/images/1.png" alt="one">
        <p>Качественные<br> продукты</p>
    </div>
    <div class="pros2">
        <img src="/public/images/2.png" alt="two">
        <p>Уникальные<br> рецепты</p>
    </div>
    <div class="pros3">
        <img src="/public/images/3.png" alt="three">
        <p>Лучшие <br> кондитеры</p>
    </div>
    <div class="pros4">
        <img src="/public/images/4.png" alt="four">
        <p>Широкий <br> Ассортимент</p>
    </div>
    <div class="pros5">
        <img src="/public/images/5.png" alt="five">
        <p>Доступные <br> цены</p>
    </div>
    <div class="pros6">
        <img src="/public/images/6.png" alt="six">
        <p>Дорогое <br> оборудование</p>
    </div>
</div>
<!-- Доставка и оплата кондитерской -->
<div class="block3" id="delivery">
    <h2>Доставка и оплата</h2>
    <div class="one1">
        <div class="ord"></div>
        <div class="ones">01</div>
        <h3>Оформление заказа</h3>
        <div class="add">Добавьте<br>
            понравившийся товар<br>
            из каталога в корзину,<br>
            заполните форму</div>
    </div>
    <div class="two2">
        <div class="ord2"></div>
        <div class="twos">02</div>
        <h3>Оплата заказа</h3>
        <div class="add2">Оплата происходит на<br>
            сайте после<br>
            оформления заказа</div>
    </div>
    <div class="three3">
        <div class="ord3"></div>
        <div class="threes">03</div>
        <h3>Подтверждение заказа</h3>
        <div class="add3"> Наш сотрудник<br>
            свяжется с вами для<br>
            уточнения деталей заказа</div>
    </div>
    <div class="four4">
        <div class="ord4"></div>
        <div class="fours">04</div>
        <h3>Доставка и оплата</h3>
        <div class="add4">Наш курьер доставит<br>
            товар по Вашему<br>
            адресу прямо в руки</div>
    </div>
</div>
<!-- Отзывы клиентов -->
<div class="block4" id="reviews">
    <h3>ОТЗЫВЫ<br> КЛИЕНТОВ</h3>
    <div class="clients">ЗДЕСЬ СОБРАНЫ НЕКОТОРЫЕ ОТЗЫВЫ<br>
        НАШИХ КЛИЕНТОВ</div>
    <div class="line1"></div>
    <div class="alex">
        <img src="/public/images/Александр.png" alt="Александр">
    </div>
    <div class="desc_alex">
        Приятное обслуживание,<br>
        хороший выбор десертов.<br>
        Всегда все свежее и вкусное.<br>
        Однозначно рекомендую.<br>
        Особенно перед праздниками и<br>
        торжествами.</div>
    <div class="name_alex">Александр</div>
    <div class="line2"></div>
    <div class="lisa">
        <img src="/public/images/Лалиса.png" alt="Лалиса">
    </div>
    <div class="desc_lisa">
        Приятное обслуживание,<br>
        хороший выбор десертов.<br>
        Всегда все свежее и вкусное.<br>
        Однозначно рекомендую.<br>
        Особенно перед праздниками и<br>
        торжествами.</div>
    <div class="name_lisa">Лалиса</div>
    <div class="line3"></div>
    <div class="nikolai">
        <img src="/public/images/Николай.png" alt="Николай">
    </div>
    <div class="desc_nikolai">
        Приятное обслуживание,<br>
        хороший выбор десертов.<br>
        Всегда все свежее и вкусное.<br>
        Однозначно рекомендую.<br>
        Особенно перед праздниками и<br>
        торжествами.</div>
    <div class="name_nikolai">Николай</div>
    <div class="line4"></div>
    <div class="veronika">
        <img src="/public/images/Вероника.png" alt="Николай">
    </div>
    <div class="desc_veronika">
        Приятное обслуживание,<br>
        хороший выбор десертов.<br>
        Всегда все свежее и вкусное.<br>
        Однозначно рекомендую.<br>
        Особенно перед праздниками и<br>
        торжествами.</div>
    <div class="name_veronika">Вероника</div>
    <div class="line5"></div>
    <!-- Модальное окно для добавления отзыва -->
    <div class="modal" id="addReviewModal">
        <div class="modal-content">
            <span class="close" onclick="hideModal()">&times;</span>
            <h2 class="h-text">Оставить отзыв</h2>
            <!-- Добавьте поля для нового отзыва -->
            <input id="reviewName" placeholder="Ваше имя">
            <input id="reviewRating" type="number" min="1" max="5" placeholder="Оцените насколько понравилась наша работа (1-5)">
            <textarea id="reviewDescription" placeholder="Введите отзыв"></textarea>

            <button class="rev" onclick="addReview()">Добавить отзыв</button>
        </div>
    </div>

    <button class="add_rev" onclick="showModal()">Оставить отзыв</button>
</div>

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
    * {
        padding: 0;
        margin: 0;
        color: white;
        font-family: 'Montserrat', sans-serif;
    }
    html{
        scroll-behavior: smooth;
    }
    .navigation{
        width: 1903px;
        height: 155px;
        background-color: black;
    }
    .block1 {
        width: 1903px;
        height: 1080px;
        background-image: url({{ asset('/public//images/fon.png') }});
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
    .line{
        opacity: 30%;
        width: 1899px;
        border: 2px solid white;
    }
    .new {
        margin-left: 1600px;
        margin-bottom: 50px;
        margin-top: -40px;
        cursor: pointer;
    }
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

    /* Дополнительные стили, если нужно */


    h1{
        margin-top: 265px;
        margin-left: 139px;
        font-size: 64px;
    }
    .descriptions{
        font-size: 24px;
        margin-top: 28px;
        margin-left: 139px;
    }
    span{
        color: red;
    }
    .order{
        align-items: center;
        box-shadow: -1px -1px 10px deeppink, 3px 5px 15px hotpink, inset 1px 5px 10px hotpink, inset -1px -5px 10px hotpink;
        border: none;
        width: 260px;
        height: 70px;
        border-radius: 50px;
        background-color: rgb(156, 7, 70, 100%);
        margin-top: 60px;
        margin-left: 146px;
        font-size: 20px;
    }
    a{
        text-decoration: none;
    }
    .block2{
        width: 1903px;
        height: 1080px;
        background-color: #04040C;
    }
    h2{
        font-size: 50px;
        text-align: center;
        padding-top: 100px;
        color: #9C9AA3;
    }
    .block2 > img{
        margin-left: 730px;
        margin-top: 180px;
    }
    .pros {
        margin-top: -610px;
        margin-left: 442px;
    }
    p{
        margin-left: 170px;
        margin-top: -140px;
        color:#9C9AA3;
        font-size: 24px;
    }
    .pros2{
        margin-left: 272px;
        margin-top: 150px;
    }
    .pros3{
        margin-left: 442px;
        margin-top: 150px;
    }
    .pros4 > img{
        margin-left: 1380px;
        margin-top: -80px;
    }
    .pros4 > p{
        margin-left: 1250px;
    }
    .pros5{
        margin-top: -425px;
    }
    .pros5 > img{
        margin-left: 1380px;
        margin-top: -700px;
    }
    .pros5 > p{
        margin-left: 1250px;
    }
    .pros6 > img{
        margin-left: 1480px;
        margin-top: 80px;
    }
    .pros6 > p{
        margin-left: 1350px;
    }

    .block3{
        width: 1903px;
        height: 1080px;
        background-color: black;
    }
    .block3 > h2{
        font-size: 50px;
        padding-top: 277px;
    }
    .one1{
        width: 294px;
        height: 339px;
        margin-left: 250px;
        margin-top: 108px;
        border: 2px solid #FFD4DD;
        border-radius: 10px;
    }
    .ord{
        width: 100px;
        height: 100px;
        background-color: #FFD4DD;
        border-radius: 50px;
        margin-top: 40px;
        margin-left: 97px;

    }
    .ones{
        color: #B44E79;
        font-size: 50px;
        text-align: center;
        font-weight: bold;
        margin-top: -80px;
    }
    .one1 > h3{
        text-align: center;
        font-size: 22px;
        margin-top: 40px;
        color: #B44E79;
    }
    .add{
        color: #F9F9F9;
        opacity: 51%;
        font-family: "Sofia", sans-serif;
        font-size: 20px;
        margin-top: 22px;
        text-align: center;
    }
    .two2{
        width: 294px;
        height: 339px;
        margin-left: 625px;
        margin-top: -342px;
        border: 2px solid #FFD4DD;
        border-radius: 10px;
    }
    .ord2{
        width: 100px;
        height: 100px;
        background-color: #FFD4DD;
        border-radius: 50px;
        margin-top: 40px;
        margin-left: 97px;

    }
    .twos{
        color: #B44E79;
        font-size: 50px;
        text-align: center;
        font-weight: bold;
        margin-top: -80px;
    }
    .two2 > h3{
        text-align: center;
        font-size: 22px;
        margin-top: 40px;
        color: #B44E79;
    }
    .add2{
        color: #F9F9F9;
        opacity: 51%;
        font-family: "Sofia", sans-serif;
        font-size: 20px;
        margin-top: 22px;
        text-align: center;
    }
    .three3{
        width: 294px;
        height: 339px;
        margin-left: 1000px;
        margin-top: -342px;
        border: 2px solid #FFD4DD;
        border-radius: 10px;
    }
    .ord3{
        width: 100px;
        height: 100px;
        background-color: #FFD4DD;
        border-radius: 50px;
        margin-top: 40px;
        margin-left: 97px;

    }
    .threes{
        color: #B44E79;
        font-size: 50px;
        text-align: center;
        font-weight: bold;
        margin-top: -80px;
    }
    .three3 > h3{
        text-align: center;
        font-size: 22px;
        margin-top: 40px;
        color: #B44E79;
    }
    .add3{
        color: #F9F9F9;
        opacity: 51%;
        font-family: "Sofia", sans-serif;
        font-size: 20px;
        margin-top: 22px;
        text-align: center;
    }
    .four4{
        width: 294px;
        height: 339px;
        margin-left: 1376px;
        margin-top: -342px;
        border: 2px solid #FFD4DD;
        border-radius: 10px;
    }
    .ord4{
        width: 100px;
        height: 100px;
        background-color: #FFD4DD;
        border-radius: 50px;
        margin-top: 40px;
        margin-left: 97px;

    }
    .fours{
        color: #B44E79;
        font-size: 50px;
        text-align: center;
        font-weight: bold;
        margin-top: -80px;
    }
    .four4 > h3{
        text-align: center;
        font-size: 22px;
        margin-top: 40px;
        color: #B44E79;
    }
    .add4{
        color: #F9F9F9;
        opacity: 51%;
        font-family: "Sofia", sans-serif;
        font-size: 20px;
        margin-top: 22px;
        text-align: center;
    }
    .block4{
        width: 1903px;
        height: 1080px;
        background-color: #04040C;
    }
    .block4 > h3{
        font-size: 40px;
        margin-left: 348px;
        padding-top: 144px;
        color: #9C9AA3;
    }
    .clients{
        margin-top: 23px;
        margin-left: 348px;
        color: #9C9AA3;
    }
    .line1{
        height: 375px;
        width: 1px;
        background-color: #bbbbbb;
        margin-left: 344px;
        margin-top: 124px;
    }
    .alex{
        margin-left: 375px;
        margin-top: -370px;
    }
    .desc_alex{
        margin-left: 375px;
        margin-top: 65px;
    }
    .name_alex{
        margin-left: 375px;
        margin-top: 65px;
    }
    .line2{
        height: 375px;
        width: 1px;
        background-color: #bbbbbb;
        margin-left: 652px;
        margin-top: -360px;
    }
    .lisa{
        margin-left: 683px;
        margin-top: -370px;
    }
    .desc_lisa{
        margin-left: 683px;
        margin-top: 65px;
    }
    .name_lisa{
        margin-left: 683px;
        margin-top: 65px;
    }
    .line3{
        height: 375px;
        width: 1px;
        background-color: #bbbbbb;
        margin-left: 960px;
        margin-top: -360px;
    }
    .nikolai{
        margin-left: 991px;
        margin-top: -370px;
    }
    .desc_nikolai{
        margin-left: 991px;
        margin-top: 65px;
    }
    .name_nikolai{
        margin-left: 991px;
        margin-top: 65px;
    }
    .line4{
        height: 375px;
        width: 1px;
        background-color: #bbbbbb;
        margin-left: 1268px;
        margin-top: -360px;
    }
    .veronika{
        margin-left: 1299px;
        margin-top: -370px;
    }
    .desc_veronika{
        margin-left: 1299px;
        margin-top: 65px;
    }
    .name_veronika{
        margin-left: 1299px;
        margin-top: 65px;
    }
    .line5{
        height: 375px;
        width: 1px;
        background-color: #bbbbbb;
        margin-left: 1576px;
        margin-top: -360px;
    }
    .add_rev{
        width: 184px;
        height: 60px;
        margin-left: 869px;
        margin-top: 134px;
        border-radius: 50px;
        background-color: rgb(61, 53, 56, 100%);
        text-align: center;
        font-size: 18px;
        cursor: pointer;
    }
    .modal {
        display: none;
        position: fixed;
        top: 150px;
        left: 650px;
        width: 600px;
        height: 700px;
        background-color: rgba(0, 0, 0, 0.7);
    }

    .modal-content {
        background-color: #04040C;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
    }
    form {
        display: flex;
        flex-direction: column;
        max-width: 300px;
        margin: 0 auto;
    }

    label {
        font-weight: bold;
        margin-top: 10px;
    }

    input, textarea {
        padding: 5px;
        margin-top: 5px;
        border: 1px solid #ccc;
        resize: none;
    }

    .rev {
        margin-top: 10px;
        padding: 5px 10px;
        background-color: #007bff;
        border: none;
        color: #fff;
        cursor: pointer;
        margin-left: 170px;
    }
    .h-text{
        text-align: center;
        margin-bottom: 160px;
    }
    #reviewName{
        color: black;
        margin-top: -150px;
        width: 100%;
        height: 100%;
    }
    #reviewRating,#reviewDescription
    {
        color: black;
        width: 100%;
        height: 100%;
    }
    footer{
        background-color: black;
        width: 1903px;    height: 246px;
    }
    footer > img{
        margin-top: 108px;
        margin-left: 250px;
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
    .sh{
        margin-left: 270px;
        margin-top: 20px;
    }


</style>
<script>
    function showModal() {
        document.getElementById('addReviewModal').style.display = 'block';
    }

    function hideModal() {
        document.getElementById('addReviewModal').style.display = 'none';
    }

    function addReview() {
        const description = document.getElementById('reviewDescription').value;
        const rating = document.getElementById('reviewRating').value;
        const name = document.getElementById('reviewName').value;

        if (!description.trim() || !rating.trim() || !name.trim()) {
            alert('Заполните все поля отзыва');
            return;
        }

        const newReview = {
            name,
            image: name.toLowerCase(),
            description,
        };

        // Вместо добавления в массив reviews, вы можете отправить данные на сервер и обновить отзывы оттуда

        document.getElementById('reviewDescription').value = '';
        document.getElementById('reviewRating').value = '';
        document.getElementById('reviewName').value = '';

        hideModal();
    }
    function showLoginModal() {
        document.getElementById('loginModal').style.display = 'block';
    }

    function hideLoginModal() {
        document.getElementById('loginModal').style.display = 'none';
    }

    // код для добавления отзыва

    function hideReviewModal() {
        document.getElementById('addReviewModal').style.display = 'none';
    }
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
