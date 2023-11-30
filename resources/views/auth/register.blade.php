<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/style.css') }}">
</head>

<body>
    @include('layouts.NavBar')
    <div class="auth">
        <div class="lot">
            <form action="{{ route('register.create') }}" method="POST">
                @csrf
                <h2>Register</h2>
                <input type="text" id="text" placeholder="Username" name="name">
                <input type="email" id="text"placeholder="Email" name="email">
                <input type="password" id="text"placeholder="Password" name="password">
                <input type="password" id="text"placeholder="Confirm Password" name="password_confirmation">
                <button>Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>
