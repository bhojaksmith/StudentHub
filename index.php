		 <?php
		 	session_start();
			if (isset($_SESSION["sess_user"])){
		      header('location: dashboard.php');
		   }
		 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Nirma's leading Student collaboration platform · StudentHub</title>
</head>
<body>
	<div class="topBar">
		<span id="icon"><img src="logo2.png"></span>
		<!-- <span id="f">Upload</span>
		<span id="e">Create Projects</span>
		<span id="b">View Projects</span>
 
		<span id="p">Whats New?</span>

		 -->

		 <span class="search">
		 <input type="text" name="search" placeholder="Search Student Hub " id="search"><i class="fa fa-search"></i>
		</span>
		<a href="login.php" >
			<span id="login1">Log in?</span>
		</a>
	</div>
	<div class="body">
		<h1 id="tag">
			Built For <br> students <br>by students !
		</h1>
		<h2 style="color:#f1f1f1">
			StudentHub is a Collaboration platform inspired by the way you work. From minor projects to major start-ups, you can upload codes, assignments, projects, and review them alongside thousands of other Students.
		</h2>
	</div>
	<form action="register.php" method="post" name="register">
		<div class="register">
			<h2>Register for Student Hub</h2>
			Username:<br>
			<input type="text" name="username" placeholder="Pick a username" id="regDetails" required="true" autocomplete="off"><br><br>
			
			Email :<br>
			<input type="email" name="mail" placeholder="you@example.com" id="regDetails" required="true" autocomplete="off"><br><br>
	
			Password :<br>
			<input type="password" name="password" placeholder="Create a password" id="regDetails" pattern=".{8,12}" required title="8 to 12 characters">
			<span class="subtext">Make sure it's at least 7 characters, including a number, and a lowercase letter.</span><br><br>

			<input type="submit" name="submit" value="Sign up For Student Hub" id="submit"  onclick="CheckPassword(document.register.password)">
		</div>
	</form>
</body>
<script type="text/javascript" src="password.js"></script>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

<script type="text/javascript" src="scrollHide.js"></script>
</html>
