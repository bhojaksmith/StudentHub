<?php

	/*if ($flag == 0) {
		header('location:login.php');

	}*/
	/*$username = $_POST['username'];
	$pword = $_POST['password'];
	$encpword = base64_encode($pword);
	$mail = $_POST['mail'];
	*/
	$id = $_COOKIE['userid'];
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';	        
	$db = "studenthub";
	//$database = mysqli_select_db($connect,$db);
	/*$user = $connect->query($getuser);*/
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	$getuser = "SELECT userName FROM register WHERE regid=$id ";
	$query = mysqli_query($connect,$getuser);
	$row = mysqli_fetch_array($query);
	$user = $row['userName'];

//Welcome to the dashboard
?>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="topBar" style="display:;">
		<span id="icon"><img src="logo2.png"></span>
		<span id="f">Upload</span>
		<span id="e">Create Projects</span>
<!-- 		<span id="b">View Projects</span>
 -->		
		<span id="p">Whats New?</span>

		<span class="search">
			<input type="text" name="search" placeholder="Search Student Hub " id="search"><i class="fa fa-search"></i>
		</span>
		<span>Hello <?php echo $user?></span>
		<!-- 
		<a href="login.php" >
			<span id="login1">Log in?</span>
		</a> -->
	</div>

</body>
</html>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="style.css">
