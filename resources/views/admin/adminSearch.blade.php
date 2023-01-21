<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Participant - Admin Panel</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ 'Admin Panel/participant.css' }}">
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
                        <li>Dashboard</li>
                    </a>
                    <a href="{{ route('adminParticipant') }}">
                        <li style="color: var(--gold);">Participant</li>
                    </a>
                </ul>
            </div>
            <a href="{{ route('logout') }}">
                <p>Logout</p>
            </a>
        </div>
    </nav>

    <section id="showParticipant">
        <h2>Participant</h2>
        <div class="view">
            <div class="sort" style="display: flex; gap: 17rem;">
                <p id="list">List Team yang Teregistrasi</p>
                <div id="right" style="display: flex; gap: 2.0rem; margin-left: 2.5rem;">
                    <p>Urutkan Berdasarkan:</p>
                    <select id="dropdown">
                        <option>Filter</option>
                        <option value="1">Verified</option>
                        <option value="2">Unverified</option>
                    </select>

                    <select id="dropdown1">
                        <option>Sort</option>
                        <option value="1">Alfabet</option>
                        <option value="2">Time Register</option>
                    </select>
                </div>

            </div>

            <div class="content">
                @foreach ($groups as $group)
                    <ul>
                        <li>{{ $group->name }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </section>

    <div id="viewData">
        <div class="container">
            <p id="title">Data Peserta Team</p>
            <form class="search-bar" method="GET" type="get" action="">
                @csrf
                <input id="search" type="text" placeholder="Enter team name" name="qiery">
                <button type="submit" style="border: none; background: none"><i class="fas fa-search"></i></button>
            </form>
            <div class="verify">
                @foreach ($groups as $group)
                    <div class="input">
                        <label for="name" style="display: block;">Nama Team</label>
                        <input type="text" placeholder="{{ $group->name }}" id="fullName" readonly
                            disabled="disabled">
                    </div>

                    <button id="btn1"><a href="{{ route('adminShow', $group->id) }}" style="color: white">View
                            Data</a></button>


                    <form action="" method="POST">
                        @csrf
                        @method('delete')
                        <button id="btn2">Delete Team</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        const btn = document.getElementById('btn1');

        // 


        btn.addEventListener('click', function handleClick() {
            btn.style.backgroundColor = 'rgba(255, 178, 108, 0.78), rgba(255, 134, 131, 0.53)';
        });
    </script>
</body>

</html>
