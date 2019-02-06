<?php
include_once("../config.php");
$urltoken = $_GET["token"];
$query = "SELECT * FROM users WHERE token = '$urltoken'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($result);
if ($urltoken == $row["token"]) {
	global $urltoken;
	SESSION_start();
	$_SESSION["token"] = $urltoken;
}else {
	header("Location: ../../index.php");
}
?>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/bootstrap-grid.css">
	<script src="../../javascript/scripts.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
	<title>Reset Password</title>
</head>
<body>
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2 offset-md-1"><a href="index.php"><img src="../../images/logo.png" id="logo" alt="logo"></a></div>
				<div class="col-md-4 offset-md-5">
					<h1 id="signIn" class="slidingUnderline"><a href="login.php">Sign in!</a></h1>


					<h1 id="signup" class="slidingUnderline"><a href="register.php">Sign up!</a></h1>
				</div>
			</div>
		</div>
	</header>
	<form id="forgotPassword" action="../17FfDe42Sem/CheckIfResetIsComplete.php" method="POST">
		<h3>Create New Password</h3>
		<input type="password" placeholder="new password" name="newpassword" id="Password" onkeyup="testPassword()"><br/>
		<p id="PasswordError"></p>
		<input type="password" placeholder="re-type new password" name="renewpassword" id="RePassword" onkeyup="testRePassword()">
		<p id="RePasswordError"></p><br/>
		<button type="submit" class="buttons">Reset Password</button>
	</form>
	<footer>
		<p>&copy Copyrights antonioschalas.gr 2018</p>
	</footer>
</body>
</html>