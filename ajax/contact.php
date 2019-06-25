<?php
if(isset($_POST['name']) === true & isset($_POST['email']) === true & isset($_POST['message']) === true){
	$name = $_POST['name'];
	$eml = $_POST['email'];
	$msg = $_POST['message'];
	$date = date("Y-m-d");
	
	$subject = "RayyanQ | Message from ". $name;
	$message = "Message from " . $name . ", on " . $date . ".<br> Email: " . $eml . "<br><br><br>";
	$message .= $msg;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <admin@rayyanq.com>' . "\r\n";
	$email = "email@gmail.com";

	mail($email,$subject,$message,$headers);

	echo "Message sent.";
}
?>
