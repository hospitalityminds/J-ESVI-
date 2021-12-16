<?php
	if(isset($_POST['submit'])){
		$name=$_POST['firstname'];
  	$name=$_POST['lastname'];
		$email=$_POST['email'];
  	$msg=$_POST['message'];
		// $phone=$_POST['phone'];


		$to='shaizathirst@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="First Name :".$firstname."\n"."last Name :".$lastname."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
