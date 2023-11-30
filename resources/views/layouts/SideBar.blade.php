<div class="left">
    <ul>
        <li><a href="/profile/{{ auth()->id() }}">Profile</a></li>
        <li><a href="{{ route('terms') }}">Terms and Condition</a></li>
        <li><a href="{{ route('aboutus') }}">About Us</a></li>
        @auth
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>logout</button>
                </form>
            </li>
        @endauth
    </ul>
</div>
