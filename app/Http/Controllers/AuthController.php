<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Exceptions\AoiException;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('login', 'password');

        if (!Auth::attempt($credentials)) {
            throw new AoiException(401, 'Авторизация не удалась');
        }

        $user = Auth::user();
        $user->api_token = Hash::make(microtime(true) * 1000);
        $user->save();

        return redirect('/homes'); // Измените на ваш маршрут главной страницы
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Разлогиниваем пользователя
        return redirect('/homes'); // Перенаправляем на домашнюю страницу
    }
    public function register(Request $request)
    {
        // Создаем нового пользователя с предоставленными данными
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'login' => $request->login,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'tel' => $request->tel,
        ]);


        // Перенаправляем на страницу входа с сообщением об успешной регистрации
        return redirect('/login')->with('success', 'Вы успешно зарегистрированы. Войдите в систему.');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }
}
