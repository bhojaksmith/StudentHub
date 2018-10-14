<?php     

$dbhost = 'localhost';     
$dbuser = 'root';     
$dbpass = '';
$db = "studenthub";     
$username = $_POST['username'];
$pass = $_POST['password'];
$encpword = base64_encode($pass);     
//$database = mysqli_select_db($connect,$db);
/*$user = $connect->query($getuser);*/  
$connect = mysqli_connect($dbhost, $dbuser, $dbpass,$db);    
$getuser ="SELECT Password FROM register WHERE userName= '$username'";     
$query =mysqli_query($connect,$getuser);     
$row = mysqli_fetch_array($query);
$dbpword = $row['Password'];

	if ($encpword == $dbpword) {
		session_start();  
    	$_SESSION['sess_user']=$username; 
    	//echo $dbpword;
    	header('location:dashboard.php');
	}
	else{
		echo "Invalid username or password!"; 
	}
?>