<?php 
include_once("config.php"); 
$id = $_GET['id'];

$sql = "DELETE FROM users WHERE user_ID='$id'";

if ($conn->query($sql) === TRUE) {
	header("Location:adminViewAllUsers.php");
} else {
	echo "Error deleting record: " . $conn->error;
}

?>