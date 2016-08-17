<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<title>Music Lessons Springville</title>
	<meta name="description" content="">
	<meta name="author" content="">
	

<?php include("header.php") ?>


<!-- thanks to http://www.freecontactform.com/email_form.php for the tutorial -->

<?php

$name = $_POST['name'];
$number = $_POST['phonenumber'];
$email = $_POST['email'];
$childsname = $_POST['childsname'];
$class = $_POST['class'];

$message = $name . "\n" . $number . "\n" . $email . "\n" . $childsname . "\n" . $class;

$subject = "New enrollment request from " . $name;
$from = 'From: ' . $email;

// Send
mail('sr@artcitymusic.com', $subject, $message, $from);
?>



	<div id="main" style="height: 100%;">
			
		<h1>Form has been sent</h1>
		
		<p>
		Your enrollment form has been sent.  A member of our staff will contact you within 1 business day to collect payment information and answer any additional questions you may have.
		</p>
		
		<p>
		*Note: Enrollment is not complete until payment has been made.
		</p>

	
	</div>
	<!-- end main -->
	
<?php include("aside.php") ?>

<?php include("footer.php") ?>

