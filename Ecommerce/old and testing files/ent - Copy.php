<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Entertainment Devices</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<style>
	
	.column {
    float: left;
    width:25%;
	padding: 0px 0px 40px 30px ;
}

	* {
  box-sizing: border-box;
}
.zoom {
    padding: 50px;
   /* background-color: green; */
    transition: transform .1s;
    width: 200px;
    height: 200px;
   /* margin: 0 auto; */
}

.zoom:hover {
    -ms-transform: scale(1.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.5); 
}

.topnav {
    background-color: #00008B  ;
    overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
 
html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
  background-color: #d9f3fb;
  font-family: 'Roboto', sans-serif;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #a0c5ed ;
   
   text-align: center;
}

/*.shopping-cart {
  width: 750px;
  height: 423px;
  margin: 80px auto;
  background: #FFFFFF;
  border-radius: 6px;
 }*/
 .button {
  display: inline-block;
  padding: 5px 10px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4286f4;
  border: none;
  border-radius: 6px;
  box-shadow: 0 3px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>
  </head>
  <body>

  <div class="header">
   <a href="ecommerce.php">
   <?php
    echo "<img src='images/Logo.png' height='80' width='80' alt='Logo'/>";
?></a>
   <p align="right"><a href="login1.html">Login/Register</a></p>
   
  <center><h1>Entertainment Devices</h1></center>

  <div class="topnav">
 <a href="mob.php">Mobile & accessories</a>
 <a href="comp.php">computer & accessories</a>
 <a href="entertainment.php">Entertainment devices</a>
 </div>
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
echo "<br>";
$sql ="SELECT * FROM product_test WHERE category='ent'"; 
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { 
  while ($row = mysqli_fetch_array($result)) { 
	?>
    <div>
    <div class="column" >
    <div class="zoom">
	<a href="pdt_des.php">
	      <?php
		echo "<img src='" . $row['img_link'] . "'>";
      	echo "<br>";
      	echo $row['product_name'] ;
      	echo "<br>";
      	echo "Price: " . $row['product_price'];
      	echo "<br>";
       ?>
 	 </a>
     </div>
      <br><br>
      <button class="button" type="submit">Add to Cart!</button>
      <button class="button" type="submit">Check out</button>
      </div>
      </div>

<?php
 } 
  } 
else{ 
	echo "No matching records are found."; 
	}
?> 
<div class="footer">
 <p><a href="contact.php">Contact us</a>|<a href="support.php">Support</a>| © copyright ABC.pvt.Ltd</p>
</div>
</body>
</html>