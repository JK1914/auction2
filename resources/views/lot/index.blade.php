@extends('layouts.main')
@section('content')

<form action="{{route('search')}}">
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
</table>

@endsection