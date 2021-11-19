<?php include('server.php');
include 'header.php';?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/register.css">
</head>
<html>
  <body>
    <div class="header">
      <h2>Register</h2>
    </div>
    <div class="mx-auto">
    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" Value="<?php echo $username;?>">
        </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email;?>">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
      </div>
      <div class="input-group">
        <label>Confirm Password</label>
        <input type="password" name="password_2">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
      </div>
     </form>
    </div>
  </body>
  </html>
      
      
        
     