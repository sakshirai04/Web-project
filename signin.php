<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$res_email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$res_password = mysqli_real_escape_string($mysqli, $_POST['password']);

	if(empty($res_email) || empty($res_password)){
		if(empty($res_email)) {
			echo "<font color='red'>Email-Id field is empty.</font><br/>";
		}

		if(empty($res_password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}

		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}	
		
	else{
		$result = mysqli_query($mysqli, "SELECT id FROM customer WHERE email='$res_email' and password ='$res_password' ");
		$res = mysqli_fetch_array($result);
		$id = $res['id'];

		if ($res['id']) {
			//header("location: signup.html" );
			header("location: product1.php?id=".$id );
		}

		else{
			echo "<font color='red'>Entered Email-Id or Password is invalid.</font><br/>";
			echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
		}
		
	}	

}

?>
