<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>ADD CUSTOMER</h2>
  </div>

  <form method="post" action="customer_details.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="address" value="<?php echo $address; ?>">
  	</div>
    <div class="input-group">
  	  <label>Contact 1</label>
  	  <input type="text" name="contact_1" value="<?php echo $contact_1; ?>">
  	</div>
    <div class="input-group">
  	  <label>Contact 2</label>
  	  <input type="text" name="contact_2" value="<?php echo $contact_1; ?>">
  	</div>
  	<div class="input-group">
  	  <input type="submit" name="aadd" value="ADD">
  	</div>
  </form>
</body>
</html>
