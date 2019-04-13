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
	<form onsubmit="return validation()" name="inputform" method="POST" action="details.php">

		<input  class="textinput" type="text" name="fname" id="fname" placeholder="Enter Your First Name"
		autocomplete="off"><span id="fnameerror"> </span>

		<input  class="textinput" type="text" name="lname" id="lname" placeholder="Enter Your Last Name"
		autocomplete="off"><span id="lnameerror"> </span>

		<input  class="textinput" type="text" name="uname" id="uname" placeholder="Enter Your Username"
		autocomplete="off"><span id="unameerror"> </span>

		<input  class="textinput" type="email" name="email" id="email" placeholder="Enter Your Email"autocomplete="off"><span id="emailerror"> </span>

		<input  class="textinput" type="number" name="idnum" id="idnum" placeholder="Enter Your Id Number" autocomplete="off"><span id="idnumerror"> </span>

		<input  class="textinput" type="number" name="pnumber" id="pnumber" placeholder="Enter Your Phone Number"
		autocomplete="off"><span id="pnumbererror"> </span>

		<input  class="textinput" type="password" name="password" id="password" placeholder="Enter Your password"
		autocomplete="off"><span id="passworderror"> </span>

		<input  class="textinput" type="password" name="cpassword" id="cpassword" placeholder="Confirm Password"
		autocomplete="off"><span id="cpassworderror"> </span>

		<input  class="textinput" type="text" name="address" id="address" placeholder="Enter Your Address"
		autocomplete="off"><span id="addresserror"> </span>

		<button type="submit" name="register">Register</button>
	</form>
</div>
<div class="footer">
	<p>&copy;Copyrights iso certified ISO567890986543</p>
</div>
</body>

</html>