<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<table class="table">
                <thead>
                    <tr>                        
                        <th scope="col">Имя</th>  
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>                       
                        <td> {{$user->name}}
                            <div style="display: inline-block;">  
                                <a href="{{ route('message', $user->id) }}" class="btn btn-primary">Написать</a>
                            </div>
                        </td>                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
</body>
</html>