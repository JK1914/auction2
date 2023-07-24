<!-- @extends('layouts.main')
@section('content') -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Лоты</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Картинка</th>
      <th scope="col">Описание</th>
      <th scope="col">Мин. цена</th>
    </tr>
  </thead>
  <tbody>
    @foreach($lots as $lot)
    <tr>
      <th scope="row">1</th>
      <td>{{$lot->title}}</td>
      <td>
        <div style="width: 200px;">
            <img src="{{$lot->image_path}}" class="img-fluid img-thumbnail" alt="Тут картинка">
        </div>
        
      </td>
      <td>{{$lot->description}}</td>
      <td>{{$lot->min_price}}</td>
    </tr>
    @endforeach    
  </tbody>
</table>

</body>
</html>
    
