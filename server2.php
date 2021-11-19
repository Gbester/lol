<?php
session_start();

//variables
$firstname = "";
$middlename = "";
$lastname = "";
$errors = array();

//connect to database

$db = mysqli_connect('localhost','gerard','Rgre0608201','ecommerce2');

//user registration
  
if (isset($_POST['artist_user'])) {
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $middlename= mysqli_real_escape_string($db, $_POST['middlename']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  
  
  //form validation
  
  if (empty($firstname)) { array_push($errors, "First name is required"); }
  if (empty($middlename)) { array_push($errors, "Middle name is required");}
  if (empty($lastname)) { array_push($errors, "Last name is required");}


  
  // valdiating user from database
  //$user_check_query = "SELECT * FROM artist WHERE username ='$username' OR email='$email' LIMIT 1";
  //$result = mysqli_query($db, $user_check_query);
  //$user = mysqli_fetch_assoc($result);
  
  //if ($user) {
   // if ($user['username'] === $username) {
    //  array_push($errors, "Username already exists");
    //}
    
    //if ($user['email'] === $email) {
     // array_push($errors, "Email already exists");
   // }
 // }
  
  //registers the user if no errors

  if (count($errors) == 0) { 
    $query = "INSERT INTO artists (first_name,middle_name,last_name) 
    VALUES('$firstname','$middlename','$lastname')";
    mysqli_query($db,$query);
    header('location: artist.php');
  }
}