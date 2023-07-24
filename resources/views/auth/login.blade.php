<div style="width: 100%;
    height: 100%;
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;">

    <form method="post" action="/login" style="position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);">

        @csrf
        <input type="text" name="email" value="{{old('email')}}" style="font-family: 'Roboto', sans-serif; outline: 0; background: #f2f2f2; width: 100%; border: 0; margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;" placeholder="E-mail">
        <br>
        @error('email'){{$message}}<br>@enderror
        <input type="password" name="password" style="font-family: 'Roboto', sans-serif; outline: 0; background: #f2f2f2; width: 100%; border: 0; margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;" placeholder="Пароль">
        <br>
        @error('password'){{$message}}<br>@enderror
        <input type="checkbox" name="remember" style="font-family: 'Roboto', sans-serif; outline: 0; background: #f2f2f2; width: 100%; border: 0; margin: 0 0 15px; padding: 15px; box-sizing: border-box; font-size: 14px;">
        <br>
        <button style="font-family: 'Roboto', sans-serif; text-transform: uppercase; outline: 0; background: #4CAF50; width: 100%; border: 0; padding: 15px; color: #FFFFFF;">Войти</button>
    </form>
</div>
