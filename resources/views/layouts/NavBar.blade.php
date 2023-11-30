<div class="nav">
    <div class="navLogo"><a href="{{ route('home') }}">MEMO</a></div>
    <div class="navLinks" id="navLinks">
        <ul>
            @auth
                <li><a href="/profile/{{ auth()->id() }}">{{ auth()->user()->name }}</a></li>
            @endauth
            @guest
                <li><a href="{{ route('login.show') }}">Login</a></li>
                <li><a href="{{ route('register.show') }}">Register</a></li>
            @endguest

        </ul>
    </div>
</div>
