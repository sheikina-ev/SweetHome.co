<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Информация о товаре
    </x-slot:title>
    <main>
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card mb-4">
                    <img src="{{ $product->photo }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Цена: {{ $product->price }}</p>
                        <p class="card-text">Количество: {{ $product->quantity }}</p>
                        <a href="/admin/products/{{ $product->id }}/update" class="btn btn-primary">Редактировать товар</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <style>
        main {
            background: rgb(99, 39, 120);
        }
        .row {
            margin-top: 200px;
            width: 100% ;
        }
    </style>
</x-layout>

