$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top -100
        }, 750);
    }
});

// http://stackoverflow.com/questions/3042651/jquery-scrolltop-not-working-in-chrome-but-working-in-firefox
// http://stackoverflow.com/questions/9618997/run-scrolltop-with-offset-of-element-by-id
// http://codepen.io/claviska/pen/cybdG


function validateEmail()
{
  var emailOneInputUser = document.getElementById("emailone");
  var emailTwoInputUser = document.getElementById("emailtwo");
  var messageEmailTwo = document.getElementById("contact-form-emailtwo-error");

  if(emailOneInputUser.value != "" && emailTwoInputUser.value != "")
  {
    emailOneInputUser.className = "";
    emailTwoInputUser.className = "";
    
    if(emailOneInputUser.value === emailTwoInputUser.value)
    {
      emailOneInputUser.className += "greenValidate";
      emailTwoInputUser.className += "greenValidate";
      messageEmailTwo.innerHTML = "";
    }
    else
    {
        emailOneInputUser.className += "redInvalid";
        emailTwoInputUser.className += "redInvalid";
        messageEmailTwo.innerHTML = "Je email komt niet overeen!"
    }
  }
}
