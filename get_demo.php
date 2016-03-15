<html>
<head>
<title>Woodsoft</title>
<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body style="background-color:#666; text-align:center;">
<div class="">
      <a href="index.html">
        <img style="margin:0 auto; display:block" src="img/logo_only.png" alt="Logo Brand">
      </a>
</div>
<h3 style="text-align:center; color:#fff;">
<?php
  if (isset($_POST['submit-email']))  {

	  if(!isset($_POST['reg-email']) )
	  {
		  echo "Fill the Email ID";
	  }
	  else
	  {

		  //Email information
		  $admin_email = "sumy@tewve.com";
		  $email = $_POST['reg-email'];
		  $subject = "Demo Request from woodsoftech.com";
		  $message = "Email-ID:" . $email;

		  $header="From:" . $email;

		  //send email
		  if(mail($admin_email, $subject, $message,$header ))
		  {

			  //Email response
			  echo "Thank you for your subscription! We will inform you.";
		  }

		  //if "email" variable is not filled out, display the form
		  else
		  {
			  echo "Message Failed!";
			  print_r(error_get_last());
		  }
	  }
  }
  ?>
  </h3>
  <h4 ><a style="text-align:center; color:#666; background-color:#fff; padding:5px 20px; text-decoration:none;"  href="index.html">Home</a></h4>
</body>

</html>
