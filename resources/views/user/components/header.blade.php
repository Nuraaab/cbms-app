<div class="navbar">
    <img src="images\logo.jpg" width="30px" height="60px" class="logo">
    <ul class="nav-links">
        <li><a href="/">HOME</a></li>
        <li><a href="/project_owners">PROJECT OWNERS</a></li>
        {{-- @auth
            @if(Auth::user()->usertype === 'contractor')
            <li><a href="/contractors">CONTRACTORS</a></li>
            @elseif(Auth::user()->usertype === 'projectOwner')
            <li><a href="/contractors">PROJECT OWNERS</a></li>
            <li><a href="/contractors">BIDS</a></li>
            @elseif(Auth::user()->usertype === 'supplier')
            <li><a href="/suppliers">SUPPLIERS </a></li>
             @endif
        @endauth --}}
        
        <li><a href="/projects">PROJECTS</a></li>
        
        <li><a href="/about">ABOUT US </a></li>
        @if (Route::has('login'))
        @auth
        <li><a href="{{route('logout')}}">LOGOUT</a></li>
        @else
        <li><a href="{{route('login')}}">LOGIN</a></li>
        @if (Route::has('register'))
        <li><a href="{{route('signup')}}">SIGNUP</a></li>
        @endif
        @endauth
        @endif
    </ul>
</div>