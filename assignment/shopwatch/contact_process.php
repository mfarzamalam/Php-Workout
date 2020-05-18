<?php

include ("connection.php");

if(isset($_POST['send'])){
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	if(empty($message) || empty($name) || empty($email) || empty($subject)){
		header("location:contact.php?message=fill");
	} else {
		$mailto = "ppractise2@gmail.com";
		$header = "From: ".$email;
		$txt = "You have received email from ".$name.".\n\n".$message;

		if(mail($mailto,$subject,$txt,$header)){
			header("location:contact.php?message=S");
		} else {
			header("location:contact.php?message=F");
		}
	}
}
  
?>