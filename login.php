<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	<title>contact us</title>
	<script type="text/javascript" src="validation.js">

	</script>
</head>
<body>
<div class="header">
	<marquee behaviour="scroll" direction="right" scroll-amount="5" onmouseover="this.stop()" onmouseout="this.start()">
		<h1>Welcome to "Feel at Home" vending Restaurant</h1>
	</marquee>
</div>
<div class="navbar">
	<ul>
		<li><a href="index.php">Home|</a></li>
		<li><a href="#">Contact Us|</a></li>
		<li><a href="#">Products</a></li>
		<li><a href="#">Menu</a></li>
		<li><a href="create.php">Create Account</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="students.php">Registered students</a></li>

	</ul>
</div>
<div class="mainbody">
	<h3>Sign Up Details</h3>
	<form method="POST">

		<input  class="textinput" type="text" name="user" id="fname" placeholder="Enter Name/Email"
		autocomplete="off" required="">

		<input  class="textinput" type="password" name="pass" placeholder="password"
		autocomplete="off" required="">
		<button type="submit" name="login">Log in</button>
	</form>
	<?php 
		include("processlogin.php");
	?>
</div>
<div class="footer">
	<p>&copy;Copyrights iso certified ISO567890986543</p>
</div>
</body>

</html>