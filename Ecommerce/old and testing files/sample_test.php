<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

  </head>
  <body>
<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 't_pdt');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

session_start();
$sql = mysql_query("SELECT product_id,product_name,product_price,p_description,img_link  FROM product_test"); 
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    while ($row = mysql_fetch_array($result)) { 
    echo "pdt_ID: " . $row[0] . "pdt_name: " . $row[1] ."pdt_price: " . $row[2] ."Description: " . $row[3] ." PIC = <img src='" . $row[4] . "'><hr>";        

   } 
    mysql_free_result($result); 
?> 

  </body>
</html>