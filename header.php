<?php 

session_start();
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
?>
    <head>
      <!--Scripts and title-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Geoff's Art Shop</title>
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

    <?php if (!isset($_SESSION['success'])) { ?>
      <div class="topnav-right">
        <a class="active" href="login.php">Log In</a>
        <a class="active" href="register.php">Register</a>
      </div>
    <?php } else {?>
        <div class="topnav-right">
        <a class="active" href="index.php?logout='1'">Log out</a>
    </div>
        <?php }?>
    </div>
   


