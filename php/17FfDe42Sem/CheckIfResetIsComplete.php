
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="jquery/jquery.js"></script>
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/bootstrap-grid.css">
	<script src="../../javascript/scripts.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
	<title>Forgot password</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 offset-md-1"><a href="index.php"><img src="../../images/logo.png" id="logo" alt="logo"></a></div>
				<div class="col-md-4 offset-md-5">
					<h1 id="signIn" class="slidingUnderline"><a href="../login.php">Sign in!</a></h1>


					<h1 id="signup" class="slidingUnderline"><a href="../register.php">Sign up!</a></h1>
				</div>
			</div>
		</div>
	</header>
	<footer>
		<p>&copy Copyrights antonioschalas.gr 2018</p>
	</footer>
</body>
</html>
<?php

include_once("../config.php");



$newpassword = $_POST['newpassword'];
$renewpassword = $_POST['renewpassword'];
if (!isset($newpassword) && !isset($renewpassword)){
	header("Location: ../../index.php");

}
session_start();
$token = $_SESSION["token"];
$error = 0;
function passwordCheck(){
	global $newpassword;
	if (!preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/', $newpassword)){
		echo "<h3 style='color:red; text-align:center;'>Weak password."."<br/>";
		global $error;
		$error = 1;
	}else {
		global $newpassword;
		echo "<h3 style='color:red; text-align:center;'>Your password is : ".$newpassword."<br/>";

	}
}
function rePasswordCheck(){
	global $newpassword;
	global $renewpassword;
	if ($newpassword !== $renewpassword){
		echo "<h3 style='color:red; text-align:center;'>Passwords doesn't match."."<br/>";
		global $error;
		$error = 1;
	}
}
passwordCheck();
rePasswordCheck();

if ($error == 0){
	global $token;
	global $newpassword;
	$query = "UPDATE users SET password='$newpassword' WHERE token='$token'";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "<h3 style='color:lime; text-align:center;'>Your Password change succesfully.";
	}
	$query = "UPDATE users SET token='' WHERE token='$token'";
	$result = mysqli_query($conn,$query);
	if($result){
		echo ".";
	}
}
?>