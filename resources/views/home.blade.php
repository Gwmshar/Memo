<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/style.css') }}">
</head>

<body>
    @include('layouts.NavBar')
    <div class="home">
        @include('layouts.SideBar')
        <div class="middle">
            @auth
                @include('layouts.CreatePost')
            @endauth
            @foreach ($posts as $post)
                @include('layouts.PostCard')
            @endforeach
        </div>
        <div class="right">
            <div class="search">
                <div class="searchContainer">
                    <form action="">
                        <input type="text" placeholder="Search a friend" />
                        <button>Search</button>
                    </form>
                </div>
            </div>
            <div class="rightText">Following</div>
            <div class="follow">
                <div class="followContainer">
                    <p>Name</p>
                    <button>unfollow</button>
                </div>
                <div class="followContainer">
                    <p>Name</p>
                    <button>unfollow</button>
                </div>
                <div class="followContainer">
                    <p>Name</p>
                    <button>unfollow</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
