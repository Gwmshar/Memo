<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/us.css') }}">
</head>

<body>
    @include('layouts.NavBar')
    <div class="container">
        <div class="header">
            <h1>About Us</h1>
        </div>
        <div>
            <h2>Developer Team</h2>
        </div>
        <div class="sub-container">
            <div class="teams">
                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Dhrubajyoti" height="100px" alt="Developer">
                <div class="name">Dhrubajyoti Basumatary</div>
                <div class="Rollno">202102021020</div>
            </div>

            <div class="teams">
                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Gwmshar" height="100px" alt="Developer">
                <div class="name">Gwmshar Brahma</div>
                <div class="Rollno">202102021012</div>
            </div>

            <div class="teams">
                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Hepazab" height="100px" alt="Developer">
                <div class="name">Hepazab Muchahary</div>
                <div class="Rollno">202102021035</div>
            </div>

            <div class="teams">
                <img src="https://api.dicebear.com/6.x/fun-emoji/svg?seed=Chittaranjan" height="100px" alt="Developer">
                <div class="name">Chittaranjan Brahma</div>
                <div class="Rollno">202102021026</div>
            </div>
        </div>
    </div>
</body>

</html>
