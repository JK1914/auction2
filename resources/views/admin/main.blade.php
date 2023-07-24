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

            <a href="{{ url('/usersList') }}" class="btn btn-primary">Пользователи</a>

        </div>


        <!-- @yield('content')    -->


        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Название</th>
                    <th scope="col">Картинка</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Текущая цена</th>
                    <th scope="col">Время окончания</th>
                    <th scope="col">Администрирование</th>

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
                    <td>{{$lot->min_price}}</td>
                    <td>{{$lot->end_date}}</td>
                    <td>
                        <div style="display: inline-block;">
                            <a href="{{ route('admin.edit', $lot->id) }}" class="btn btn-primary">Изменить</a>
                        </div>
                        <div style="display: inline-block;">
                            <form action="{{ route('admin.delete', $lot->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                                <!-- <input type="submit" value="Удалить" class="btn btn-danger"> -->
                            </form>
                            <!-- <a href="{{ route('admin.delete', $lot->id) }}" class="btn btn-danger">Удалить</a> -->
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>