<div class="topBar">
		<span id="icon"><img src="logo2.png"></span>
<!-- 		<span id="f">Upload</span>
		<span id="e">Create Projects</span>
 		<span id="b">View Projects</span>
		<span id="p">Whats New?</span>

 -->		<span class="search">
			<input type="text" name="search" placeholder="Search Student Hub " id="search"><i class="fa fa-search"></i>

		</span>
		<a href="index.php">&nbsp;&nbsp;New Users, Register Here !</a>
	</div>

<form action="loginValidation.php" method="post" name="register" id="form">
		<div class="register">
			<h2>Log in to<br> Student Hub</h2>
			Username:<br>
			<input type="text" name="username" placeholder="Pick a username" id="regDetails1" required="true" autocomplete="off"><br><br>
			Password :<br>
			<input type="password" name="password" placeholder="Create a password" id="regDetails" pattern=".{8,12}" required title="8 to 12 characters">
			<i class="fa fa-eye" onmousedown="showpass()" onmouseup="hidepass()"></i> 
			<br><br>

			<input type="submit" name="submit" value="Log in !" id="submit"  onclick="CheckPassword(document.register.password)">
		</div>
</form>
<script type="text/javascript">
	function showpass() {
   	 var x = document.getElementById("regDetails");
  	     x.type = "text";
   }
   	function hidepass() {
   	 var x = document.getElementById("regDetails");
  	    x.type = "password"; 
   }	     
	</script>
   
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
	.subtext{
		font-size: .6em
	}

	h2{
		text-align: center;
	}
	#form{
		margin:10% 0 0 0; 


	}
	#regDetails,#regDetails1{
		padding: 4%;
	}
	.register{
				    /*box-shadow: 3px 3px 3px 3px #aaa;*/
		font-size:1.4em; 
		color: gray;
		padding: 4%;
		font-weight: lighter;
		background: #f1f1f1;
		margin:3% 35% 16% 35%; 

	}
	i.fa-eye{
		position: absolute;
		top:61%;
		left:58%;
		padding-bottom: 55%;
	}
	</style>