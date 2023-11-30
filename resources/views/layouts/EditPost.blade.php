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
        <form action="{{ route('post.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="createPostTitle">
                <label for="">Title</label>
                <input type="text" placeholder="Enter the title" name="title" value="{{ $post['title'] }}">
            </div>
            <div class="createPostDesc">
                <label for="">Description</label>
                <textarea name="description">{{ $post['description'] }}</textarea>
            </div>
            <div class="createPostButton">
                <button>post</button>
            </div>
        </form>
    </div>
</body>

</html>
