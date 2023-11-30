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
    <div class="profile">
        <img src="https://images.unsplash.com/photo-1695653422557-3b85c1d6d061?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxNnx8fGVufDB8fHx8fA%3D%3D"
            alt="" />
        <h2>{{ $id->name }}</h2>
    </div>
    <div class="profileDesc">
        <h3>Posts</h3>
    </div>
    @foreach ($posts as $item)
        <div class="postCard">
            <div class="postCardContainer">
                <div class="postCardHeader">
                    <div class="postCardHeaderContainer">
                        <img src="https://images.unsplash.com/photo-1695653422557-3b85c1d6d061?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxNnx8fGVufDB8fHx8fA%3D%3D"
                            alt="" />
                        <h3><a href="{{ route('profile', $item->user->id) }}">{{ $item->user->name }}</a></h3>
                    </div>
                    @if (auth()->id() == $item->user_id)
                        <form action="{{ route('post.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button><a href="{{ route('post.edit', $item->id) }}">Edit</a></button>
                            <button>DELETE</button>
                        </form>
                    @endif

                </div>
                <div class="postCardBody">
                    <div class="postCardBodyContainer">
                        <div class="postCardBodyText">
                            <h2>
                                {{ $item['title'] }}
                            </h2>
                        </div>
                        <div class="postCardBodyContent">
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="postCardFooter">
                    <div class="postCardFooterContainer">
                        <div class="likes">Like</div>
                        <div class="comment">comment</div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</body>

</html>
