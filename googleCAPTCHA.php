<?php
?>
	<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  </head>
  <body>
    <form action="/welcome.php" onsubmit="myFunction()">
      <div class="g-recaptcha" data-sitekey="6LefVCkUAAAAAKDx6eoWvli1YbAjxVlI_eFZTvuR"></div>
      <br/>
      <input type="submit" value="Submit">
    </form>
  </body>
  <script>
    function myFunction() {
	  var response = g-recaptcha-response;
	  if (response.length === 0)
	  alert("The form was submitted");
	}
  </script>
  
</html>