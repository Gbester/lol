<?php session_start()?>
<!DOCTYPE html>
<html>
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
      <a href="homepage.php" class="logo">Geoff's Art Emproium</a>
        <a class="active" href="homepage.php">Home</a>
        <a href="#allprints">All Prints</a>
        <a href="#basket">Basket</a>
        <a href="#contactus">Contact Us</a>
      <div class="topnav-right">
        <a class="active" href="a href="index.php?logout='1'>Log out</a>
      </div>
    </div>
 	<!-- notification message -->
     <?php if (isset($_SESSION['success'])) { ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php } ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) { ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php } ?>
    <div class="container">
        <h2>Featured Prints</h2>  
        <div id="Featuredslides" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#Featuredslides" data-slide-to="0" class="active"></li>
            <li data-target="#Featuredslides" data-slide-to="1"></li>
            <li data-target="#Featuredslides" data-slide-to="2"></li>
          </ol>

      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="https://static.contrado.com/DesignTemplates/products/25572_crosshatch-sky-art-prints_0.jpeg?cache=9" alt="Mountain Range" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;">
            </div>
      
            <div class="item">
              <img src="https://avatars.githubusercontent.com/u/591076?v=4" alt="Geoff" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;">
            </div>
          
            <div class="item">
              <img src="https://fydn.imgix.net/m%2Fgen%2Fart-print-std-landscape-framed-white%2F3eadb130-ae0c-48e4-a8f0-3ef47a4a8afe.jpg?auto=format%2Ccompress&q=75" alt="Tree" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#Featuredslides" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#Featuredslides" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</html>