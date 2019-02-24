<?php
include_once("config.php");
include_once("../includes/adminHeader.php");


$id = $_GET['id'];

$query = "SELECT * FROM users WHERE user_ID='$id'";
$result = mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);

//When update button clicked

if (isset($_POST["updateBtn"])){
	$error = 0;
	$username = $_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$password = $_POST['password'];

//Functions that checks if registration fields are correct.


//-----------------------------------------Fields checks ends here.---------------------------------------------------------

//update user
	if ($error == 0){
		$query = "UPDATE users 
		SET user_username='$username' ,user_firstname='$firstname' ,user_lastname='$lastname' ,user_email='$email' 
		,user_phone='$phone' ,user_password='$password'
		WHERE user_ID='$id'";

		if ($conn->query($query) === TRUE) {
			header("Location:adminViewAllUsers.php");
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}

		$conn->close();

	}



}
?>


<body>
	<form id="registration" action="#" method="POST">
		<h3>Update User</h3>
		<input type="text" placeholder="Username" name="username" 
		value="<?php echo $row["user_username"]; ?> "><br/><br/>
		<input type="text" placeholder="First name" id="Name" name="firstname" onkeyup="testName()"
		value="<?php echo $row["user_firstname"]; ?>"><br/>
		<span id="NameError"></span><br/>
		<input type="text" placeholder="Last name" id="LastName" name="lastname" onkeyup="testLastName()"
		value="<?php echo $row["user_lastname"]; ?>"><br/>
		<span id="LastNameError"></span><br/>
		<input type="text" placeholder="Email" id="Email" name="email" onkeyup="testEmail()"
		value="<?php echo $row["user_email"]; ?>"><br/>
		<span id="EmailError"></span><br/>
		<input type="text" placeholder="Phone" id="Phone" name="phone" onkeyup="testPhone()"
		value="<?php echo $row["user_phone"]; ?>"><br/>
		<span id="PhoneError"></span><br/>
		<input type="text" placeholder="Password" id="Password" name="password" onkeyup="testPassword()"
		value="<?php echo $row["user_password"]; ?>"><br/>
		<span id="PasswordError"></span><br/>
		
		<button type="submit" id="updateBtn" name="updateBtn" class="buttons">Update</button>
	</form>
</body>
</html>
