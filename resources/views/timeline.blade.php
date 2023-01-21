<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timeline - Hackthon</title>
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="{{'login page/timeline.css'}}">
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
    @include('navbar')

    <section id="timeline">
        <h3>Timeline</h3>
        <p style="margin-bottom: 5rem;">Mark the dates.</p>

        <div class="timeline">
            <img src="login page/assets/timeline.png" alt="">

        </div>
        <div class="timeline-content" style="display: flex; justify-content: space-around; gap: 6rem;">
            <div class="content">
                <img src="login page/assets/openRegis.png" class="img-content" alt="">
                <p id="desc"><b>29 January 2023</b> <br>
                    Register yourself by clicking the register button. Fill in you and your team students’ credentials.</p>
            </div>
            <div class="content">
                <img src="login page/assets/closeRegis.png" class="img-content" alt="">
                <p id="desc"><b>25 February 2023</b> <br>
                    Make sure you have filled all the requirements. You can contact your mentors for more info.</p>
            </div>
            <div class="content">
                <img src="login page/assets/techMeeting.png" class="img-content" alt="">
                <p id="desc"><b>1 March 2023</b></p>
                <form>
                    <button type="submit">Join here</button>
                </form>
            </div>
            <div class="content">
                <img src="login page/assets/competitionDay.png" class="img-content" alt="">
                <p id="desc"><b>30 March 2023</b></p>
                <form>
                    <button type="submit">Join here</button>
                </form>
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
            <a href=""><p>Privacy Policy and Terms of Service</p></a>
        </div>
        
    </footer>

</body>
</html>