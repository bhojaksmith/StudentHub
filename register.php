<?php

	$username = $_POST['username'];
	$counter = 1;
	
	$pword = $_POST['password'];
	$encpword = base64_encode($pword);
	$mail = $_POST['mail'];
	$db = "studenthub";
	$connect = mysqli_connect('localhost','root','');
	$database = mysqli_select_db($connect,$db);
	//Thanks to Sharan Chhugani (18BCE354) for helping with $flag logic ♥ ;
	$flag =0;

	if($userName!=="" && $pword!=="" && $mail!==""){
		$insertquery = "INSERT INTO register(userName,password,studentMail) VALUES ('$username', '$encpword', '$mail')";
	}
	else{
		header('Location:index.php');	
	}

	if ( $connect->query ($insertquery) === TRUE) {
		$flag = 1;
	    echo "New record created successfully";
	} 
	else {
	    echo "Error: " . $insertquery . "<br>" . $connect->error;
	}
	 $counter= $counter++;
	 $_COOKIE['userid'] = $counter;

    if($flag == 1){
		$flag=0;
    	header('Location:dashboard.php');
    }
    else{
    	header('Location:index.php');	
    	$flag=0;
    }
    $flag=0;
    
$connect->close();

?>