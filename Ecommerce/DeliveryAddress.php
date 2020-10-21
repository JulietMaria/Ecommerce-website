<?php include_once("db_connect.php"); ?>
<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

body{
background-color: #d9f3fb  ;
}

/* Style inputs */
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Style the container/contact section */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 5px;
}

/* Create two columns that float next to eachother */
.column {
    float: center;
    width: 50%;
     margin-top: 1px;
    padding: 10px;
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
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #a0c5ed ; 
   text-align: center;
}
</style>
<script type="text/javascript">
function allowNumbersOnly(e) {
    var code = (e.which) ? e.which : e.keyCode;
    if (code > 31 && (code < 48 || code > 57)) {
        e.preventDefault();
    }
}
</script>
</head>
<title>Delivery Address</title>
<body>
<h3>Delivery Address</h3>
<?php   
 if (isset($_SESSION['username'])) : { ?>
    <p align="right"> <strong>Welcome 
        <?php echo $_SESSION['username']; ?>&nbsp;&nbsp;</strong><a href="logout.php?logout='1'" style="color: red;">logout</a></p>
        <?php } ?> 
    <?php endif ?>
<?php if (!isset($_SESSION['username'])) : { ?> 
  <p align="right"><a href="register.php">Register/</a>
  <a href="login.php">Login</a></p> 
    <?php   } ?>
<?php endif ?>

<div class="container">
  <div class="row">
    <div >
 
    </div>
    <div class="column">
      <form action="DeliveryAddress.php" method="POST">
<?php
    if (!isset($_SESSION['username']))
    {
        header("Location: http://localhost/login.php");
    }
    else
    {
        $username=$_SESSION['username'];
        $country= 'India';
        $query = "select * from deliveryaddress where username='" . $username . "'"; 
        $result=mysqli_query($conn, $query) or die("database error: ".mysqli_error($conn));
        if (!$result) {
            die('Invalid query: ' . mysql_error());
        }
            $firstname= "";
            $lastname= "";
            $mobileno= "";
            $emailid= "";
            $country= "";
            $pincode= "";
            $landmark= "";
            $address= "";
        while($row=mysqli_fetch_assoc($result))
        {
            $firstname= $row['fname'];
            $lastname= $row['lname'];
            $mobileno= $row['mobileno'];
            $emailid= $row['email'];
            $country= $row['country'];
            $pincode= $row['pincode'];
            $landmark= $row['landmark'];
            $address= $row['address'];
         }
    }
?>      
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.." required value="<?php echo $firstname?>" />

        <label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name.." required value="<?php echo $lastname?>"/>
		
		<label for="mobileno">Mobile no</label>
        <input type="text" id="mobileno" name="mobileno" value="<?php echo $mobileno?>" placeholder="Your mob no.." maxlength="10" required 
        onkeypress="allowNumbersOnly(event)"/>
		 
		<label for="email">Email-id</label>
        <input type="text" id="email" name="email-id" placeholder="Your email id.." required value="<?php echo $emailid?>"/>
        
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="<?php echo $country?>" selected='selected'><?php echo $country?></option>
		  <option value="india">India</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>

        <label for="pincode">Pincode</label>
        <input type="text" id="pincode" name="pincode" value="<?php echo $pincode?>" placeholder="Your pincode .." maxlength="6" required 
        onkeypress="allowNumbersOnly(event)"/>

        <label for="landmark">Landmark</label>
        <input type="text" id="landmark" name="landmark" placeholder="Your landmark .." required  value="<?php echo $landmark?>"/>
		
        <label for="Address">Address</label>
        <textarea id="Address" name="Address" placeholder="Your Address.." style="height:170px"/>
        <?php echo $address?>
        </textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
                $username=$_SESSION['username'];
                $fname = $_POST['firstname'];
                $lname = $_POST['lastname'];
                $mobileno = $_POST['mobileno'];
                $email = $_POST['email-id'];
                $country = $_POST['country'];
                $pincode = $_POST['pincode'];
                $landmark = $_POST['landmark'];
                $Address = $_POST['Address'];
            $username=$_SESSION['username'];
            $query = "select * from deliveryaddress where username='" . $username . "'"; 
            $result=mysqli_query($conn, $query) or die("database error: ".mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) 
            {
                //die('Invalid query: ' . mysql_error());
               $UpdateDeliveryAddress = "UPDATE deliveryaddress SET fname='".$fname."', lname='".$lname."',mobileno='".$mobileno."',
               email='".$email."',country='".$country."', pincode='".$pincode."',landmark='".$landmark."', address='".$Address."' where username='" . $username . "'"; 
               //echo $UpdateDeliveryAddress;
               mysqli_query($conn, $UpdateDeliveryAddress) or die("database error: ".mysqli_error($conn));
                //if ($conn->query($UpdateDeliveryAddress) === TRUE) {
                header("Location: http://localhost/pay.php");
            }
            else
            {
                $insertDeliveryAddress = "INSERT INTO deliveryaddress(username,fname, lname, mobileno, email,
                country, pincode,landmark, address)
                VALUES('".$username."','".$fname."','".$lname."','".$mobileno."','".$email."','".$country."',
                '".$pincode."','".$landmark."','".$Address."')";
                //echo $insertDeliveryAddress ;
                mysqli_query($conn, $insertDeliveryAddress) or die("database error: ".mysqli_error($conn));

                $lastInsertId = mysqli_insert_id($conn);
                if($lastInsertId)
                {
                    header("Location: http://localhost/pay.php"); 
                }
            }

        }
   
   
?>
<br/>
<br/>
<div class="footer">
 <p><a href="contact.php">Contact us</a>|<a href="support.php">Support</a>| © copyright OnlineMegaMall.Pvt.Ltd</p>
</div>
</body>
</html>
