<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
  </head>
  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="t_pdt";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";
$sql ="SELECT * FROM product_test"; 
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { 
    while ($row = mysqli_fetch_array($result)) 
	{ 
    echo "pdt_ID: " . $row['product_id'] . "pdt_name: " . $row['product_name'] ."pdt_price: " . $row['product_price'] ."Description: " . $row['p_description'] ." PIC = <img src='" . $row['img_link'] . "'>";        
	echo "<br>";
   } 
  } 
else{ 
	echo "No matching records are found."; 
	}
?> 
  </body>
</html>