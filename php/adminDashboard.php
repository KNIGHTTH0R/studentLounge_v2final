<?php 
SESSION_start();
if (!isset($_SESSION['type'])){
	header("Location:../index.php");

}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/adminpanel.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<?php include("includes/adminHeader.php")?>

</body>
</html>