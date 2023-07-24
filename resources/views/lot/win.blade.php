@extends('layouts.main')
@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Картинка</th>
            <th scope="col">Описание</th>
            <th scope="col">Текущая цена</th>
            <th scope="col">Время окончания</th>

        </tr>
    </thead>
    <tbody>
        @foreach($lots as $lot)
        <tr>
            <th scope="row">{{$lot->id}}</th>
            <td>{{$lot->title}}</td>
            <td>
                <div style="width: 200px;">
                    <img src="{{$lot->image_path}}" class="img-fluid img-thumbnail" alt="Тут картинка">
                </div>

            </td>
            <td>{{$lot->description}}</td>
            <td>{{$lot->min_price}}</td>
            <td>{{$lot->end_date}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection