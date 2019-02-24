<?php
include_once("config.php");
session_start();
$fileExistsFlag = 0; 
$fileName = $_FILES['fileToUpload']['name'];
$username = $_SESSION["username"];
// Check whether the file already exists in the destination folder

$query = "SELECT * FROM users WHERE user_username = '$username'";
$result = $conn->query($query) or die ("Error : ".mysqli_error($conn));


//if file is not present in the destination folder 

if($fileExistsFlag == 0) {
	$target = "../images/";
	$fileTarget = $target.$fileName;
	$tempFileName = $_FILES["fileToUpload"]["tmp_name"];
	$result = move_uploaded_file($tempFileName,$fileTarget);

//If file was succesfully uploaded in the destination folder	

	if($result){
		global $fileTarget;
		echo "Your file <html><b><i>".$fileName."</i></b></html> has beeen succesfully uploaded";
		$query = "UPDATE users SET  user_profile = '$fileTarget' WHERE user_username = '$username'";
		$conn->query($query) or die("Error : ".mysqli_error($conn));
		echo $username;
	}
	else{
		echo "Sorry,There was an error in uploading your file";
	}
	mysqli_close($conn);
}
//If file is already in the destination folder
else{
	echo "File <html><b><i>".$fileName."</i></b></html> already exists in your folder.Please rename the file and try again.";
	mysqli_close($conn);
}



