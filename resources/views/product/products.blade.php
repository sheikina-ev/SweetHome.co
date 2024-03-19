<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Каталог товаров
    </x-slot:title>
        <div class="container">
            <h2 class="my-4">Каталог товаров</h2>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ $product->photo }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">Цена: {{ $product->price }}</p>
                                <p class="card-text">Количество: {{ $product->quantity }}</p>
                            </div>
                            <div class="card-footer">
                                <form action="{{ route('carts.add', $product->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-block">Добавить в корзину</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
</x-layout>
<style>


</style>
