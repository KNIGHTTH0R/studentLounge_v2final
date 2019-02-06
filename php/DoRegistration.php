<?php

include_once("config.php");

//Get values from fields
$error = 0;
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];

//Functions that checks if registration fields are correct.

//Username check
function usernameCheck(){
	global $username;
	if (!preg_match("/^[a-zA-Z]+$/",$username)){
		echo "invalid username."."<br/>";
		global $error;
		$error = 1;
	}else{
		echo "Your username is : ".$username."<br/>";
	}
}
usernameCheck();


//-----------------------------------------Fields checks ends here.---------------------------------------------------------

//create user
global $error;
if ($error == 0){
	$query = "INSERT INTO users (user_username,user_password, user_firstName, user_lastName, user_email ,user_phone) 
	VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$phone')";

	if ($conn->query($query) === TRUE) {
		echo "<br/>"."You have registered successfully :)";
		header( "Refresh:5; url=../main.php");
	} else {
		echo "Error: " . $query . "<br>" . $conn->error;
	}

	$conn->close();

//error message if cannot create the user
}else {
	echo "<h1 style='color:Red; text-align:center; font-weight:bold;'>Sorry,check the errors above and try again.";
	header( "Refresh:5; url=../main.php");
}

?>

?>
