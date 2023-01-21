<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Hackthon</title>
    <link rel="shortcut icon" href="Login Page/assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ 'login page/dashboard.css' }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2? 
    family=Jost&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/23a94a611d.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".toggle").click(function() {
                $(".parag").toggle();
            });
        });

        $(document).ready(function() {
            $(".toggle1").click(function() {
                $(".parag1").toggle();
            });
        });
    </script>
</head>

<body>
    @include('navbar')

    <section id="landing-page">
        <div class="container">
            <div class="desc">
                <h2>Welcome, {{ $group->name }}!!</h2>
                <p>Scroll down to check and update data!</p>
            </div>
            <img src="login page/assets/dashboard.png" alt="">
        </div>
    </section>
    <section id="dropdown">
        <div class="container">
            <div class="dropdown">
                <div class="toggle">
                    <button">
                        <p>Leader Data<i class="fa fa-caret-down" aria-hidden="true" style="font-size: 20px;"></i></p>

                        </button>

                </div>

                <div class="parag">
                    <p style="text-align: center;">Leader Information</p>

                    <form>
                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="names" style="display: block;">Full Name</label>
                                <input type="text" placeholder="{{ $group->leader->name }}" id="fullName" readonly
                                    disabled="disabled">
                            </div>

                            <div class="input">
                                <label for="lineid" style="display: block;">LINE ID</label>
                                <input type="text" placeholder="{{ $group->leader->line }}" id="lineid" readonly
                                    disabled="disabled">
                            </div>



                        </div>

                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="name" style="display: block;">E-mail</label>
                                <input type="email" placeholder="{{ $group->leader->email }}" id="E-mail"readonly
                                    disabled="disabled">
                            </div>

                            <div class="input">
                                <label for="birthplace" style="display: block;">Birth place</label>
                                <input type="text" placeholder="{{ $group->leader->birth_place }}" id="birthplace"
                                    readonly disabled="disabled">
                            </div>



                        </div>

                        <div class="column" style="display: flex;">
                            <div class="input">
                                <label for="WA" style="display: block;">Whatsapp Number</label>
                                <input type="tel" placeholder="{{ $group->leader->whatsapp }}"
                                    id="wa"readonly disabled="disabled">
                            </div>

                            <div class="input">
                                <label for="birthdate" style="display: block;">Birth date</label>
                                <input type="text" placeholder="{{ $group->leader->birth_date }}"
                                    id="birthdate"readonly disabled="disabled">
                            </div>



                        </div>

                        <div class="column" style="display: flex; justify-content: center; margin-bottom: 2rem;">
                            <div class="input">
                                <label for="WA" style="display: block;">Github/Gitlab ID</label>
                                <input type="text" placeholder="{{ $group->leader->github }}" id="wa"readonly
                                    disabled="disabled">
                            </div>



                        </div>


                    </form>

                    <p style="text-align: center;">Click to Preview</p>

                    @if ($group->binusian == 1)
                        <div class="viewBukti">



                            <a href="{{ asset('/storage/Product/' . $group->leader->cv) }}" target="_blank">
                                <p>Curriculum Vitae</p>
                            </a>
                            <a href="{{ asset('/storage/Product/' . $group->leader->flazz) }}" target="_blank">
                                <p>Flazz Card </p>
                            </a>
                        </div>
                </div>
            @elseif ($group->binusian == 0)
                <div class="viewBukti">
                    <a href="{{ asset('/storage/Product/' . $group->leader->ktp) }}" target="_blank">
                        <p>ID Card </p>

                    </a>
                    <a href="{{ asset('/storage/Product/' . $group->leader->cv) }}" target="_blank">
                        <p>Curriculum Vitae</p>
                    </a>
                    {{-- <a href="{{asset('/storage/Product/'.$group->leader->flazz)}}" target="_blank"><p>Flazz Card (*Binusian only)</p></a>  --}}
                </div>
            </div>
            @endif




            @if ($group->memberCount < 3)
                <div class="dropdown">
                    <div class="toggle1">
                        <button">
                            <p>Add Member<i class="fa fa-caret-down" aria-hidden="true" style="font-size: 20px;"></i>
                            </p>

                            </button>

                    </div>

                    <div class="parag1">
                        <form method="POST" action="{{ route('store-member') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="addMember">
                                <p style="text-align: center; margin-bottom: 2.5rem;">ADD MEMBER
                                    {{ $group->memberCount + 1 }}</p>
                                <div class="column" style="display: flex;">
                                    <div class="input">
                                        <label for="name" style="display: block;">Full name</label>
                                        <input type="text" name="name"value="{{ old('name') }}"
                                            placeholder="Your full name" required>
                                    </div>

                                    <div class="input">
                                        <label for="birthplace" style="display: block;">Birth place</label>
                                        <input type="text" name="birth_place" placeholder="Your birth place"
                                            id="birthplace"value="{{ old('birth_place') }}" required>
                                    </div>

                                </div>

                                <div class="column" style="display: flex;">
                                    <div class="input">
                                        <label for="email" style="display: block;">E-mail</label>
                                        <input type="email" name="email" placeholder="Your e-mail address"
                                            value="{{ old('email') }}" required
                                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                                    </div>

                                    <div class="input">
                                        <label for="b-date" style="display: block;">Birth date</label>
                                        <input type="date" name="birth_date" id="b-date"
                                            placeholder="Your birth date" value="{{ old('birth_date') }}" required>
                                    </div>

                                </div>
                                <div class="margin-left-validation"></div>
                                @error('email')
                                    <span class="margin-left-validation" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="column" style="display: flex;">
                                    <div class="input">
                                        <label for="num" style="display: block;">Whatsapp Number</label>
                                        <input type="tel" name="whatsapp" id="num"
                                            placeholder="ex: 081378915673" value="{{ old('whatsapp') }}" required
                                            onkeyup="validate_waNum()">
                                    </div>
                                    {{-- <div class="margin-left-validation" id='messagenumunique'></div> --}}

                                    <div class="input">
                                        <label for="CV" style="display: block;">Upload CV</label>
                                        <input type="file"
                                            name="cv"placeholder="Upload in pdf, jpg, jpeg and png" required
                                            accept="application/pdf, image/jpg, image/jpeg. image/png">
                                    </div>
                                </div>
                                <div class="margin-left-validation" id='messagenum'></div>
                                @error('whatsapp')
                                    <span class="margin-left-validation" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="column" style="display: flex;">
                                    <div class="input">
                                        <label for="lineID" style="display: block;">LINE ID</label>
                                        <input type="text" name="line"value="{{ old('line') }}"
                                            placeholder="Your LINE ID" required>
                                    </div>

                                    @if ($group->binusian == 0)
                                        <div class="input">
                                            <label for="IDcard" style="display: block;">Upload ID card <span> ( pdf,
                                                    jpg, jpeg and png )</span></label>
                                            <input type="file" name="ktp"value="{{ old('ktp') }}"
                                                placeholder="Upload in pdf, jpg, jpeg and png" required
                                                accept="application/pdf, image/jpg, image/jpeg. image/png">
                                        </div>
                                </div>
            @endif
            @if ($group->binusian == 1)
                <div class="column" style="display: flex;">
                    <div class="input">
                        <label for="flazz" style="display: block;">Upload Flazz Card <span> ( pdf, jpg, jpeg and
                                png )</span></label>
                        <input type="file" name="flazz" value="{{ $member->flazz ?? old('flazz') }}"
                            placeholder="Upload in pdf, jpg, jpeg and png" required
                            accept="application/pdf, image/jpg, image/jpeg. image/png">
                    </div>
                </div>
            @endif
            <div class="margin-left-validation"></div>
            @error('line')
                <span class="margin-left-validation" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="column" style="display: flex;">
                <div class="input">
                    <label for="github" style="display: block;">Github/Gitlab ID</label>
                    <input type="text"name="github" value="{{ old('github') }}"
                        placeholder="Your Github/Gitlab ID" required>
                </div>

            </div>
        </div>
        <div id="submit" style="padding-top: 3.5rem;">
            <button type="submit" id="submit">Confirm and Submit</button>
            </form>
        </div>
        </div>
    @elseif($group->memberCount >= 3)
        <div class="toggle1">
            <button">

                <p>Members Data<i class="fa fa-caret-down" aria-hidden="true" style="font-size: 20px;"></i></p>

                </button>

        </div>

        @foreach ($group->member as $grup)
            <br>
            <div class="parag1">

                <p style="text-align: center;">Member {{ $count++ }}</p>




                <form>
                    <div class="column" style="display: flex;">
                        <div class="input">
                            <label for="names" style="display: block;">Full Name</label>
                            <input type="text" placeholder="{{ $grup->name }}" id="fullName" readonly
                                disabled="disabled">
                        </div>

                        <div class="input">
                            <label for="lineid" style="display: block;">LINE ID</label>
                            <input type="text" placeholder="{{ $grup->line }}" id="lineid" readonly
                                disabled="disabled">
                        </div>



                    </div>

                    <div class="column" style="display: flex;">
                        <div class="input">
                            <label for="name" style="display: block;">E-mail</label>
                            <input type="email" placeholder="{{ $grup->email }}" id="E-mail"readonly
                                disabled="disabled">
                        </div>

                        <div class="input">
                            <label for="birthplace" style="display: block;">Birth place</label>
                            <input type="text" placeholder="{{ $grup->birth_place }}" id="birthplace" readonly
                                disabled="disabled">
                        </div>



                    </div>

                    <div class="column" style="display: flex;">
                        <div class="input">
                            <label for="WA" style="display: block;">Whatsapp Number</label>
                            <input type="tel" placeholder="{{ $grup->whatsapp }}" id="wa"readonly
                                disabled="disabled">
                        </div>

                        <div class="input">
                            <label for="birthdate" style="display: block;">Birth date</label>
                            <input type="text" placeholder="{{ $grup->birth_date }}" id="birthdate"readonly
                                disabled="disabled">
                        </div>



                    </div>

                    <div class="column" style="display: flex; justify-content: center; margin-bottom: 2rem;">
                        <div class="input">
                            <label for="WA" style="display: block;">Github/Gitlab ID</label>
                            <input type="text" placeholder="{{ $grup->github }}" id="wa"readonly
                                disabled="disabled">
                        </div>



                    </div>


                </form>

                <p style="text-align: center;">Click to Preview</p>

                @if ($group->binusian == 1)
                    <div class="viewBukti">


                        <!-- Yang href nya nnti di ganti aja -->

                        <a href="{{ asset('/storage/Product/' . $group->cv) }}" target="_blank">
                            <p>Curriculum Vitae</p>
                        </a>
                        <a href="{{ asset('/storage/Product/' . $grup->flazz) }}" target="_blank">
                            <p>Flazz Card </p>
                        </a>
                    </div>
            </div>
        @elseif ($group->binusian == 0)
            <div class="viewBukti">
                <a href="{{ asset('/storage/Product/' . $grup->ktp) }}" target="_blank">
                    <p>ID Card </p>

                </a>
                <a href="{{ asset('/storage/Product/' . $grup->cv) }}" target="_blank">
                    <p>Curriculum Vitae</p>
                </a>
                {{-- <a href="{{asset('/storage/Product/'.$group->leader->flazz)}}" target="_blank"><p>Flazz Card (*Binusian only)</p></a>  --}}
            </div>
            </div>
        @endif
        @endforeach
        @endif

        <section id="cp">
            <div class="container">
                <h1>Contact Person</h1>
                <div class="cp-content">
                    <div class="row">
                        <div class="columns">
                            <img src="login page/assets/person.png" alt="">
                            <div class="cp-desk">
                                <p>M. Rizki</p>
                                <p>Phone : 087896643456</p>
                                <p>Line : m.rizki</p>


                            </div>
                        </div>
                        <div class="columns">
                            <img src="login page/assets/person.png" alt="">
                            <div class="cp-desk">
                                <p>R. Arthur </p>
                                <p>Phone : 087855456782</p>
                                <p>Line : richard.a</p>


                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section>








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


</body>
<script>
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


    window.onload = function() {
        var date = new Date();
        var dd = date.getDate();
        var mm = date.getMonth() + 1;
        var yyyy = date.getFullYear();

        //Add a zero if one Digit (eg: 05,09)
        if (dd < 10) {
            dd = "0" + dd;
        }

        //Add a zero if one Digit (eg: 05,09)
        if (mm < 10) {
            mm = "0" + mm;
        }

        minYear = yyyy - 80; //Calculate Minimun Age (<80)
        maxYear = yyyy - 17; //Calculate Maximum Age (>18)

        var min = minYear + "-" + mm + "-" + dd;
        var max = maxYear + "-" + mm + "-" + dd;

        document.getElementById("b-date").setAttribute("min", min);
        document.getElementById("b-date").setAttribute("max", max);
    };

    function validate_waNum() {

        var num = document.getElementById('num').value;
        var numLength = num.toString().length;
        if (numLength < 9 || numLength >= 13) {
            document.getElementById('messagenum').style.color = 'red';
            document.getElementById('messagenum').innerHTML = 'Whatsapp number not valid';
            document.getElementById('messagenumunique').style.color = 'red';
            document.getElementById('messagenumunique').innerHTML
            //   = 'Whatsapp number not unique';
            document.getElementById('create').disabled = true;
            document.getElementById('create').style.opacity = (0.4);
        } else {
            document.getElementById('messagenum').innerHTML = '';
            document.getElementById('create').disabled = false;
            document.getElementById('create').style.opacity = (1);
        }
    }
</script>

</html>
