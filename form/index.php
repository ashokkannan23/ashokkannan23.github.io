<?php
if(isset($_POST['submit'])) 
{

$message=
'Full Name:	'.$_POST['fullname'].'<br />
Subject:	'.$_POST['subject'].'<br />
Phone:	'.$_POST['phone'].'<br />
Email:	'.$_POST['emailid'].'<br />
Comments:	'.$_POST['comments'].'
';
    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "ashokkannan66@gmail.com"; // Your full Gmail address
    $mail->Password   = "neethuashok"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
    $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
    $mail->Subject = "Cfnet New Contact Form Enquiry";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
	$mail->setFrom('from@example.com', 'Cfnet');
    $mail->AddAddress("ashokkannan49@gmail.com", "Cfnet"); // Where to send it - Recipient
	$mail->addAddress('jambunathan@cherritech.com');
	//$mail->addAddress('support@cherritech.com'); 
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>

<html>
<head>
  <title>Contact Form</title>
  <style>
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600);

* {
	margin:0;
	padding:0;
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-font-smoothing:antialiased;
	-moz-font-smoothing:antialiased;
	-o-font-smoothing:antialiased;
	font-smoothing:antialiased;
	text-rendering:optimizeLegibility;
}

body {
	font-family:"Open Sans", Helvetica, Arial, sans-serif;
	font-weight:300;
	font-size: 12px;
	line-height:30px;
	color:#777;
	
}

.error {
    color: red;
}

.success {
    color: #ff9966;
    text-align: center;
    font-weight: bold;
    font-size: 14px;
}

.container {
	max-width:400px;
	width:100%;
	margin:0 auto;
	position:relative;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea, #contact button[type="submit"] { font:400 12px/16px "Open Sans", Helvetica, Arial, sans-serif; }

#contact {
	background:#F9F9F9;
	padding:25px;
	margin:50px 0;
}

#contact h3 {
	color: #e80d0d;
	display: block;
	font-size: 30px;
	font-weight: 400;
}

#contact h4 {
	margin:5px 0 15px;
	display:block;
	font-size:13px;
}

fieldset {
	border: medium none !important;
	margin: 0 0 10px;
	min-width: 100%;
	padding: 0;
	width: 100%;
}

#contact input[type="text"], #contact input[type="email"], #contact input[type="tel"], #contact input[type="url"], #contact textarea {
	width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px;
}

#contact input[type="text"]:hover, #contact input[type="email"]:hover, #contact input[type="tel"]:hover, #contact input[type="url"]:hover, #contact textarea:hover {
	-webkit-transition:border-color 0.3s ease-in-out;
	-moz-transition:border-color 0.3s ease-in-out;
	transition:border-color 0.3s ease-in-out;
	border:1px solid #AAA;
}

#contact textarea {
	height:100px;
	max-width:100%;
  resize:none;
}

#contact button[type="submit"] {
	cursor:pointer;
	width:100%;
	border:none;
	background:#dd0d0d;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;
}

#contact button[type="submit"]:hover {
	background:red;
	-webkit-transition:background 0.3s ease-in-out;
	-moz-transition:background 0.3s ease-in-out;
	transition:background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active { box-shadow:inset 0 1px 3px rgba(0, 0, 0, 0.5); }

#contact input:focus, #contact textarea:focus {
	outline:0;
	border:1px solid #999;
}
::-webkit-input-placeholder {
 color:#888;
}
:-moz-placeholder {
 color:#888;
}
::-moz-placeholder {
 color:#888;
}
:-ms-input-placeholder {
 color:#888;
}
  </style>
  

<script src='https://www.google.com/recaptcha/api.js'></script>

</head>
<body>
					
		<!--<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
			<form name="form1" id="form1" action="" method="post">
					<fieldset>
					  <input type="text" name="fullname" placeholder="Full Name" required/>
					  <br />
					  <input type="text" name="subject" placeholder="Subject" required/>
					  <br />
					  <input type="text" name="phone" placeholder="Phone" required/>
					  <br />
					  <input type="text" name="emailid" placeholder="Email" required/>
					  <br />
					  <textarea rows="4" cols="20" name="comments" placeholder="Comments" required></textarea>
					  <br />
					  <input type="submit" name="submit" value="Send" />
					</fieldset>
			</form>
			<p><?php if(!empty($message)) echo $message; ?></p>
		</div>-->
		<div class="container">  
  <form id="contact" action="" name="form1" method="post">
    <h3>Contact Us</h3>
    <h4>Contact us today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Full name" type="text" pattern="[a-zA-Z ]{3,}"  title="No Numbers & Special character" name="fullname"  autofocus>
   
    </fieldset>
	 <fieldset>
      <input placeholder="Subject" type="text" name="subject" required>
     
    </fieldset>
    <fieldset>
      <input placeholder="Email" type="email" name="emailid" required>
     
    </fieldset>
    <fieldset>
      <input placeholder="Phone" type="text" pattern="[789][0-9]{9}" name="phone" value=""  required>
     

    </fieldset>
    <fieldset>
     <textarea rows="4" cols="20" name="comments" placeholder="Comments" required></textarea>
    </fieldset>
	<div class="g-recaptcha" data-sitekey="6LdXYTQUAAAAABJ7b4OlS3-P1av2k6mAd_6SqdJA"></div>
    <fieldset>
      <button name="submit" type="submit" value="submit" id="contact-submit">Submit</button>
    </fieldset>
  <h2 style=text-align:center;"><?php if(!empty($message)) echo $message; ?></h2>
  </form>
  
</div>
					
</body>
</html>