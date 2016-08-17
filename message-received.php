<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<title>Music and Dance Lessons Springville Orem American Fork</title>
	<meta name="description" content="">
	<meta name="author" content="">
	

<?php include("header.php") ?>


<!-- thanks to http://www.freecontactform.com/email_form.php for the tutorial -->

<?php

$name = $_POST['name'];
$number = $_POST['phonenumber'];
$email = $_POST['email'];
$question = $_POST['question'];

$message = $name . "\n" . $number . "\n" . $email . "\n" . $question;

$subject = "ACMA Contact Form - Question from " . $name;
$from = 'From: ' . $email;

// Send
mail('sr@artcitymusic.com', $subject, $message, $from);
?>



	<div id="main" style="height: 100%;">
			
		<h1>Your Message Has Been Sent</h1>
		
		<p>
		We appreciate your interest. A member of our staff will contact you within 1 business day
		</p>

	
	</div>
	<!-- end main -->
	
<?php include("aside.php") ?>

<?php include("footer.php") ?>

