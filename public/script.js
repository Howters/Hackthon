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






$(document).ready(function() {

    $('#pass').keyup(function() {
        var pass = $(this).val();
        if ( pass.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }
        //validate letter
if ( pass.match(/[A-z]/) ) {
    $('#letter').removeClass('invalid').addClass('valid');
} else {
    $('#letter').removeClass('valid').addClass('invalid');
}

//validate capital letter
if ( pass.match(/[A-Z]/) ) {
    $('#capital').removeClass('invalid').addClass('valid');
} else {
    $('#capital').removeClass('valid').addClass('invalid');
}

//validate number
if ( pass.match(/\d/) ) {
    $('#number').removeClass('invalid').addClass('valid');
} else {
    $('#number').removeClass('valid').addClass('invalid');
}

//validate special char

if (pass.match(/[!@#$%^&()'[\]"?+-/*={}.,;:_]+/)){
    $('#special').removeClass('invalid').addClass('valid');
} else {
    $('#special').removeClass('valid').addClass('invalid');
}

    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();

    });

    $('#pass, #confirm_pass').on('keyup', function () {
        if ($('#pass').val() == $('#confirm_pass').val()) {
          $('#message').html('').css('color', 'green');
        } else 
          $('#message').html('Password is not Match!').css('color', 'red')
      });



    
});