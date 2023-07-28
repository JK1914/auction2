<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Входящие</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<table class="table">
                <thead>
                    <tr>                        
                        <th scope="col">Заголовок</th>  
                        <th scope="col">Текст</th>  
                        <th scope="col">Время</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $message)
                    <tr>                       
                        <td> {{$message->title}}</td>                        
                        <td> {{$message->message}}</td>                        
                        <td> {{$message->date_time}}</td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
</body>
</html>