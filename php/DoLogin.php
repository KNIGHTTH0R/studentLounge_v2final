<?php 
include_once("config.php");
//get values from the form
$username = $_POST["username"];
$password = $_POST["password"];
//sql query
$query = "SELECT * FROM users WHERE user_username = '$username'";
$result = mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);

if (!empty($row)){

	//checks if the user is super-user
	if ($row["user_password"] == $password && $row["user_type"] == 2){
		SESSION_start();
		$_SESSION["type"] = "admin";
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$_SESSION["id"] = $row["user_ID"];
		header("Location: adminDashboard.php");

	}
	//checks if the user is a simple user
	else if ($row["user_password"] == $password){
		SESSION_start();
		$_SESSION["username"] = $username;
		$_SESSION["password"] = $password;
		$_SESSION["id"] = $row["ID"];
		header("Location: ../explore.php");


	}
	else {
		echo "<h3 style='color:red; text-align:center;'>Wrong password."."<br/>";
		header( "Refresh:3; ../index.php");
	}
}else{
	echo "<h3 style='color:red; text-align:center;'>Username doesn't exist."."<br/>";
	header( "Refresh:3; url=../index.php");
}



?>