<nav id="navbar">
    <div class="container">
        <a href= "{{route('homepage')}}">

            <img  src="Login Page/assets/logo.png" alt="">
        </a>
        <div class="nav-menu">
            <ul>
                <a href="{{route('dashboard')}}"><li>Dashboard</li></a>
                <a href="{{route('payment')}}"><li>Payment</li></a>
                    <a href="{{route('timeline')}}"><li>Timeline</li></a>
            </ul>
        </div>
        <a href="{{route('logout')}}"><p>Logout</p></a>
    </div>
</nav>