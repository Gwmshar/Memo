<div class="postCard">
    <div class="postCardContainer">
        <div class="postCardHeader">
            <div class="postCardHeaderContainer">
                <img src="https://images.unsplash.com/photo-1695653422557-3b85c1d6d061?w=400&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxNnx8fGVufDB8fHx8fA%3D%3D"
                    alt="" />
                <h3><a href="{{ route('profile', $post->user->id) }}">{{ $post->user->name }}</a></h3>
            </div>
            @if (auth()->id() == $post->user_id)
                <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button><a href="{{ route('post.edit', $post->id) }}">Edit</a></button>
                    <button>DELETE</button>
                </form>
            @endif

        </div>
        <div class="postCardBody">
            <div class="postCardBodyContainer">
                <div class="postCardBodyText">
                    <h2>
                        {{ $post['title'] }}
                    </h2>
                </div>
                <div class="postCardBodyContent">
                    <p>{{ $post['description'] }}</p>
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
