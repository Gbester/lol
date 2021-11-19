
<?php include 'header.php';?>
<!DOCTYPE html>
<html>
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