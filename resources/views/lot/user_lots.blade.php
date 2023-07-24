@extends('layouts.main')
@section('content')


<!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> -->
@if (Route::has('login'))
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
    <div style="display: inline-block;">
        <form method="post" action="/logout">
            @csrf
            <button class="btn btn-primary">Выход</button>
        </form>
    </div>
    <a href="{{ url('/add') }}" class="btn btn-primary">Добавить</a>
    <a href="{{ url('/users') }}" class="btn btn-primary">Сообщение</a>
    <a href="{{ url('/inbox') }}" class="btn btn-primary">Входящие</a>
    @else
    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

    @if (Route::has('register'))
    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
    @endif
    @endauth
</div>
<!-- </div> -->
@endif

<table class="table">
    <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Название</th>
            <th scope="col">Картинка</th>
            <th scope="col">Описание</th>
            <th scope="col">Текущая цена</th>
            <th scope="col">Время окончания</th>
            <th scope="col"></th>

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
                <a class="btn btn-primary" type="button" href="{{}}">Изменить</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection