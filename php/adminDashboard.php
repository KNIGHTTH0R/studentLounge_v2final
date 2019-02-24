<?php 
SESSION_start();
if (!isset($_SESSION['type'])){
	header("Location:../index.php");

}
?>
<body>
	<?php include("../includes/adminHeader.php")?>

</body>
</html>