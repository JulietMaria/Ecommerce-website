<?php
session_start();

// initializing variables
$username = "";
$email ="";
$acnt_no ="";
$address ="";
$phone ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

// REGISTER USER
if (isset($_POST['customer'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $acnt_no = mysqli_real_escape_string($db, $_POST['acnt_no']);
  $address= mysqli_real_escape_string($db, $_POST['address']);

  $phone= mysqli_real_escape_string($db, $_POST['phone']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phone)) { array_push($errors, "Phone Number is required"); }
  if (empty($address)) {
	array_push($errors, "Address is required");
  }

  if (empty($acnt_no)) {
	array_push($errors, "Account Number is required");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
 

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	
  	$query = "INSERT INTO customer (Username, Accnt_no, Address, email ,phone) 
  			  VALUES('$username', '$acnt_no', '$address', '$email', '$phone')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Your Account Details are now registered Successfully";
  	header('location: cart.php');
  }
}




?>