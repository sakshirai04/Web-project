<!DOCTYPE html>
<html>
<head>
    <title>sign up</title>
</head>
<body>
<?php 

include_once("config.php");

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id='$id' ");
$res = mysqli_fetch_array($result); 
$name = $res['name'];
echo $name;

?>


</body>
</html>