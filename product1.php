<?php
include_once("config.php");
     $conn=mysqli_connect('localhost','root','','customer');
if (mysqli_connect_errno()) {
   echo "error";
}
else
{

  echo "connected";
 
}
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $shoes=$_POST['shoes'];
     $brand=$_POST['brand'];
 
    $result = mysqli_query($mysqli, "INSERT INTO product1(name,mobile,shoes,brand) VALUES('$name','$mobile','$shoes','$brand')");
     header("location: search1.html " );

        }
 
?>
<!DOCTYPE html>
	<title>Shoes Details</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<html>
<head>
</head>


	<body>

		
	<form method="post" action="product1.php">
		<center><label><b> FORM</b></label></center>
		<br><br>
		
		<div class="form-group col-md-3">
			<label>NAME</label>
			<input type="text" name="name" class="form-control">
		</div><br><br>
		<div class="form-group col-md-3">
			<label>MOBILE NUMBER</label>
			<input type="number" name="mobile" class="form-control">
		</div><br><br>

		<div class="form-group col-md-3">
			<label>SHOES SIZES</label>
			<input type="number" name="shoes" class="form-control">
		</div><br><br>
		
		<div class="form-group col-md-3">
			<label>BRAND</label>
			<input type="text" name="brand" class="form-control">
		</div><br><br>

		<div>
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</div>

	
</div>
</form>

</body>
</html>