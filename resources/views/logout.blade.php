<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout - Hackthon</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('login page/logout.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" 
    crossorigin><link href="https://fonts.googleapis.com/css2? 
    family=Jost&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/23a94a611d.js" crossorigin="anonymous"></script>
    <script src="/path/to/cdn/jquery.min.js"></script>
    <script src="/path/to/multi-countdown.js"></script>
    <link rel="stylesheet" href="css/flipdown/flipdown.css" />
    <script src="js/flipdown/flipdown.js"></script>
</head>
<body>
    
    @if ($group->isAdmin==1)
    <nav id="navbar">
        <div class="container">
            <img src="assets/logo.png" alt="">
            <div class="nav-menu">
                <ul>
                    <a href="{{ route('adminDashboard') }}">
                        <li style="color: var(--gold);">Dashboard</li>
                    </a>
                    <a href="{{ route('adminParticipant') }}">
                        <li>Participant</li>
                    </a>
                </ul>
            </div>
            <a href="{{ route('logout') }}">
                <p>Logout</p>
            </a>
        </div>
    </nav>
   
    @else($group->isAdmin==0)  @include('navbar') @endif
   
    <div id="container" style="display: flex; justify-content: left; padding-left: 100px;">
        <img src="Login Page/assets/logout.png" alt="">
        <div class="title" style=" padding-left: 5px;">
            <p style="padding-top: 110px; text-align: center;">You’re <span>Leaving..</span> <br> Are you sure? 
</p>  

            <form method ="post" action="{{route('log-out')}}">
                @csrf
                <div class="button1">
                    <button>Yes, log me out</button>
                </div>
    
                <div class="button2">
                    <button>Cancel</button>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="socmed">
            <div class="socmed-icon">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa fa-envelope"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
            <p>Social Media</p>
        </div>

        <div class="copyright">
            <p>
                Powered and Organized by Bina Nusantara Computer Club
            </p>
            <a href=""><p>Privacy Policy and Terms of Service</p></a>
        </div>
        
    </footer>

</body>
</html>
