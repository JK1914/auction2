<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщение</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>


    <div class="container">
        <div class="">            
                <form method="post" action="/message" enctype="multipart/form-data">
                    @csrf
                    <div class="m-3">
                        <label for="title" class="form-label">Заголовок</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="m-3">
                        <label for="message" class="form-label">Текст</label>
                        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
                        <input hidden class="form-control" type="number" value="{{$id}}" id="to_user" name="to_user">
                    </div>                    
                    <div class="m-3">
                        <button class="btn btn-primary">Отправить</button>
                    </div>                    
                </form>            
        </div>

    </div>

</body>

</html>