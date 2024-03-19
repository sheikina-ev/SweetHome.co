<x-layout xmlns:x-slot="http://www.w3.org/1999/xlink">
    <x-slot:title>
        Регистрация
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
            margin-top: 100px;
            background: #ecf0f3;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 14px 14px 20px #cbced1, -14px -14px 20px white;
        }

        .form-container .title {
            color: #ac40ab;
            font-size: 25px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container .form-group {
            margin-bottom: 25px;
        }

        .form-container .form-label {
            font-size: 15px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .form-container .form-control {
            color: #333;
            font-size: 15px;
            height: 50px;
            padding: 20px;
            letter-spacing: 1px;
            border: none;
            border-radius: 50px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
            display: inline-block;
            width: 100%;
            transition: all 0.3s ease 0s;
        }

        .form-container .form-control:focus {
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px #fff;
            outline: none;
        }

        .form-container .btn-primary {
            color: #fff;
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

        .form-container .btn-primary:hover,
        .form-container .btn-primary:focus {
            color: #fff;
            letter-spacing: 3px;
            box-shadow: none;
            outline: none;
        }
        .btn-primary{
            margin-top: 20px;
        }
    </style>

    <div class="container center-content">
        <div class="form-container">
            <h3 class="title">Регистрация</h3>
            <form method="POST" action="" class="m-4">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="name">Name</label>
                    <input class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="surname">Surname</label>
                    <input class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="email">Email</label>
                    <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="login">Login</label>
                    <input class="form-control" id="login" name="login" value="{{ old('login') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tel">Number</label>
                    <input class="form-control" id="tel" name="tel" value="{{ old('tel') }}">
                </div>

                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
            <div class="text-center">
                <p>Уже зарегистрированы?</p>
                <a href="{{ route('login') }}" class="btn btn-link">Login</a>
            </div>
        </div>
    </div>
</x-layout>
