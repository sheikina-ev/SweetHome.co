<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Редактирование категории
    </x-slot:title>

    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название категории</label>
            <input class="form-control" id="name" name="name" value="{{ $category->name }}">
        </div>
        <div class="mb-3">
            <button class="btn btn-primary">Обновить данные</button>
        </div>
    </form>

</x-layout>
