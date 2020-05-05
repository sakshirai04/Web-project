<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 

include_once("config.php");

if(isset($_POST['Submit'])) {	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$surname = mysqli_real_escape_string($mysqli, $_POST['surname']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$num = mysqli_real_escape_string($mysqli, $_POST['num']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$repassword = mysqli_real_escape_string($mysqli, $_POST['repassword']);

	if(empty($name) || empty($surname) ||empty($email) ||empty($num)|| empty($password) ||empty($repassword)){
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($surname)) {
			echo "<font color='red'>Surname field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email-Id field is empty.</font><br/>";
		}

		if(empty($num)) {
			echo "<font color='red'>Phone number field is empty.</font><br/>";
		}

		if(empty($password)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}

		if(empty($repassword)) {
			echo "<font color='red'>Re-Enter password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br><a href='javascript:self.history.back();'>Go Back</a>";
	} 

	elseif ($password == $repassword) {
		
			//insert data to database	
		
		$result = mysqli_query($mysqli, "INSERT INTO customer(name,surname,email,num,password) VALUES('$name','$surname','$email','$num','$password')");
		
		//display success message
		echo "<font color='green'>Sign up successful.";
		echo "<br><a href='signin.html'>Sign In</a>";
	}

	else { 
		echo "<font color='red'>Re-Entered password wrong.</font><br/>";
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";	
	}
	
}


?>

</body>
</html>