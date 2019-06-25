<?php
$con = mysqli_connect('host', 'username', 'password','database');
if(isset($_POST['name']) === true & isset($_POST['email']) === true & isset($_POST['msg']) === true){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$msg = $_POST['msg'];
	$date = date("Y-m-d");
	$enterMsg = mysqli_query($con, "INSERT INTO jobs VALUES ('','$name','$email','$msg','$date')");
	mail("email@gmail.com","rayyanaq.com","Name: $name\n Email: $email\n Message: $msg","From: admin@rayyanaq.com");
}
?>
