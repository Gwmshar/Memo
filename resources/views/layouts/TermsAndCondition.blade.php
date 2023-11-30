<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/style.css') }}">
</head>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        text-align: center;
        background: #f5f7f5;
    }

    .header {
        background-color: #4d30d1;
        color: hsl(240, 86%, 97%);
        text-align: center;
        padding: 1em 0;
    }

    .sub-container {
        max-width: 500px;
        margin: auto;
        padding: 48px 0;
        display: grid;
        flex-wrap: wrap;
        justify-content: center;
    }
</style>

<body>
    @include('layouts.NavBar')
    <div class="container">
        <div class="header">
            <h1>Terms & Condition</h1>
        </div>
        <div class="sub-container">
            <p>1. If you forget your password then your account can't be recover</p>
            <br>
            <p>2. You can't change the username or email once it is created</p>
            <br>
            <p>3. If you share a violent post then your account will be ban </p>
        </div>
    </div>
</body>

</html>
