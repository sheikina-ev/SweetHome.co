<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Редактирование товара
    </x-slot:title>
    <!-- Список сотрудников -->
    <h1>Список пользователей</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Телефон</th>
            <th>Email</th>
            <th>Логин</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->tel }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->login }}</td>
                <td>
                    <a href="/update" class="btn btn-primary">Редактировать</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
