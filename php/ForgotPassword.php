
<?php
include_once("config.php");
//php mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailerAutoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if(isset($_POST['Submit'])){
	$error = 0;
	$username = $_POST['username'];
	$email = $_POST['email'];
	$reemail = $_POST['reemail'];

}

$query = "SELECT * FROM users WHERE user_username = '$username'";
$result = mysqli_query($conn,$query);


$row=mysqli_fetch_assoc($result);
if (!empty($row)){


	if ($row["user_email"] == $email && $email == $reemail){
		echo "<h3 style='color:red; text-align:center;'>Hello ".$username." :)<br/>";
		$randomString = '';
		function generateRandomString($length = 12) {
			$characters = '0123456789abcdefghijkmnpqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ';
			global $randomString;
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, strlen($characters) - 1)];
			}
			return $randomString;
		}
		generateRandomString();
		$query = "UPDATE users SET user_token='$randomString' WHERE user_email='$email'";
		$result = mysqli_query($conn,$query);
		$url = "http://localhost/studentlounge/php/17FfDe42Sem/resetPassword.php?token=$randomString";


	}
	else {
		echo "<h3 style='color:red; text-align:center;'>Wrong Password."."<br/>";
		header( "Refresh:5; url=../index.php");
		die();
	}
}else{
	echo "<h3 style='color:red; text-align:center;'>Συμπλήρωσε τα πεδία.."."<br/>";
	header( "Refresh:5; url=../index.php");
	die();
}






function activatePhpMailer(){
	global $error;
	if ($error == 0){
		global $email;
		global $username;
		global $url;
//create new PHPMailer instance
		$mail = new PHPMailer;
		$mail -> isSMTP();
		$mail -> SMTPDebug=0;
		$mail -> Host = "titan.indns.gr";
		$mail -> Port = 465;
		$mail -> SMTPAuth = true; 
		$mail -> SMTPSecure = true;
		$mail -> Username = "info@antonioschalas.gr"; 
		$mail -> Password = "Woz1961Wine";
		$mail -> setFrom("info@antonioschalas.gr");
		$mail -> AddAddress("$email","$username");
		$mail -> Subject="Password Recovery";
		$mail -> msgHTML("$url");

		if(!$mail->send()){
			echo "<h1 style='color:red; text-align:center;'>Mailer error: ".$mail->ErrorInfo;
			header( "Refresh:10; url=../index.php");
			exit;
		}else{
			echo "<h1 style='color:red; text-align:center;'>An email with a password recovery link has been sent to your mailbox.!"."<br/>";
			header( "Refresh:10; url=../index.php");
			exit;


		}


	}else {echo "<h1 style='color:red; text-align:center; border-bottom:2px solid red;'>Sorry an error appeared,please check the fields again."."<br/>";
	header( "Refresh:10; url=../index.html");}
}

activatePhpMailer();

?>