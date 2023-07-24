<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{route('main')}}">Главная</a>
                            </li>
                            @if (Route::has('login'))
                            @auth
                            <li class="nav-item">
                                <a class="nav-link" href="">Текущие</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('winlots')}}">Выигранные</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('mylots')}}">Мои лоты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/admin')}}">Админ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('logout')}}">Выход</a>
                            </li>

                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login')}}">Вход</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register')}}">Регистрация</a>
                            </li>
                            @endif
                            @endauth
                            @endif
                        </ul>
                    </div>
                </div>
                <div>Привет,&nbsp&nbsp{{$name}}</div>
            </nav>
        </div>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        </div>

        @yield('content')   

        <!-- <form action="{{route('search')}}">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Введите название" id="s" name="s">
                <button class="btn btn-primary" type="submit">Поиск</button>
            </div>

        </form>

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

        </div>



        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название</th>
                    <th scope="col">Картинка</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Продавец</th>
                    <th scope="col">Текущая цена</th>
                    <th scope="col">Время окончания</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lots as $lot)
                <tr>
                    <th scope="row"></th>
                    <td>{{$lot->title}}</td>
                    <td>
                        <div style="width: 200px;">
                            <img src="{{$lot->image_path}}" class="img-fluid img-thumbnail" alt="Тут картинка">
                        </div>

                    </td>
                    <td>{{$lot->description}}</td>
                    <td>{{$lot->name}}</td>
                    <td>
                        <div>
                            @auth
                            <form method="post" action="lots">
                                @csrf
                                <input hidden name="id" value="{{$lot->id}}">
                                <input type="number" name="min_price" placeholder="{{$lot->min_price}}">
                                <button class="btn btn-primary">Нажать</button>
                            </form>
                            @else
                            <div>{{$lot->min_price}}</div>
                            @endauth

                        </div>
                    </td>
                    <td>{{$lot->end_date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table> -->
    </div>
</body>

</html>