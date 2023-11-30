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
    <div class="createPost">
        <div class="createPostContainer">
            <form action="{{ route('post.store') }}" method="POST">
                @csrf
                <div class="createPostTitle">
                    <label for="">Title</label>
                    <input type="text" placeholder="Enter the title" name="title">
                </div>
                <div class="createPostDesc">
                    <label for="">Content</label>
                    <textarea name="description" placeholder="Enter the content"></textarea>
                </div>
                <div class="createPostButton">
                    <button>post</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
