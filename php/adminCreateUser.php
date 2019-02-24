<html>
<head>
	<?php include("../includes/adminHeader.php")?>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/adminpanel.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div id="register">
		<form id="registration" action="DoRegistration.php" method="POST">
			<h3>Create User</h3>
			<input type="text" placeholder="Username" name="username"><br/><br/>

			<input type="text" placeholder="First name" id="Name" name="firstname" onkeyup="testName()"><br/>
			<span id="NameError"></span><br/>
			<input type="text" placeholder="Last name" id="LastName" name="lastname" onkeyup="testLastName()"><br/>
			<span id="LastNameError"></span><br/>
			<input type="text" placeholder="Email" id="Email" name="email" onkeyup="testEmail()"><br/>
			<span id="EmailError"></span><br/>
			<input type="text" placeholder="Phone" id="Phone" name="phone" onkeyup="testPhone()"><br/>
			<span id="PhoneError"></span><br/>
			<input type="password" placeholder="Password" id="Password" name="password" onkeyup="testPassword()"><br/>
			<span id="PasswordError"></span><br/>
			<input type="password" placeholder="Re-password" id="Password" name="repassword" onkeyup="testPassword()"><br/>
			<span id="PasswordError"></span>


			<br/><button type="submit" class="buttons">Register</button>
		</form>
	</body>
	</html>