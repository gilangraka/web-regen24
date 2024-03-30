<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/loginAction') }}" method="POST">
        @csrf
        Login ID : <input type="text" name="login_id" id="login_id" value="{{ old('login_id') }}"> <br>
        Password : <input type="password" name="password" id="password" value="{{ old('password') }}"><br>
        <button type="submit">LOGIN</button>
    </form>

    @if ($message = Session::get('error'))
        <p>Login Error : {{ $message }}</p>
    @endif
</body>
</html>