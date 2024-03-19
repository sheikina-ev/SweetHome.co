<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Редактирование сотрудника
    </x-slot:title>
<!-- Форма для редактирования сотрудника -->
</x-layout>
    <h1>Редактировать пользователя</h1>
    <form action="/users/update" method="POST">
        @csrf
        @method('PATCH')
        <!-- Здесь должны быть поля для редактирования данных пользователя -->
        <div class="form-group">
            <label for="surname">Фамилия</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{ $user->surname }}">
        </div>
       
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>

