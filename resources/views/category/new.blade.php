<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Добавление категории
    </x-slot:title>
    <form class="m-4" action="" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Название категории</label>
            <input class="form-control" id="name" name="name" value="{{ old('name') }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="code">Код категории</label>
            <input class="form-control" id="code" name="code" value="{{ old('code') }}">
            @error('code')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Добавить данные</button>
        </div>
    </form>


</x-layout>

