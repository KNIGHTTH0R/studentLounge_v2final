<?php
include_once("config.php");
session_start();
$fileExistsFlag = 0; 
$fileName = $_FILES['fileToUpload']['name'];

// Check whether the file already exists in the destination folder

$query = "SELECT * FROM posts WHERE post_image = '$fileName'";
$result = $conn->query($query) or die ("Error : ".mysqli_error($conn));


//if file is not present in the destination folder 

if($fileExistsFlag == 0) {
	$target = "../images/";
	$fileTarget = $target.$fileName;
	$tempFileName = $_FILES["fileToUpload"]["tmp_name"];
	$title = $_POST["title"];
	$description = $_POST["description"];
	$by =  $_SESSION["username"];
	$result = move_uploaded_file($tempFileName,$fileTarget);

//If file was succesfully uploaded in the destination folder	

	if($result){
		echo "Your file <html><b><i>".$fileName."</i></b></html> has beeen succesfully uploaded";
		$query = "INSERT INTO posts (post_title,post_image,post_description,post_author)
		VALUES ('$title','$fileTarget','$description','$by')";
		$conn->query($query) or die("Error : ".mysqli_error($conn));
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





