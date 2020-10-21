<?php include('acc_server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Customer Details</title>
  <link rel="stylesheet" type="text/css" href="puvi.css">
  <script type="text/javascript">
    function Validate() {
        var phonenumber= document.getElementById("phone").value;
       
        if (phonenumber >9) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
	function validateForm() {
  var x = document.forms["myForm"]["email"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Not a valid e-mail address");
    return false;
  }
}
</script>
</head>
<body>
  <div class="header">
  	<h2>Customer Details</h2>
  </div>
	
  <form name="myForm" method="post" action="account.php" onsubmit="return validateForm();">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" placeholder="Enter name" value="<?php echo $username; ?>" required/>
  	</div>
	<div class="input-group">
  <label>Account Number</label>
  	  <input type="Acnt_no" name="acnt_no" placeholder="Enter Account Number"value="<?php echo $acnt_no; ?>"  required/>
  	</div>
  	<div class="input-group">
  	  <label>Phone Number</label>
  	  <input type="Phone" name="phone" placeholder="Enter phone Number"value="<?php echo $phone; ?>" required/>
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="Address" name="address" placeholder="Enter Address"value="<?php echo $address; ?>" required/>
  	</div>
<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter email id" value="<?php echo $email; ?>" required/>
  	</div>
	
  	  
	
  	<div class="input-group">
  	  <button type="submit" class="btn" name="customer">Submit</button>
  	</div>
  	
  </form>
</body>
</html>
