<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Список категорий
    </x-slot:title>
    <h3 class="m-4">Список категорий: </h3>
    <a class="btn btn-dark m-4" href="/categories/new">Добавить категорию</a>
    <table class="table m-4">
        <tr>
            <th>Номер</th>
            <th>Название категории</th>
            <th>Операции</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td> {{ $loop->iteration }} </td>
                <td> {{$category->name}} </td>
                <td>
                    <a class="btn btn-success" href="/categories/{{$category->id}}">Просмотреть</a>
                    <a class="btn btn-primary" href="/categories/{{$category->id}}/update">Редактировать</a>
                    <a class="btn btn-danger" href="/categories/{{$category->id}}/delete">Удалить</a>
                </td>
            </tr>
        @endforeach

    </table>
</x-layout>
