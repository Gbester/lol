<?php include 'header.php';
session_start()?>
<!DOCTYPE html>
<html>
  <body>
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
              <img src="https://lh3.googleusercontent.com/w48o_BDwtH3GIEOa_4FY1vcz2ULOzE27SutXucFoW-J6JKbcWmuw8r1RkI3QjdpZu6sMLW-da75_h83g_2_Jq0mk2kyK0OgtAz4xKKV8bifs7TyK91AA_STsCdi8U0jHXnvYl2Dj" alt="Mountain Range" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;">
            </div>
      
            <div class="item">
              <img src="https://avatars.githubusercontent.com/u/591076?v=4" alt="Geoff" style="width:auto;height:650px;margin-left: auto;
              margin-right: auto;">
            </div>
          
            <div class="item">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRc0oWY_wAZ-OZ0N73gkVZ7Y9xkrnEvIVobi71oIIHYpGVD6BPpmozmNRtQbgX2DyiI1pA&usqp=CAU" alt="Tree" style="width:auto;height:650px;margin-left: auto;
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
    </body>
    

</html>