<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавление лота</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>

    <div class="container">
        <div class="">            
                <form method="post" action="/add" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3">
                        <label for="exampleFormControlInput1" class="form-label">Название</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Название">
                    </div>
                    <div class="m-3">
                        <label for="description" class="form-label">Описание</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="m-3">
                        <label for="formFile" class="form-label">Изображение</label>
                        <input class="form-control" type="file" id="image_path" name="image_path">
                    </div>
                    <div class="m-3">
                        <label for="min_price" class="form-label">Минимальная цена</label>
                        <input type="number" class="form-control" id="min_price" name="min_price" placeholder="1000">
                    </div>
                    <div class="m-3">
                        <label for="end_date" class="form-label">Дата окончания</label>
                        <input class="form-control" type="date" id="end_date" name="end_date">
                    </div>
                    <div class="m-3">
                        <button class="btn btn-primary">Создать</button>
                    </div>
                </form>            
        </div>
    </div>

</body>

</html>