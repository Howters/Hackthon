var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

// faq dropdown

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

$(document).ready(function() {
  if ($('.alert-success').length) {
      $('.alert-success').fadeIn().delay(3000).fadeOut();
      Swal.fire({
          title: 'Success!',
          text: $('.alert-success').text(),
          icon: 'success',
          timer:3000,
          showConfirmButton: false
      });
  }
});