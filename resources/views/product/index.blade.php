<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Каталог товаров
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        h3 {
            color: white;
            font-size: 26px;
            font-weight: 300;
            text-align: center;
            text-transform: uppercase;
            position: relative;
            margin: 30px 0 60px;
        }
        h3::after {
            content: "";
            width: 100px;
            position: absolute;
            margin: 0 auto;
            height: 4px;
            border-radius: 1px;
            background: #7ac400;
            left: 0;
            right: 0;
            bottom: -20px;
        }

        .container  {
            margin-top: 50px;
        }

        .row {
            margin-top: 50px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-md-3 {
            margin-bottom: 30px; /* Отступ между карточками */
        }

        .card {
            margin-top: 30px;
            background: #fff;
            border-radius: 6px;
            text-align: center;
            box-shadow: 0 2px 3px rgba(0,0,0,0.2);
            height: 100%; /* Заполнение всей доступной высоты */
            display: flex; /* Использование flexbox */
            flex-direction: column; /* Расположение элементов в колонку */
        }

        .card-buttons {
            margin-top: auto; /* Выравнивание кнопок по нижней границе карточки */
            margin-bottom: 20px; /* Отступ снизу */
        }

        .btn {
            font-size: 14px;
            text-transform: uppercase;
            font-weight: bold;
            border-radius: 20px;
            margin-top: 5px;
        }

        .btn-primary {
            color: #fff;
            background-color: #7ac400;
            border: none;
        }

        .btn-primary:hover {
            background-color: #78bf00;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }
        #addProductButton{
            margin-top: 20px;

        }
        .center-button {
            display: flex;
            justify-content: center;
            margin-top: 20px; /* Добавляем отступ сверху */
            margin-bottom: 20px; /* Добавляем отступ снизу */
        }


    </style>
    <body>
<div class="container">
    <h3 class="mt-4 mb-3">Список товаров</h3>
    <div class="row">
        @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $product->photo }}" class="card-img-top" alt="Product Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->mass }}</p>
                        <p class="card-text">цена товара: {{ $product->price }}</p>
                        @if($isAdmin)
                            <div class="card-buttons">
                                <a href="/products/{{ $product->id }}" class="btn btn-primary">Просмотреть</a>
                                <a href="/admin/products/{{ $product->id }}/update" class="btn btn-primary">Редактировать</a>
                                <a href="/admin/products/{{ $product->id }}/delete" class="btn btn-danger">Удалить</a>
                            </div>
                        @else
                            <div class="card-buttons">
                                <button onclick="addToCart({{ $product->id }})" class="btn btn-primary">Добавить в корзину</button>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        @endforeach

    </div>
    <div class="center-button">
        @if($isAdmin) <!-- Проверка на админа -->
            <a id="addProductButton" class="btn btn-dark mb-3" href="/products/new">Добавить товар</a>
        @endif
</div>
</div>
    </body>

</x-layout>
