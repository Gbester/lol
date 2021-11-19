<?php include 'header.php';
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