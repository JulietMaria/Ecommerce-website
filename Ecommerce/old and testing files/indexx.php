<?php include('server.php'); 
if(empty($_SESSION['username']))
{
header('location: Lgin.php');
}?>
<!DOCTYPE html>
<html>
session_start();
<head>
<title>
User registration
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
<h3>
Home page
</h3>
</div>
<div class="content">
<?php if(isset($_SESSION['success'])): ?>
<div class="error success">
<?php
echo $_SESSION['success'];
 function unset_value() 
      { 
          unset($_SESSION['success']); 
      } 
        
      unset_value(); 
?>
<?php endif ?>
<?php if(isset($_SESSION['username'])): ?>
<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
<a href="indexx.php?logout='1'" style="color: red">Logout</a> 
<?php endif ?>
</div>
</body>
</html>
