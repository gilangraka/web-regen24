<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
    <form method="post" action="/login">
        @csrf
        Login ID : <input type="text" id="login_id" name="login_id" value="{{ old('login_id') }}" required> <br>
        Password : <input type="password" id="password" name="password" value="{{ old('password') }}" required> <br>
        <button type="submit">Login</button>
    </form>
    @if ($message = Session::get('error'))
        <p>Login error : {{ $message }}</p>
    @endif
</body>
</html>