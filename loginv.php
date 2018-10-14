<?php 
	/*
if(isset($_POST["submit"])){  
  
if(!empty($_POST['username']) && !empty($_POST['password'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['password']; 
    $encpword = base64_encode($pass) ;
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('studenthub') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM register WHERE username='".$user."' AND password='".$encpword."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['userName'];  
    $dbpassword=$row['Password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
/*    header("Location:dashboard.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
 	

*//*
	$username = $_POST['username'];
	$pword = $_POST['password'];
	$encpword = base64_encode($pword);

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';	        
	$db = "studenthub";
	//$database = mysqli_select_db($connect,$db);
	/*$user = $connect->query($getuser);*/
/*	$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);
	$validate = "SELECT Password from register WHERE userName = '$username'";
	//$decpword = base64_decode($validate);
/*	$query = mysqli_query($connect,$validate);
	if (!$query) {
    printf("Error: %s\n", mysqli_error($connect));
    exit();
}
if ($encpword===$validate) {
	# code...
	header('location:dashboard.php');
}
else{
			        echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';

}
	while($row = mysqli_fetch_array($query)) {
        $success = true;
    }
	if ($success == true) {
		# code...
		$_SESSION['username']= $username; 
	}
	else{
		        echo '<div class="alert alert-danger">Oops! It looks like your username and/or password are incorrect. Please try again.</div>';

	}

*/
?>