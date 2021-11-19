<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
    <title>Geoff's Art Shop</title>
        <link rel="stylesheet" href="CSS/register.css">
        <link rel="stylesheet" href="CSS/frontpage.css">
        <link rel="shortcut icon" type="image/ico" href="/images/favicon.ico">
    </head>
    <!--Buttons on top navigation bar-->
    <div class="topnav">
      <a href="index.php" class="logo">Geoff's Art Emproium</a>
        <a class="active" href="index.php">Home</a>
        <a href="#allprints">All Prints</a>
        <a href="#basket">Basket</a>
        <a href="#contactus">Contact Us</a>
      <div class="topnav-right">
        <a class="active" href="register.php">Register</a>
      </div>
    </div>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
</body>
</html>