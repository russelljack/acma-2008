<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<title>Music and Dance Lessons Schedule</title>
	<meta name="description" content="">
	<meta name="author" content="">
	

<?php include("header.php") ?>


<!-- thanks to http://www.freecontactform.com/email_form.php for the tutorial -->

<?php

$email = $_POST['email'];

$message = $email . "\n" . "has signed up to receive semester schedules";

$subject = "New schedule request from " . $email;
$from = 'From: ' . $email;

// Send
mail('sr@artcitymusic.com', $subject, $message, $from);
?>



	<div id="main" style="height: 100%;">
			
		<h1>Your Request Has Been Sent</h1>
		
		<p>
		We have recieved your request for a current schedule.  We will get back to you within 1 business day.  Thanks for your interest in our program.
		</p>

	
	</div>
	<!-- end main -->
	
<?php include("aside.php") ?>

<?php include("footer.php") ?>

