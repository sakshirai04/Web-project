<?php
include_once("config.php");
$name=$_POST['name'];
$result = mysqli_query($mysqli, "SELECT * FROM product1 where name='$name' ");



?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>


	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Mobile</td>
		<td>Shoes</td>
		<td>Brand</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['mobile']."</td>";
		echo "<td>".$res['shoes']."</td>";	
		echo "<td>".$res['brand']."</td>";		
	}
	?>
	</table>
</body>
</html>
