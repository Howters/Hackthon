<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Admin Panel</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ 'Admin Panel/dashboard.css' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? 
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

    <section id="payment-confirmation">
        <h2>Payment Confirmation</h2>
        <div class="search">
            <form class="search-bar" method="GET" type="get" action="{{ route('searchAdmin') }}">
                @csrf
                <input id="search" type="text" placeholder="Enter team name" name="query">
                <button type="submit" style="border: none; background: none"><i class="fas fa-search"></i></button>
            </form>
            @php
                $date = '2023-01-31';
            @endphp
            <div class="verify">
                @foreach ($groups as $group)
                @endforeach
                <div class="input">
                    <label for="name" style="display: block;">Nama Team</label>
                    <input type="text" placeholder="{{ $group->name }}" id="fullName" readonly disabled="disabled">
                </div>
                @if ($group->created_at->lt($date))
                    <div class="input">
                        <label for="name" style="display: block;">Harga Pendaftaran</label>
                        <input type="text" placeholder="Rp.150.000" id="fullName" readonly disabled="disabled">
                    </div>
                @endif
                @if ($group->created_at->gt($date))
                    @if ($group->binusian == 1)
                        <div class="input">
                            <label for="name" style="display: block;">Harga Pendaftaran</label>
                            <input type="text" placeholder="Rp.200.000" id="fullName" readonly disabled="disabled">
                        </div>
                    @endif
                    @if ($group->binusian == 0)
                        <div class="input">
                            <label for="name" style="display: block;">Harga Pendaftaran</label>
                            <input type="text" placeholder="Rp.250.000" id="fullName" readonly disabled="disabled">
                        </div>
                    @endif
                @endif
                @if ($group->bukti == 0)
                    <div class="input" style="margin-right: 1.5rem;">
                        <label for="name" style="display: block;">Status</label>
                        <input type="text" placeholder="Unverified" id="fullName" readonly disabled="disabled">
                    </div>
                @endif
                @if ($group->bukti == 1)
                    <div class="input" style="margin-right: 1.5rem;">
                        <label for="name" style="display: block;">Status</label>
                        <input type="text" placeholder="Verified" id="fullName" readonly disabled="disabled">
                    </div>
                @endif


                <div class="btn" style="display: flex; gap :
                    0.5rem;">
                    <form action="/team-verify/{{ $group->id }}" method="POST">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="bukti" value="1">
                        <button type="submit" id="btn">Verify</button>
                    </form>
                    <button id="btn1"><a
                            href="{{ asset('/storage/Product/' . $group->leader->bukti) }}"></a>View</button>
                </div>
            </div>
        </div>
    </section>
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
            <a href="">
                <p>Privacy Policy and Terms of Service</p>
            </a>
        </div>

    </footer>

    <script>
        const btn = document.getElementById('btn');

        // 


        btn.addEventListener('click', function handleClick() {
            btn.textContent = 'Verified';
            btn.style.backgroundColor = 'rgba(0, 0, 0, 0.25)';
        });
    </script>
</body>

</html>
