<?php
	$username = $_POST['username'];
	$pword = $_POST['password'];
	$mail = $_POST['mail'];
	$db = "studenthub";
	$connect = mysqli_connect('localhost','root','');
	$database = mysqli_select_db($connect,$db );

	
$insertquery = "INSERT INTO register(userName,password,studentMail) VALUES ('$username', '$pword', '$mail')";

if ( $connect->query ($insertquery) === TRUE) 
    echo "New record created successfully";
} else {
    echo "Error: " . $insertquery . "<br>" . $connect->error;
}

$connect->close();
?>