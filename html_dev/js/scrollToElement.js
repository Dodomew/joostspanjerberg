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
  var submitButton = document.getElementById("input-submit-button");

  var emailOneInputLowerCase = emailOneInputUser.value.toLowerCase();
  var emailTwoInputLowerCase = emailTwoInputUser.value.toLowerCase();

  var sanitizedEmailOne = escapeHtml(emailOneInputLowerCase);
  var sanitizedEmailTwo = escapeHtml(emailTwoInputLowerCase);

  var emailOneAtSign = sanitizedEmailOne.indexOf('@');
  var emailTwoAtSign = sanitizedEmailTwo.indexOf('@');

  if(sanitizedEmailOne != "" && sanitizedEmailTwo != "")
  {
    emailOneInputUser.className = "";
    emailTwoInputUser.className = "";
    submitButton.className = "buttonDisabled";

    if(emailOneAtSign !== -1 && emailTwoAtSign !== -1)
    {
      if(sanitizedEmailOne === sanitizedEmailTwo)
      {
        emailOneInputUser.className = "greenValidate";
        emailTwoInputUser.className = "greenValidate";
        messageEmailTwo.innerHTML = "";
        submitButton.disabled = false;
        submitButton.className = "buttonEnabled";
      }
      else
      {
          emailOneInputUser.className = "redInvalid";
          emailTwoInputUser.className = "redInvalid";
          messageEmailTwo.innerHTML = "Je emailadres komt niet overeen!";
          submitButton.disabled = true;
          submitButton.className = "buttonDisabled";
      }
    }
    else
    {
      emailOneInputUser.className = "redInvalid";
      emailTwoInputUser.className = "redInvalid";
      messageEmailTwo.innerHTML = "Je mist een @ in je emailadres.";
      submitButton.disabled = true;
      submitButton.className = "buttonDisabled";
    }
  }
  else
  {
    emailOneInputUser.className = "";
    emailTwoInputUser.className = "";
    messageEmailTwo.innerHTML = "";
    submitButton.disabled = true;
    submitButton.className = "buttonDisabled";
  }
}

// Sanitize HTML user input to protect against malicious code
// http://stackoverflow.com/questions/24816/escaping-html-strings-with-jquery
var entityMap =
{
  "&": "&amp;",
  "<": "&lt;",
  ">": "&gt;",
  '"': '&quot;',
  "'": '&#39;',
  "/": '&#x2F;'
};

function escapeHtml(string)
{
  return String(string).replace(/[&<>"'\/]/g, function (s) {
    return entityMap[s];
  });
}
