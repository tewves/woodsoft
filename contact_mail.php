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
  if (isset($_POST['submit-message']))  {
	  
	  if(!isset($_REQUEST['ws-email']) )
	  {
		  echo "Fill the Email ID";
	  }
	  else
	  {

		  //Email information
		  $admin_email = "sumy@tewve.com";
		  
		  $name=$_REQUEST['ws-name'];
		  $address1=$_REQUEST['ws-address1'];
		  $city=$_REQUEST['ws-city'];
		  $number=$_REQUEST['ws-number'];
		  $options=$_REQUEST['ws-options'];
		  $country=$_REQUEST['ws-country'];
		  $email=$_REQUEST['ws-email'];
		  $weburl=$_REQUEST['ws-weburl'];
		  $contactName=$_REQUEST['ws-contactName'];
		  $note = $_REQUEST['ws-note'];
		  
		  $subject = "Message from woodsoftech.com";
		  
		  $message .= "Company Name:" . $name."\n\n";
		  $message .= "Phone:" . $number."\n\n";
		  $message .= "Email-ID:" . $email."\n\n";
		  $message .= "Website:" . $weburl."\n\n";
		  $message .= "Name of Business:" . $options."\n\n";
		  $message .= "Message:" . $note."\n\n";
		  $message .= "Contact Person Name:" . $contactName."\n\n";
		  $message .= "Address:" . $address1."\n\n";
		  $message .= "City:" . $city."\n\n";
		  $message .= "Country:" . $country."\n\n";
		  
		  
		  
		  $header="From:" . $email;
		  
		  //send email
		  if(mail($admin_email, $subject, $message,$header ))
		  {
		  
			  //Email response
			  echo "Message Sent. Thank You!";
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

