<?php include 'header.php';
   include 'server2.php';
?>
<head>
<link rel="stylesheet" type="text/css" href="CSS/register.css">
</head>
<html>
  <body>
    <div class="header">
      <h2>Add Artist</h2>
    </div>

    <div class="mx-auto">
    <form method="post" action="artist.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>First Name</label>
        <input type="text" name="firstname"  value="<?php echo $firstname;?>">
        </div>
      <div class="input-group">
        <label>Middle Name</label>
        <input type="text" name="middlename" value="<?php echo $middlename;?>">
      </div>
      <div class="input-group">
        <label>Last Name</label>
        <input type="text" name="lastname" value="<?php echo $lastname?>">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="artist_user">Add</button>
      </div>
     </form>
    </div>
  </body>
  </html>