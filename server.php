<?php
session_start();

//variables
$username = "";
$email = "";
$errors = array();

//connect to database

$db = mysqli_connect('localhost','gerard','Rgre0608201','ecommerce2');

//user registration
  
if (isset($_POST['reg_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  
  
  //form validation
  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required");}
  if (empty($password_1)) { array_push($errors, "Password is required");}
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }
  
  // valdiating user from database
  $user_check_query = "SELECT * FROM customers WHERE username ='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) {
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
    
    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }
  
  //registers the user if no errors
  if (count($errors) ==0) {
    $password = md5($password_1); //encrypts
     
    $query = "INSERT INTO customers (username,password,email) 
    VALUES('$username','$password','$email')";
    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "Account Created";
    header('location: login.php');
}
}
// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM customers WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: homepage.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
    