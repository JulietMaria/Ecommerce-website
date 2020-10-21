<?php  
include('server.php')
//$_SESSION['current_page'] ='http://localhost/comp.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/search.css" /> 
    <title>Computer & accessories</title> 
	<style>
	
	.column {
    float: left;
    width:25%;
	  padding: 0px 0px 40px 30px ;
    }

	* {
  box-sizing: border-box;
}
.header h1 {
    font-size: 40px;
}

.zoom {
    padding: 10px;
   /* background-color: green; */
    transition: transform .1s;
    width: 200px;
    height: 200px;
   /* margin: 0 auto; */
}

.zoom:hover {
    -ms-transform: scale(0.5); /* IE 9 */
    -webkit-transform: scale(1.5); /* Safari 3-8 */
    transform: scale(1.2); 
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
  padding: 7px 15px;
  font-size: 14px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4286f4;
  border: none;
  border-radius: 8px;
  box-shadow: 0 5px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
  .righttxt{
    float: right;
    color:  #FFD700;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 19px;
    }
</style>
  </head>
  <body>
  <form action="" method="POST">
  <header></header>
 <div class="wrap">
   <div class="search">
      <input type="text" name="searchtxt" id="searchtxt" class="searchTerm" placeholder="What are you looking for?">
      <button type="submit" name="submit" class="searchButton">
        <i class="fa fa-search"></i>
      </button>
   </div>
</div>  
  <div class="header"> <a href="ecommerce.php">
  <?php
    echo "<img src='images/logo_omm.png' height='40' width='200' alt='Logo'/>";
?></a>
<!-- <center><h3>Computer & accessories</h3></center> -->
<!--    <p align="right"><a href="register.php">Login/Register</a></p> -->
<?php   

 if (isset($_SESSION['username'])) : { ?>
		<p align="right">Welcome <strong>
		<?php echo $_SESSION['username']; ?>. <a href="logout.php?logout='1'" style="color: red;"> logout</a>
		</strong></p>
		<!-- <p align="right"><a href="logout.php?logout='1'" style="color: red;">logout</a></p> -->
		<?php } ?> 
	<?php endif ?>
  <?php if (!isset($_SESSION['username'])) : { ?>	
	  <p align="right"><a href="register.php">Register/</a>
	  <a href="login.php">Login</a></p> 
		<?php	} ?>
	<?php endif ?>   
<div class="topnav">
 <a href="mob.php">Mobile & accessories</a>
 <a href="comp.php">Computer & accessories</a>
 <a href="ent.php">Entertainment devices</a>
 <div class="righttxt">Computer & Accessories</div>
</div>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="ecommerce";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<br>";
$sql ="SELECT * FROM productdetails WHERE category='comp'"; 
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) { 
  while ($row = mysqli_fetch_array($result)) { 
	?>
      <div>
       <div class="column" >
      <div class="zoom">
	  <a href="pdt_des.php?pid=<?php echo $row['product_id']; ?>">
      <?php
	 
		echo "<img src='" . $row['img_link'] . "'>";
		
			 echo "<br>";
			 echo $row['product_name'] ;
			 echo "<br>";
			 echo "Price: " . $row['product_price'];
        	?>
	   </a>
       </div>
      <br><br>
   <!--    <button class="button" type="submit">Add to Cart!</button>
      <button class="button" type="submit">Check out</button> -->
	
  
      </div>
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
 <p><a href="contact.php">Contact us</a>|<a href="support.php">Support</a>| © copyright OnlineMegaMall.Pvt.Ltd</p>
</div>
</body>
</html>