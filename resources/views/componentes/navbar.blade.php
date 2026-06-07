<nav style = "display: flex, justify-content: space-between; align-items: center; padding: 1rem; background-color: #f8c9c9;">
    <div>
        <a href="{{ route('home') }}" style="margin-right: 1rem;">Home</a>
        <a href="{{ route('about') }}" style="margin-right: 1rem;">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </div>
    <div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}" style="margin-right: 1rem;">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        @endif
    </div>
</nav>