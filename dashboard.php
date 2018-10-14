<?php

	/*if ($flag == 0) {
		header('location:login.php');

	}*/
	/*$username = $_POST['username'];
	$pword = $_POST['password'];
	$encpword = base64_encode($pword);
	$mail = $_POST['mail'];
	*/
	//$id = $_COOKIE['userid'];
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';	        
	$db = "studenthub";
	//$database = mysqli_select_db($connect,$db);
	/*$user = $connect->query($getuser);*/
	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	
	$getuser = "SELECT userName FROM register WHERE regid=2 ";
	
	$query = mysqli_query($connect,$getuser);
	
	$row = mysqli_fetch_array($query);
	$user = $row['userName'];
	
	session_start();
	$user  = $_SESSION['sess_user'] ;

  if (!isset($_SESSION["sess_user"]))
   {
      header("location: index.php");
   }
//Welcome to the dashboard
?>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="topBar" id="navbar" style="display:;">
		<span id="icon"><img src="logo2.png"></span>
		<span id="f"><a href="upload.php">Upload</a></span>
		<span id="e">Create Projects</span>
 		<span id="b">View Projects</span>
		
		<span id="p">Whats New?</span>

		<span class="search">
			<input type="text" name="search" placeholder="Search Student Hub " id="search"><i class="fa fa-search"></i>
		</span>
		<span>&nbsp;Hello <i><?php echo $user?> !</i></span>
		<a href="logout.php"><span id="logout">&nbsp;&nbsp;Log out?</span></a>
		
		<!-- 
		<a href="login.php" >
			<span id="login1">Log in?</span>
		</a>
		 -->
	</div>
	<div class="dash">
		<div class="register">
			<h2>Project Definition <br><span style="color: #aaa">#010</span></h2>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
			<div id="submit"><i class="fa fa-download" aria-hidden="true" style=""></i><a href="http://localhost/palindrome.java" download> Download</a></div>

		</div>
		<div class="register1">
			<h2>Review Code <br><span style="color: #aaa">#086</span></h2>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br>
			<div id="submit1"><i class="fa fa-download" aria-hidden="true" style=""></i> Download</div>

		</div>
	</div>

</body>
</html>
<style type="text/css">
	body{

		overflow: scroll !important;
	}
	#submit{
		width: 45% !important;
		color:#009900 !important;
		background:none !important;
		border:1px solid #009900 !important; 
		font-size: 1em;
		text-align: center !important;
		padding: 3%;
		border-radius: 5% !important;
	}
	#submit:hover{
		background:linear-gradient(to right , #009900,#007700) !important; 
		transition: 2s ease;
		background:#009900 !important;
		border:none !important; 
		color: #f1f1f1 !important;
		border-radius: 0% !important;
		padding: 3%;
	}
	#submit1{
		width: 45% !important;
		color:#009900 !important;
		background:none !important;
		border:1px solid #009900 !important; 
		font-size: 1em;
		text-align: center !important;
		padding: 3%;
		border-radius: 5% !important;
	}
	#submit1:hover{
		background:linear-gradient(to right , #009900,#007700) !important; 
		transition: .31s ease;
		background:#009900 !important;
		border:none !important; 
		color: #f1f1f1 !important;
		border-radius: 0% !important;
		padding: 3%;
	}	
		
	/*#dash{
		margin:10% 0 0 0 !important; 
	}*/
	#regDetails,#regDetails1{
		padding: 4%;
	}
	.register1{
		font-size:1.4em; 
		color: gray;
		padding: 4%;
		font-weight: lighter;
		background: #f1f1f1;
		margin:-45% 8% 13% 60%; 
		border-radius:1%; 

	}
	.register{
		opacity: 1;
		font-size:1.4em; 
		color: gray;
		padding: 4%;
		font-weight: lighter;
		background: #f1f1f1;
		margin:10% 60% 16% 10%; 
		border-radius:1%; 

	}
	
</style>
<script type="text/javascript" src="scrollHide.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="dashboard.css">
<link rel="stylesheet" type="text/css" href="style.css">
