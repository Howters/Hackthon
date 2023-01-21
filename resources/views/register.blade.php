<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
     <!-- favicon -->
     <link rel="icon" type="image/x-icon" href="./asset/favicon-logo.png">
     {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
     <link rel="stylesheet" href="{{ asset('style-reg.css') }}">
     <script src="http://code.jquery.com/jquery-1.7.min.js"></script>
     <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <img src="./asset/background 16.57.54.png" width="100%" alt="">
    <div class="container">
        <div class="heading">
            <h1>Registration</h1>
        </div>
        <section id="form-section">
            <form method = "POST" action= "{{ route('store-group') }}" enctype="multipart/form-data">
                @csrf
                <div id="group-info">
                    <h1>Group Information</h1>
                    <div class="input-group">
                        <div class="name">
                            <div class="input">
                            <label for="group-name">Group Name</label>
                            <input type="text" name="groupName" id="group-name" placeholder="Your group name" value= "{{old('groupName')}}"required >
                            </div>
                        </div>
                        <div class="password">
                            <div class="input">
                                <label for="pass">Password</label>
                                <input type="password" name="pass" id="pass" placeholder="Your password" value= "{{old('pass')}}"required >
                            </div>
                            <div id="pswd_info">
                                <h4>Password must meet the following requirements:</h4>
                                <ul>
                                    <li id="letter" class="invalid">At least <strong>one letter</strong></li>
                                    <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
                                    <li id="number" class="invalid">At least <strong>one number</strong></li>
                                    <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
                                    <li id="special" class="invalid">At least <strong>one special character(s)</strong></li>
                                </ul>
                            </div>
                        </div>
                        <div class="confirm-password">
                            <div class="input">
                                <label for="confirm_pass">Confirm Password</label>
                                <input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirm your password" value= "{{old('confirm_pass')}}"required onkeyup="validate_password()">
                            </div>
                            <span id='message'></span>
                        </div>
                        <div class="binusian">

                            <input type="radio" name="binus" id="binus-yes" value="yes" onchange="showFileInput()" required>
                            <label for="binus-yes">Binusian</label>
                            <input type="radio" name="binus" id="binus-no" value="no" onchange="hideFileInput()" required>
                            <label for="binus-no">Non-Binusian</label>
                        </div>
                    </div>
                   
                </div>

                <div id="leader-info">
                    <h1>Leader Information</h1>
                    <div class="input-group">
                        <div class="f-name">
                            <div class="input">
                            <label for="full-name">Full Name</label>
                            <input type="text" name="name" id="full-name" placeholder="Your full name" value= "{{old('name')}}"required >
                            </div>
                        </div>

                        <div class="birth-place">
                            <div class="input">
                                <label for="birth">Birth Place</label>
                                <input type="text" name="birth_place" id="birth" placeholder="Your birth place"value= "{{old('birth_place')}}" required>
                            </div>
                        </div>

                        <div class="mail">
                            <div class="input">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Your e-mail address"  value= "{{old('email')}}" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                            </div>
                            <div class="margin-left-validation" id="unique1"></div>
                            @error('email')
                            <span class="popup" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="birth-date">
                            <div class="input">
                                <label for="b-date">Birth Date</label>
                                <input type="date" name="birth_date" id="b-date" placeholder="Your birth date" value= "{{old('birth_date')}}" required>
                            </div>
                        </div>

                        <div class="wa-num">
                            <div class="input">
                                <label for="num">Whatsapp Number</label>
                                <input type="tel" name="whatsapp" id="num" placeholder="ex: 081378915673" value= "{{old('whatsapp')}}" required onkeyup="validate_waNum()">
                            </div>
                            <div class="margin-left-validation" id='messagenum'></div>
                            <div class="margin-left-validation" id='messagenumunique'></div>
                            @error('whatsapp')
                            <span class="popup" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="file">
                            <div class="input">
                                <label for="cv">Upload CV <span> ( pdf, jpg, jpeg and png )</span></label>
                                <input type="file" name="cv" id="file_upload" accept="application/pdf, image/jpg, image/jpeg. image/png" required>
                            </div>
                            
                        </div>

                        <div class="id">
                            <div class="input">
                                <label for="line">LINE ID</label>
                                <input type="text" name="line"  id="line" value= "{{old('line')}}" placeholder="Your LINE ID" required>
                            </div>
                            <div class="margin-left-validation" id="unique3"></div>
                            @error('line')
                            <span class="popup" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div id="file-input" style="display: none;">
                            <div class="input">
                                <label for="flazz_upload">Upload Flazz Card (*Binusian only) <span> ( pdf, jpg, jpeg and png )</span></label>
                                <input type="file" name="flazz" id="flazz_upload" accept="application/pdf, image/jpg, image/jpeg. image/png">
                            </div>
                        </div>

                        <div class="git-id">
                            <div class="input">
                                <label for="git">Github/Gitlab ID</label>
                                <input type="text" name="git" id="git" value= "{{old('git')}}"placeholder="Your Github/Gitlab ID" required>
                            </div>
                        </div>
                        
                        <div id="file-inputs" style="display: none;">
                            <div class="input">
                                <label for="id">Upload ID card (*Non-Binusian only) <span> ( pdf, jpg, jpeg and png )</span></label>
                                <input type="file" name="ktp" id="ktp_upload" accept="application/pdf, image/jpg, image/jpeg. image/png">
                        </div>
                        </div>
                    </div>
                    <button type="submit" id="create" class="submit_btn" onclick="wrong_pass_alert()">Confirm and Submit</button>
                    <span id="wrong_pass_alert"></span>
                </div>
            </form>
        </section>
    </div>    
</body>
<script>

    // validate harus unik
    // function validate_unique(){
    //     var email = document.getElementById("email").value;
    //     var line = document.getElementById("line").value;
    //         if(email===""){
    //             document.getElementById("unique1").innerHTML="Must be Unique";
    //             document.getElementById("unique1").style.color="Red";
    //             document.getElementById('create').disabled = true;
    //             document.getElementById('create').style.opacity = (0.4);
    //         }else{
    //             document.getElementById("unique1").innerHTML="";
    //             document.getElementById('create').disabled = false;
    //             document.getElementById('create').style.opacity = (1);
    //         }
           
    //         if(line===""){
    //             document.getElementById("unique3").innerHTML="Must be Unique";
    //             document.getElementById("unique3").style.color="Red";
    //             document.getElementById('create').disabled = true;
    //             document.getElementById('create').style.opacity = (0.4);
    //         }else{
    //             document.getElementById("unique3").innerHTML="";
    //             document.getElementById('create').disabled = false;
    //             document.getElementById('create').style.opacity = (1);
    //         }

    // }
    function showFileInput() {
  document.getElementById("file-input").style.display = "block";
  document.getElementById("flazz_upload").required = true;
  document.getElementById("file-inputs").style.display = "none";
  document.getElementById("ktp_upload").required = false
}

function hideFileInput() {
  document.getElementById("file-input").style.display = "none";
  document.getElementById("flazz_upload").required = false;
  document.getElementById("file-inputs").style.display = "block";
  document.getElementById("ktp_upload").required = true;
}


    function validate_password() {

        var pass = document.getElementById('pass').value;
        var confirm_pass = document.getElementById('confirm_pass').value;
        if (pass != confirm_pass) {
            document.getElementById('wrong_pass_alert').style.color = 'red';
            document.getElementById('wrong_pass_alert').innerHTML
              = 'Cannot submit, Use same password';
            document.getElementById('create').disabled = true;
            document.getElementById('create').style.opacity = (0.4);
        }else {
            document.getElementById('wrong_pass_alert').innerHTML
              = '';
            document.getElementById('create').disabled = false;
            document.getElementById('create').style.opacity = (1);
        }
    }

    function validate_waNum() {

var num = document.getElementById('num').value;
var numLength = num.toString().length;
if (numLength<9||numLength>=13) {
    document.getElementById('messagenum').style.color = 'red';
    document.getElementById('messagenum').innerHTML
      = 'Whatsapp number not valid';
      document.getElementById('messagenumunique').style.color = 'red';
      document.getElementById('messagenumunique').innerHTML
    //   = 'Whatsapp number not unique';
    document.getElementById('create').disabled = true;
    document.getElementById('create').style.opacity = (0.4);
}else {
    document.getElementById('messagenum').innerHTML
      = '';
    document.getElementById('create').disabled = false;
    document.getElementById('create').style.opacity = (1);
}
}


</script>
</html>