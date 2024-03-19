<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Добавление товара
    </x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf

        <div class="mb-3">
            <label class="form-label" for="name">Название товара</label>
            <input class="form-control" id="name" name="name" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="price">Цена товара</label>
            <input class="form-control"  type="number" min="0" step="0.01" id="price" name="price" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="description">Описание товара</label>
            <input class="form-control" id="description" name="description" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="quantity">Количество товара</label>
            <input class="form-control" type="number" min="0" step="1" id="quantity" name="quantity" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="mass">Масса товара</label>
            <input class="form-control" type="number" min="0" step="0.01" id="mass" name="mass" value="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="category_id">Категория</label>
            <select class="form-select" id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary">Добавить товар</button>
        </div>
    </form>

</x-layout>
