<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackthon</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('Login page/payment.css') }}">
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
    @include('navbar')
    <section id="landing-page">
        <div class="container">
            <div class="desc">
                <h2>COMING SOON!</h2>
                <h2>OPEN REGISTRATION</h2>
            </div>
            <img src="login page/assets/payment.png" alt="">
        </div>
    </section>

    <section id="periode-regis">
        <div class="container">
            <h2>Periode Registrasi</h2>
            <div class="image">
                <div id="earlybird">
                    <img src="login page/assets/earlybird.png" alt="">
                    <div class="accordion">
                        <button>
                            <h4>EARLY BIRD</h4>
                        </button>
                    </div>
                    <div class="panel">
                        <div id="time" style="display: flex; justify-content: center; gap: 15px;">
                            <img src="login page/assets/time.png" alt=""
                                style="width: 40px; height: 40px; margin-top: 4.5rem;">
                            <p style="margin-top: 20px; font-size: 15px; font-family: 'Poppins', sans-serif;">29 - 31
                                Januari 2023</p>
                        </div>
                        <div id="price"
                            style="display: flex; justify-content: left; gap: 15px; margin: 5px 1.5rem;">
                            <img src="login page/assets/pricetag.png" alt=""
                                style="width: 40px; height: 40px; margin-top: 0.5rem;">
                            <p
                                style="position: relative; top: -2.8rem; font-size: 15px; font-family: 'Poppins', sans-serif;">
                                Rp. 150.000,00 </p>
                        </div>
                    </div>
                </div>
                <div id="general">
                    <img src="login page/assets/general.png" alt="">
                    <div class="accordion1">
                        <button>
                            <h4>GENERAL</h4>
                        </button>
                    </div>
                    <div class="panel1">
                        <div id="time" style="display: flex; justify-content: center; gap: 15px;">
                            <img src="login page/assets/time.png" alt=""
                                style="width: 40px; height: 40px; margin-top: 4.5rem;">
                            <p style="margin-top: 20px; font-size: 15px; font-family: 'Poppins', sans-serif;">10-25
                                Februari 2023</p>
                        </div>
                        <div id="price"; justify-content: left; gap: 15px; margin: 5px 1.5rem;>
                            <img src="login page/assets/pricetag.png" alt=""
                                style="width: 40px; height: 40px; position: relative; left: -15px; top: -40px;">
                            <img src="login page/assets/harga.png"
                                style="width: 130px;
                            height: 125px; margin-top: 0.5rem;"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="pembayaran">
        <div class="container">
            <h2>Pembayaran</h2>
            <div class="dropdown">
                <div class="toggle">
                    <button">
                        <p>Pembayaran Biaya Pendaftaran<i class="fa fa-caret-down" aria-hidden="true"
                                style="font-size: 20px;"></i></p>

                        </button>

                </div>

                <div class="parag">
                    <div id="bca">
                        <h3>Bank BCA</h3>
                        <div class="bca-content" style="display: flex;">
                            <div class="left">
                                <div class="norek" style="display: flex; justify-content: flex-start; gap: 1.0rem;">
                                    <p>Nomor Rekening : </p>
                                    <p id="myInput" style="color: var(--white);">6860 1487 55</p>
                                    <i class="fas fa-copy" onclick="myFunction()"></i>
                                </div>
                                <div class="atas-nama" style="display: flex; justify-content: flex-start; gap: 1.0rem;">
                                    <p>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                                    <p style="color: var(--white);">Caitlin Febrianti</p>
                                </div>
                            </div>
                            <div class="right">
                                <img src="login page/assets/qr.jpg" alt="">
                            </div>
                        </div>


                    </div>
                    <div id="bri">
                        <h3>Bank BRI</h3>
                        <div class="bri-content" style="display: flex;">
                            <div class="left">
                                <div class="norek" style="display: flex; justify-content: flex-start; gap: 1.0rem;">
                                    <p>Nomor Rekening : </p>
                                    <p id="myInput1" style="color: var(--white);">6860 1487 55</p>
                                    <i class="fas fa-copy" onclick="myFunction()"></i>
                                </div>
                                <div class="atas-nama"
                                    style="display: flex; justify-content: flex-start; gap: 1.0rem;">
                                    <p>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                                    <p style="color: var(--white);">Caitlin Febrianti</p>
                                </div>
                            </div>
                            <div class="right">
                                <img src="login page/assets/qr.jpg" alt="">
                            </div>
                        </div>





                    </div>
                    <div id="mandiri">
                        <h3>Bank Mandiri</h3>
                        <div class="mandiri-content" style="display: flex;">
                            <div class="left">
                                <div class="norek" style="display: flex; justify-content: flex-start; gap: 1.0rem;">
                                    <p>Nomor Rekening : </p>
                                    <p id="myInput" style="color: var(--white);">6860 1487 55</p>
                                    <i class="fas fa-copy" onclick="myFunction()"></i>
                                </div>
                                <div class="atas-nama"
                                    style="display: flex; justify-content: flex-start; gap: 1.0rem;">
                                    <p>Atas Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</p>
                                    <p style="color: var(--white);">Caitlin Febrianti</p>
                                </div>
                            </div>
                            <div class="right">
                                <img src="login page/assets/qr.jpg" alt="">
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            @if ($group->bukti == 0)
                <div class="dropdown">
                    <div class="toggle">
                        <button">
                            <p>Upload Bukti Pembayaran<i class="fa fa-caret-down" aria-hidden="true"
                                    style="font-size: 20px; padding-left: 915px;"></i></p>

                            </button>

                    </div>


                    <div class="parag1">

                        <p>Upload Bukti Pembayaran</p>

                        <form method="POST" action="{{ route('store-bukti') }} " enctype="multipart/form-data">
                            @csrf
                            <div class="upload-file" style="display: flex; gap: 9rem; margin-top: 1.5rem;">

                                <input type="file" name="bukti" placeholder="Upload in pdf, jpg, jpeg and png"
                                    required accept="application/pdf, image/jpg, image/jpeg. image/png">
                                <button type="submit" id="submitButton">
                                    Confirm and Submit
                                </button>

                            </div>

                        </form>

                    </div>






                </div>
            @else
                <div class="dropdown">
                    <div class="toggle">
                        <button">
                            <p>Bukti Pembayaran<i class="fa fa-caret-down" aria-hidden="true"
                                    style="font-size: 20px; padding-left: 975px;"></i></p>

                            </button>

                    </div>


                    <div class="parag1">

                        {{-- <p>Bukti Pembayaran</p> --}}

                        <p style="text-align: center;">Click to Preview</p>

                        <div class="viewBukti">

                            <!-- Yang href nya nnti di ganti aja -->

                            <a href="{{ asset('/storage/Product/' . $group->leader->bukti) }}" target="_blank">
                                <p>Bukti Pembayaran</p>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- </div> --}}
            @endif
            <div class="dropdown">
                <div class="toggle">
                    <button">
                        <p>Verifikasi Pembayaran<i class="fa fa-caret-down" aria-hidden="true"
                                style="font-size: 20px; padding-left: 945px;"></i></p>

                        </button>

                </div>

                <div class="parag2">
                    <h3>Pastikan Status Verifikasi Berhasil Sebelum 26 Februari 2023</h3>
                    <p>Status Verifikasi</p>
                    @if ($group->bukti == 1)
                        <div class="verif-status" style="display: flex; gap: 1.5rem; justify-content: space-around;">
                            <p>Belum Terverifikasi</p>
                            <p
                                style="background: linear-gradient(180deg, #FFB26C 0%, rgba(238, 199, 198, 0) 100%);
                            border: 0.869369px solid #2B2229;">
                                Sudah Terverifikasi</p>
                            <p>Gagal Terverifikasi</p>
                        </div>
                    @else
                        <div class="verif-status" style="display: flex; gap: 1.5rem; justify-content: space-around;">
                            <p
                                style="background: linear-gradient(180deg, #FFB26C 0%, rgba(238, 199, 198, 0) 100%);
                            border: 0.869369px solid #2B2229;">
                                Belum Terverifikasi</p>
                            <p>Sudah Terverifikasi</p>
                            <p>Gagal Terverifikasi</p>
                        </div>
                    @endif

                    <p id="desc1">Untuk memastikan kelancaran acara Hackthon, sangat disarankan untuk memastikan
                        status
                        pembayaran sudah terverifikasi (Sudah Terverfikasi)
                    </p>

                    <p id="desc2">
                        1. Belum Terverifikasi : Mohon tunggu update verifikasi dari Admin. <br>
                        2. Sudah Terverifikasi : Sudah aman dan tidak ada kendala. <br>
                        3. Gagal Terverifikasi : Silahkan melakukan koordinasi ulang melalui Contact Person yang ada.
                    </p>
                </div>
            </div>


        </div>
        </div>
        </div>

        </div>
    </section>

    <section id="timer">
        <div class="container">
            <div id="box">
                <div class="box">
                    <div class="clock">
                        <div class="hero">
                            <div class="countdown">
                                <div class="time">
                                    <span id="days">10</span>
                                    <span class="unit">days</span>
                                </div>
                                <div class="semicolon">:</div>
                                <div class="time">
                                    <span id="hours">00</span>
                                    <span class="unit">hours</span>
                                </div>
                                <div class="semicolon">:</div>
                                <div class="time">
                                    <span id="minutes">00</span>
                                    <span class="unit">minutes</span>
                                </div>
                                <div class="semicolon">:</div>
                                <div class="time">
                                    <span id="seconds">00</span>
                                    <span class="unit">seconds</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="header">
                    <div class="header-content" style="display: flex; align-items: center;">
                        <div class="timer">
                            <img src="login page/assets/timer.png" alt="">
                        </div>
                        <h3>EARLY BIRD OFFER ENDS IN</h3>
                    </div>
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
        function myFunction() {
            navigator.clipboard.writeText("6860 1487 55");

        }



        var acc = document.getElementsByClassName("toggle");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var parag = this.nextElementSibling;
                if (parag.style.display === "block") {
                    parag.style.display = "none";
                } else {
                    parag.style.display = "block";
                }
            });
        }

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }

        var acc = document.getElementsByClassName("accordion1");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel1 = this.nextElementSibling;
                if (panel1.style.display === "block") {
                    panel1.style.display = "none";
                } else {
                    panel1.style.display = "block";
                }
            });
        }

        function getCounter() {
            var countDownDate = new Date("31 Jan , 2023 23:59:00").getTime();

            var x = setInterval(function() {
                var now = new Date().getTime();

                var distance = countDownDate - now;

                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor(
                    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
                );
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                var textDays = document.getElementById("days");
                var textHours = document.getElementById("hours");
                var textMinutes = document.getElementById("minutes");
                var textSeconds = document.getElementById("seconds");

                textDays.innerHTML = days < 10 ? "0" + days : days;
                textHours.innerHTML = hours < 10 ? "0" + hours : hours;
                textMinutes.innerHTML = minutes < 10 ? "0" + minutes : minutes;
                textSeconds.innerHTML = seconds < 10 ? "0" + seconds : seconds;

                if (distance < 0) {
                    clearInterval(x);
                }
            }, 1000);
        }

        getCounter();
    </script>
</body>

</html>
