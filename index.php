
<!DOCTYPE html>
<html>
<head>
	<title>Nirma's leading Student collaboration platform · StudentHub</title>
</head>
<body>
	<div class="topBar">
		<span id="icon"><img src=""></span>
		<span id="f">
			Upload
		</span>
		<span id="b">Minor Projects</span>
		<span id="e">Explore</span>
		<span id="m"></span>
		<span id="p">Pricing</span>

		<span class="search">
			<input type="text" name="search" placeholder="Search Student Hub " id="search"><i class="fa fa-search"></i>
		</span>
		<a href="login.php" >
			<span>Log in?</span>
		</a>
	</div>
	<div class="body">
		<h1 id="tag">
			Built For <br> students <br>by students !
		</h1>
		<h2 style="color: gray">
			StudentHub is a Collaboration platform inspired by the way you work. From minor projects to major start-ups, you can upload codes, assignments, projects, and review them alongside thousands of other Students.
		</h2>
	</div>
	<form action="register.php" method="post" name="register">
		<div class="register">
			<h2>Register for Student Hub</h2>
			Username:<br>
			<input type="text" name="username" placeholder="Pick a username" id="regDetails"><br><br>
			
			Email :<br>
			<input type="email" name="mail" placeholder="you@example.com" id="regDetails"><br><br>
	
			Password :<br>
			<input type="password" name="password" placeholder="Create a password" id="regDetails">
			<span class="subtext">Make sure it's at least 7 characters, including a number, and a lowercase letter.</span><br><br>

			<input type="submit" name="submit" value="Sign up For Student Hub" id="submit"  onclick="CheckPassword(document.register.password)">
		</div>
	</form>
</body>
<script type="text/javascript">
	function CheckPassword(inputtext) 
{ 
var passw=  /^[A-Za-z]\w{7,14}$/;
if(inputtext.value.match(passw)) 
{ 
	return true;
}
else
{ 
alert('Please Enter Strong Password  !')
return false;
}
}
</script>
<style type="text/css">
	.subtext{
		font-size: .6em
	}
	#regDetails{
		padding: 2%;
	}
	.register{
		font-size:1.4em; 
		color: gray;
		padding: 4%;
		font-weight: lighter;
		background: #f1f1f1;
		margin:-29% 5% 20% 65%; 
	}
	input{
		border: .3px solid gray;
		width: 100%;
		border-radius: 3%; 
	}
	#submit{
		width: 100%;
		color:#f1f1f1;
		background:#2ebc4f; 
		border:none; 
		font-size: 1em;
		padding: 3%;
	}
	#submit:hover{
		background:#28a445 ; 
		transition: .4s ease;
		cursor: pointer;
	}
	i.fa-upload{
		position: absolute;
		top:8%;
		left:15.4%;
		padding-bottom: 55%;
	}
	i.fa-search { 
		position: absolute; 
		top: 1%; 
		left: 85%;
		color:gray; 
	}

	.search{
		position: relative;
	}

	.body{		/*Top right bottom left*/
		margin:16% 0% 0% 13%; 

	}

	h2{
		margin:0% 40% 0% 0%;
	}

	#tag{
		font-size: 4em;
		color: #f1f1f1;
	}

	#search:focus{
		background: #f1f1f1;
		color: #202020;	
	}

	#search{
		background: #404348;
		padding: .5% 2% .7% .4%;
		color:white;
		width:18%; 
		border: none;

	}
	.topBar{
		position: fixed;
		background: #24292D;
		color: #f1f1f1;
		width: 100%;
		left:0%;
		padding-bottom:1%;
		top:0%;
		padding-left:13.3%;
		}

	body{ 	
		background:url("background.svg") ,#2b3137;
		font-family :Avenir;
	}


	#f,#b,#e,#m,#p{
		margin:0% 0% 0% 0%; 
		margin-top:2.8%;
		color: #fff;
		margin-right: 2.3%;
		padding-top: 2%;
		padding-bottom: 5%;
		font-size: 1em;		
	}

	img{
		border-radius: 50%;
		margin-top:1%;
		/*margin-bottom:1%;*/
		height: 2.6%;
		width: 2.6%;
	}
	a{
		color: gray;
		text-decoration: none;
	}
	a:hover{
		color: white;
	}

	img:hover,#f:hover,#b:hover,#e:hover,#m:hover,#p:hover{
		color:gray;
		cursor: pointer;
	}
	/* latin-ext */
@font-face {
  font-family: 'Avenir';
  font-style: normal;
  font-weight: 400;
  src: local('Avenir LT Pro 45 Book'), local('AvenirLTPro-Book'), url(https://fonts.gstatic.com/l/font?kit=k6e5O52B6MekHtih-eM9afesZW2xOQ-xsNqO47m55DA&skey=8887f17a62203d44&v=v1) format('woff2');
  unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Avenir';
  font-style: normal;
  font-weight: 400;
  src: local('Avenir LT Pro 45 Book'), local('AvenirLTPro-Book'), url(https://fonts.gstatic.com/l/font?kit=yrOSjsChZucrvtFmTHmr7g&skey=8887f17a62203d44&v=v1) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215;
}
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</html>
