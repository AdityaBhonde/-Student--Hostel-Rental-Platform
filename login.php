<?php include('server.php') 

?>
<!DOCTYPE html>
<html>
<head>
  <title>OSTELLA</title>
  <link rel="stylesheet" type="text/css" href="style2.css">
  <style>
	  body {
    background: url(bglogin.jpg) no-repeat center center fixed;
    background-size: cover;
}

  </style>
</head>
<body>
  <div class="header">
  	<h2>Student Login</h2>
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
		  <a class="btn" href="admin_login.php" style:>Admin Login</a>
</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>