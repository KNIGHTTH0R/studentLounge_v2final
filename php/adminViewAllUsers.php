<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/adminpanel.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<?php 
	include_once("config.php"); 
	include_once("../includes/adminHeader.php");
	


	?>
	<table align="center">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Password</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Type</th>
			<th>Gender</th>
			<th>Date Of Birth</th>
			<th>Edit</th>
			<th>Delete</th>
			<?php showUsers(); ?>
		</tr> 
	</table>
</body>
</html>
<?php

function showUsers(){

	global $conn;
	$query = "SELECT * FROM users";
	$result = mysqli_query($conn,$query);
	$returnMessage = "";

	while($row=mysqli_fetch_assoc($result)){

		$returnMessage.='<tr>';
		$returnMessage.='<th>'.$row["user_ID"].'</th>';
		$returnMessage.='<th>'.$row["user_username"].'</th>';
		$returnMessage.='<th>'.$row["user_firstname"].'</th>';
		$returnMessage.='<th>'.$row["user_lastname"].'</th>';
		$returnMessage.='<th>'.$row["user_password"].'</th>';
		$returnMessage.='<th>'.$row["user_email"].'</th>';
		$returnMessage.='<th>'.$row["user_phone"].'</th>';
		$returnMessage.='<th>'.$row["user_type"].'</th>';
		$returnMessage.='<th>'.$row["user_gender"].'</th>';
		$returnMessage.='<th>'.$row["user_dateofbirth"].'</th>';
		$returnMessage.='<th><a href="adminEditThisUser.php?id='.$row["user_ID"].'"><img src="../images/edit.png" alt="edit" width="25px"></a></th>';
		$returnMessage.='<th><a href="adminDeleteThisUser.php?id='.$row["user_ID"].'"><img src="../images/delete.png" alt="delete" width="25px"></a></th>';
		$returnMessage.='</tr>';



	}
	echo $returnMessage;

}




?>