<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <!--Scripts and title-->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          <title>Geoff's Art Shop</title>
          <link rel="stylesheet" href="CSS/frontpage.css">
          <link rel="shortcut icon" type="image/ico" href="/favicon.ico">
      </head>
      <!--Buttons on top navigation bar-->
      <div class="topnav">
        <a href="index.php" class="logo">Geoff's Art Emproium</a>
          <a class="active" href="index.php">Home</a>
          <a href="#allprints">All Prints</a>
          <a href="#basket">Basket</a>
          <a href="#contactus">Contact Us</a>
          <a href="forms.html">Add </a>
        <div class="topnav-right">
          <a class="active" href="#signout">Sign Out</a>
        </div>
      </div>
    <form >
        <div class="artistform">
            <label for="first_name" class="artistform_label">Artist's First name</label>
            <input type="firstname" class="artistform_control" id="artistfirstnameinput" aria-describedby="firstnamehelp">
        </div>
        <div class="artistform">
            <label for="middle_name" class="artistform_label">Artist's Middle name</label>
            <input type="middlename" class="artistform_control" id="artistmiddlenameinput" aria-describedby="middlenamehelp">
        </div>
        <div class="artistform">
            <label for="last_name" class="artistform_label">Artist's Last name</label>
            <input type="lastname" class="artistform_control" id="artistlastnameinput" aria-describedby="lastnamehelp">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
</html>