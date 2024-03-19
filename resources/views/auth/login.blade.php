<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Вход
    </x-slot:title>

    <style>
        body {
            background-color: indigo;
            font-family: 'Nunito', sans-serif;
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .form-container {
            background: #ecf0f3;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
        }

        .form-container .form-icon {
            color: #ac40ab;
            font-size: 55px;
            text-align: center;
            line-height: 100px;
            width: 100px;
            height:100px;
            margin: 0 auto 15px;
            border-radius: 50px;
            box-shadow: 7px 7px 10px #cbced1, -7px -7px 10px #fff;
        }

        .form-container .title {
            color: #ac40ab;
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            margin: 0 0 20px;
        }

        .form-container .form-horizontal .form-group {
            margin: 0 0 25px 0;
        }

        .form-container .form-horizontal .form-group label {
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .form-container .form-horizontal .form-control {
            color: #333;
            font-size: 15px;
            height: 50px;
            padding: 20px;
            letter-spacing: 1px;
            border: none;
            border-radius: 50px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
            display: inline-block;
            transition: all 0.3s ease 0s;
            width: 100%;
        }

        .form-container .form-horizontal .form-control:focus {
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
            outline: none;
        }

        .form-container .form-horizontal .form-control::placeholder {
            color: #808080;
            font-size: 14px;
        }

        .form-container .form-horizontal .btn {
            color: #000;
            background-color: #ac40ab;
            font-size: 15px;
            font-weight: bold;
            text-transform: uppercase;
            width: 100%;
            padding: 12px 15px 11px;
            border-radius: 20px;
            box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px #fff;
            border: none;
            transition: all 0.5s ease 0s;
        }

        .form-container .form-horizontal .btn:hover,
        .form-container .form-horizontal .btn:focus {
            color: #fff;
            letter-spacing: 3px;
            box-shadow: none;
            outline: none;
        }
        .form-group > label{
            margin-left: 10px;
        }
        .user-icon {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }


    </style>
<main>


    <div class="container center-content">
        <div class="form-container">
            <div class="form-icon">
                <img src="{{ asset('/public/images/user.png') }}" alt="user-icon" class="user-icon">
            </div>
            <h3 class="title">Вход</h3>

            <form class="form-horizontal" method="POST" action="">
                @csrf
                <div class="form-group">
                    <label>Login</label>
                    <input class="form-control" type="text" name="login" placeholder="Логин" required autofocus>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Пароль" required autocomplete="current-password">
                </div>
                <button type="submit" class="btn btn-default">Войти</button>
            </form>
            <div class="text-center">
                <p>Еще не зарегистрированы?</p>
                <a href="{{ route('register') }}" class="btn btn-link">Registration</a>
            </div>
        </div>
    </div>
</main>
</x-layout>
