<div class="blog-masthead">
    <div class="container">
        <nav class="nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            <a class="nav-link" href="#">About</a>
            @if (Route::has('login'))
                @auth
                <a class="nav-link ml-auto" href="{{ url('/home') }}">Home</a>
            @else
                <a class="nav-link ml-auto" href="{{ route('login') }}">Login</a>
                <a class="nav-link ml-auto" href="{{ route('register') }}">Register</a>
                @endauth
            @endif
        </nav>
    </div>
</div>