<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        $users = User::all();
        return view('users/index', compact('users'));

    }

    public function create(UserCreateRequest $request){
        $user = new User($request->all());
        $user->save();
        return response()->json($user)->setStatusCode(200);
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request->all());
        return new UserResource($user);
    }
    public function profile()
    {
        // В этом методе вы можете получить данные пользователя и передать их в представление
        $user = auth()->user(); // Предположим, что данные пользователя доступны через метод auth()->user()

        // Возвращаем представление и передаем данные пользователя
        return view('profiles/profile', ['user' => $user]);
    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'Пользователь не найден'], 404);
        }

        $user->update($request->all());
        return redirect()->route('users.index'); // Перенаправляем пользователя на страницу со списком сотрудников после обновления данных
    }

    public function updateProfile(Request $request)
    {
        $user = User::find(auth()->id());
        $user->update($request->all());
        return view('profiles/profile', ['user' => $user]);

    }


}
