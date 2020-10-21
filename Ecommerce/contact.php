<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
   
    <title>Contact Us</title>
    <style>
	.topnav {
    background-color: #00008B;
    overflow: hidden;
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

.header h1 {
    font-size: 40px;
}
/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    font-size: 20px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 50%;
    margin-top: 6px;
    padding: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column, input[type=submit] {
        width: 100%;
        margin-top: 0;
    }
}
    </style>
  </head>
  <body>

  <div class="header">
  <div class="header">
 <a href="ecommerce.php">
 <?php
    echo "<img src='images/logo_omm.png' height='35' width='200' alt='Logo'/>";
?></a>
 <?php   
 if (isset($_SESSION['username'])) : { ?>
		<p align="right">Welcome <strong>
		<?php echo $_SESSION['username']; ?>
		</strong></p>
		<p align="right"><a href="logout.php?logout='1'" style="color: red;">logout</a></p>
		<?php } ?> 
	<?php endif ?>
<?php if (!isset($_SESSION['username'])) : { ?>	
	  <p align="right"><a href="register.php">Register/</a>
	  <a href="login.php">Login</a></p> 
		<?php	} ?>
	<?php endif ?>
 
 </div>
  
  <!-- <center><h1>Contact Us</h1></center> -->
 <div class="topnav">
 <a href="mob.php">Mobile & accessories</a>
 <a href="comp.php">computer & accessories</a>
 <a href="ent.php">Entertainment devices</a>
 </div>
 <div class="container">
  <div style="text-align:center">
  </div>
  <div class="row">
    <div class="column">
       <?php
      echo "<img src='images/ww13.png' height='250px' width='250px' alt='image'/>";
      ?>
    
        <div class="column">
         <?php
          echo "<img src='images/ww10.png' height='30' width='30' alt='image'/>";
        ?>
        <font color="black"><i><u>Mobile-No:</u></i></font><ul><li>   044-252546426        </li><li>  +91-9946888888     </li></ul><br>
        <?php
          echo "<img src='images/ww11.png' height='30' width='50' alt='image'/>";
        ?>
        <font color="black"><i><u>E-mail:</u></i></font><br><br>contactus@onlinemegamall.com<br><br>
      </div>
      </div>
  </div>

<div class="footer">
 <p><a href="contact.php">Contact us</a>|<a href="support.php">Support</a>| © copyright OnlineMegaMall.Pvt.Ltd</p>
</div>
  </body>
</html>