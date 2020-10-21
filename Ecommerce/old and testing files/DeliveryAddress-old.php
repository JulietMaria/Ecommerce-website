<?php include_once("db_connect.php"); ?>
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
    padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
    float: left;
    width: 75%;
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
<title>Delivery Address</title>
<body>

<h2>Delivery Address</h2>
<div class="container">
  <div class="row">
    <div >
 
    </div>
    <div class="column">
      <form action="DeliveryAddress.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
		
        <label for="lname">Last Name</label>
		<input type="text" id="lname" name="lastname" placeholder="Your last name..">
		
		<label for="mob">Mobile no</label>
        <input type="text" id="mob" name="mobno" placeholder="Your mob no..">
		
		<label for="email">Email-id</label>
        <input type="text" id="email" name="email-id" placeholder="Your email id..">
        
        <label for="country">Country</label>
        <select id="country" name="country">
		 <option value="select">Select..</option>
		  <option value="india">India</option>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>

        <label for="pincode">Pincode</label>
        <input type="text" id="pincode" name="pincode" placeholder="Your pincode ..">

        <label for="landmark">Landmark</label>
        <input type="text" id="landmark" name="landmark" placeholder="Your landmark ..">
		
        <label for="Address">Address</label>
        <textarea id="Address" name="Address" placeholder="Your Address.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
<?php
  if (isset($_POST["firstname"]))
   {
      
    $fname = $_POST['firstname'];
    if (empty($fname)) 
    { 
    array_push($errors, "This field is required"); 
    echo $errors;
    }
    
   }
  

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $mob = $_POST['mobno'];
    $email = $_POST['email-id'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];
    $landmark = $_POST['landmark'];
    $Address = $_POST['Address'];

    $insertDeliveryAddress = "INSERT INTO deliveryaddress(fname, lname, mob, email,
    country, pincode,landmark, address)
    VALUES('".$fname."','".$lname."','".$mob."','".$email."','".$country."',
    '".$pincode."','".$landmark."','".$Address."')";
    mysqli_query($conn, $insertDeliveryAddress) or die("database error: ".mysqli_error($conn));

    $lastInsertId = mysqli_insert_id($conn);
    if($lastInsertId)
    {
       header("Location: http://localhost/pay.php"); 
    }

}


?>
</body>
</html>
