<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackthon</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./assets/favicon-logo.png">
    <script src="https://kit.fontawesome.com/8258775b27.js" crossorigin="anonymous"></script>
</head>
<body onload="myFunction()" style="margin:0;"> 
    <!-- Animasi Loading Page -->
    <div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <!-- --------------------NAVBAR---------------------------- -->
  <nav id="navbar">
    <div class="container">
        <div class="nav-logo">
            <a href="#"><img src="./assets/nav-logo.png" alt="Nav Logo"></a>
            <a class="img-2" href="#"><img  src="./assets/HACKTHON.png" alt="Nav Logo"></a>
        </div>
        <div class="nav-link">
                <a href="#">Home</a>
                <div class="dropdown1">
                    <a class="dropbtn1" href="#landing-page2">Competition</a>
                    <div class="dropdown-content1">
                    <a href="#champion-prize">Champion Prize</a>
                    <a href="#mentor-juri">Mentor & Jury</a>
                    </div>
                </div>
                <a href="#about">About & FAQ</a>
                <a href="#timeline">Timeline</a>
        </div>
        <div class="login-btn">
                <a href="{{route('login')}}">Login</a>
        </div>
    </div>
</nav>
<!-- ----------------------Landing Page------------------------- -->
<section id="landing-page">
    <div class="container">
        <div class="circle"></div>
        <div class="page-content">
            <div class="heading">
                @if(Session::has('message'))
                <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif
                <h1 class="judul-atas">Discover Your <span>Interest</span></h1>
                <h1 class="judul-bawah">and Turn It Into <span>Innovative Ideas</span></h1>
                <p>Hackthon merupakan acara teknologi tahunan terbesar yang diselenggarakan oleh Bina Nusantara Computer Club (BNCC)
                    sebagai wadah untuk memberdayakan pengetahuan teknologi dan menghasilkan karya inovatif. Hackthon telah hadir sejak tahun
                    2018 dan tahun ini, Hackthon akan hadir dengan tiga rangkaian acara, yaitu Virtual Conference, Developer Workshop,
                    dan Hackathon 5.0.</p>
            </div>
            <section id="landing-page2">
                <div class="background"></div>
                <div class="background2"></div>
                <div class="heading2">
                    <h1>Recap Video</h1>
                </div>
                <div class="video-content">
                </div>
                <div class="rectangle"></div>
            </section>
            
        </div>
    </div>
</section>
<!-- --------------------Champion prize---------------------------- -->
<section id="champion-prize">
    <div class="rectangle"></div>
    <div class="container">
        <div class="circle"></div>
        <h1 class="header1">Champion</h1>
        <h1 class="header2">Prizes</h1>
        <p class="header3">Ready to fight for your spot?</p>
        <div class="prize-content">
            <div class="prize-card">
                <div class="prize-image">
                    <img src="./assets/1.png" width="83.09px"
                    height="244px" alt="Icon 1">
                </div>
                <div class="prize-detail">
                    <h3>Juara 1</h3>
                    <h5>Rp. 3.000.000 </h5>
                    <p>Merchandise & Sertifikat</p>
                </div>
            </div>
            <div class="prize-card">
                <div class="prize-image">
                    <img src="./assets/2.png" width="83.09px"
                    height="254px" alt="Icon 1">
                </div>
                <div class="prize-detail">
                    <h3>Juara 2</h3>
                    <h5>Rp. 1.000.000 </h5>
                    <p>Merchandise & Sertifikat</p>
                </div>
            </div>
            <div class="prize-card">
                <div class="service-image">
                    <img src="./assets/3.png" width="83.09px"
                    height="254px" alt="Icon 1">
                </div>
                <div class="prize-detail">
                    <h3>Juara 3</h3>
                    <h5>Rp. 750.000</h5>
                    <p>Merchandise & Sertifikat</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ---------------------mentor & juri------------------------ -->
<section id="mentor-juri">
    <div class="container">
        <div class="background1">
            <img src="./assets/mentor/Group 5 11.53.22.png" width="85%" height="70%" alt="">
        </div> 
        <div class="background2">
            <img src="./assets/mentor/bg mentor.png" width="100%" height="150%" alt="">
        </div>
        <div class="heading">
            <h1>9 Mentors,</h1>
            <h1>3 Jurys.</h1>
            <p>All ready to guide your journey.</p>

                <button>List Mentors & Jurys</button>

            <div class="hide">
                    <p>Clay (Mentor)</p>
                    <p>Beatrice (Mentor)</p>
                    <p>Angelique (Mentor)</p>
                    <p>Joseph (Mentor)</p>
                    <p>Janice (Mentor)</p>
                    <p>Richard (Mentor)</p>
                    <p>Peter (Mentor)</p>
                    <p>Steve (Mentor)</p>
                    <p>Woody (Mentor)</p>
                    <p>Natasha (Jury)</p>
                    <p>Gamora (Jury)</p>
                    <p>Jane (Jury)</p>
            </div>
    </div>
</section>
<!-- ------------------------about-------------------------------- -->
<section id="about">
    <div class="background">
        <img src="./assets/background/bg about.png" width="100%" alt="">
    </div>
    <div class="background-color"></div>
    <div class="container">
        <h1>About</h1>
        <p>What's next for you?</p>
        <div class="about-content">
            <div class="about-card">
                <div class="about-image">
                    <img src="./assets/Icon-about.png" alt="Icon 1">
                </div>
                <div class="about-detail">
                    <!-- link ke registrasi -->
                    <a href = "{{route('register')}}">Register yourself here</a>
                </div>
            </div>
            <div class="about-card">
                <div class="about-image">
                    <img src="./assets/Icon-about2.png" alt="Icon 1">
                </div>
                <div class="about-detail">
                    <a href="./guidebook.pdf" download="">Download guidebook!</a>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!-- --------------------joining---------------------- -->
<section id="joining">
<div class="background"></div>
<div class="background-element">
    <img src="./assets/background/Elements.png" width="100%" alt="">
</div>
    <div class="container">
        <h1>Thinking of joining?</h1>
        <p>Here's why you should.</p>
        <div class="join-content">
            <div class="join-card">
                <div class="join-image">
                    <img src="./assets/join-icon.png" alt="Icon 1">
                </div>
                <div class="join-detail">
                    <h3>Learn new things</h3>
                    <p>By participating in Hackthon, you'll
                        get the chance to learn and develop
                        new technical skills with others!</p>
                </div>
            </div>
            <div class="join-card">
                <div class="join-image">
                    <img src="./assets/join-Icon (2).png" alt="Icon 1">
                </div>
                <div class="join-detail">
                    <h3>Networking</h3>
                    <p>You'll be surrounded by a room of 
                        like-minded people who all want to
                        learn and collaborate with you.</p>
                </div>
            </div>
            <div class="join-card">
                <div class="join-image">
                    <img src="./assets/join-Icon (3).png" alt="Icon 1">
                </div>
                <div class="join-detail">
                    <h3>Build your CV</h3>
                    <p>Future employers will see you as
                        someone who likes to be challenged
                        and constantly learn new things.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ---------------------FAQ----------------------------- -->
<section id="faq">
    <div class="background">
        <img src="./assets/background/bg faq.png" width="100%" alt="">
    </div>
    <div class="container">
        <h1>Frequently Asked</h1>
        <h1>Question</h1>
        <p class="desc">Wonder and seek the answers to your questions here!</p>
        <div class="faq-box">
            <button class="accordion">What kind of requirements do I need to fulfill before joining?</button>
            <div class="panel">
                <p>Before joining, it is important for you to provide you and your team students' credentials 
                    and contact information. You can check the whole descripton by clicking the register button.</p>
            </div>

        <button class="accordion">How much is the registration fee?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">What are the main topics that will be discussed in this event?</button>
            <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">I am not a Binusian, can I still join Hackthon?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        <button class="accordion">When and where Hackthon takes place?</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        
    </div>
</section>

<!-- -------------Timeline----------------------- -->
<section id="timeline">
    <div class="background"></div>
    <div class="container">
        <h1>Timeline</h1>
        <p>Mark the dates.</p>
        <img src="./assets/timeline-line.png" width="90%" alt="">
        <div class="timeline-content">
            <div class="timeline-card">
                <div class="timeline-image">
                    <img src="./assets/Open Registration.png" alt="Icon 1">
                </div>
                <div class="timeline-detail">
                    <h5>29 January 2023</h5>
                    <p>Register yourself by clicking the register button. Fill in you and your team students' credentials.</p>
                </div>
            </div>
            <div class="timeline-card">
                <div class="timeline-image">
                    <img class="img2" src="./assets/Close Registration.png" alt="Icon 1">
                </div>
                <div class="timeline-detail2">
                    <h5>25 February 2023 </h5>
                    <p>Make sure you have filled all the requirements. You can contact your mentors for more info.</p>
                </div>
            </div>
            <div class="timeline-card">
                <div class="timeline-image">
                    <img src="./assets/Technical Meeting.png" alt="Icon 1">
                </div>
                <div class="timeline-detail">
                    <h5>1 March 2023</h5>
                    <a href="#">Join here</a>
                </div>
            </div>
            <div class="timeline-card">
                <div class="timeline-image">
                    <img src="./assets/Competition Day.png" alt="Icon 1">
                </div>
                <div class="timeline-detail">
                    <h5>30 March 2023</h5>
                    <a href="#">Join here</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ------------------------Sponsor----------------------------- -->
<section id="sponsor">
    <div class="background">
        <img src="./assets/background/sponsor-bg.png" width="100%" height="100%" alt="">
    </div>
    <div class="container">
        <div class="box-sponsor">
            <h1>Sponsor</h1>
            <div class="plat">
            </div>
            <div class="gold">
            </div>
            <div class="silver">
            </div>
        </div>
    </div>
</section>

<!-- --------------------------Media Partner---------------------- -->
<section id="media-partner">
    <div class="background">
        <img src="./assets/background/medpar.png" alt="">
    </div>
</section>

<!-- -----------------------Other Events---------------------- -->
<section id="other">
    <div class="circle"></div>
    <div class="background">
        <img src="./assets/background/other-event-bg.png" width="100%" height="60%" alt="">
    </div>
    <div class="element">
        <img src="./assets/background/other-element.png" width="100%" height="70%" alt="">
    </div>
    <div class="container">
        <h1>Other Events</h1>
        <p>Join and learn together.</p>
        <div class="other-content">
            <div class="other-item">
                <img src="./assets/other-image.png" alt="">
                <div class="layer">
                    <h3>Virtual</h3>
                    <h3>Conference</h3>
                    <p>Acquiring Valuable Insights to Achieve
                        Success in the Digital Era</p>
                        <h4>31 March 2023</h4>
                    <a href="https://technoscape.id/virtual-conference">Register here!</a>
                </div>
            </div>
            
            <div class="other-item">
                <img src="./assets/other-image2.png" alt="">
                <div class="layer">
                    <h3>Virtual</h3>
                    <h3>Workshop</h3>
                    <p>Front End Development With React</p>
                        <h4>19-20 august 2023</h4>
                    <a href="https://technoscape.id/developer-workshop">Register here!</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- -----------------------Contact us---------------------------- -->
<section id="contact-us">
    <div class="card">
        <h2>Contact Us</h2>
        <form onsubmit="return confirm('Do you really want to submit the form?');" action="{{route('email')}}">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                    <label>Name</label>
                    <input type="text" name ="name" placeholder="Your name" required>
                    </div>
                </div>
            
                <div class="col">
                    <div class="form-group">
                    <label>Subject</label>
                    <input type="text" name ="subject" placeholder="Filll in the subject of your e-mail" required>
                    </div>
                </div>
            
                <div class="col">
                    <div class="form-group">
                    <label>Email</label>
                    <input type="email" name ="email" placeholder="Your E-mail address" required>
                    </div>
                </div>
            
                <div class="col">
                    <div class="form-group">
                    <label>Message</label>
                    <textarea placeholder="Write a message..." name ="message" required></textarea>
                    </div>
                </div>
                <div class="col">
                    <button type="submit">Send</button>
                </div>
            </div>
        </form>
    </div>
</section>


<!-- footer -->
<section id="footer">
        <div class="socmed">
            <a href="https://www.instagram.com/technoscapebncc/?hl=id"><i class="fa-brands fa-instagram fa-4x"></i></a>
            <a href="mailto: technoscape@bncc.net"><i class="fa-regular fa-envelope fa-4x"></i></a>
            <a href="https://twitter.com/BNCC_Binus"><i class="fa-brands fa-twitter fa-4x"></i></a>
            <a href="https://www.facebook.com/bncc.binus"><i class="fa-brands fa-facebook fa-4x"></i></a>
            <a href="https://www.linkedin.com/company/bina-nusantara-computer-club/mycompany/"><i class="fa-brands fa-linkedin-in fa-4x"></i></a>
        </div>
        <h4>Social Media</h4>
        <div class="footer-text">
            <p>Powered and Organized by Bina Nusantara Computer Club</p>
            <a href="#">Privacy Policy and Terms of Service</a>
        </div>
</section>
</div>

<script src="{{ asset('scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</body>
</html>