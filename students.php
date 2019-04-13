<?php 
include('database.php');

?>
<?php
$query2 = "SELECT * FROM students";
$read =mysqli_query($conn, $query2);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	<title>contact us</title>
	<script type="text/javascript" src="validation.js"></script>
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
	<h4>Student Details</h4>
	<table style="background-color: green; opacity: 1.0; padding: 10px;" border="1" cellpadding="2" >
	<tr>
	   <th>FirstName</th>
	   <th>LastName</th>
	   <th>User Name</th>
	   <th>Email</th>
	   <th>Id Number</th>
	   <th>Phone Number</th>
	   <th>Address</th>
	</tr>

	   <?php while($row=mysqli_fetch_assoc($read)): ?>
	   	<tr style="color: darkblue; font-weight: bolder; margin: 1px solid black;">
	   	<td><?php  echo $row['firstname']; ?></td>
	   	<td><?php  echo $row['lastname']; ?></td>
	   	<td><?php  echo $row['username']; ?></td>
	   	<td><?php  echo $row['email']; ?></td>
	   	<td><?php  echo $row['id_number']; ?></td>
	   	<td><?php  echo $row['phone_number']; ?></td>
	   	<td><?php  echo $row['address']; ?></td>
	   </tr>
	   <?php endwhile; ?>
	</table>
	
</div>
<div class="footer">
	<p>&copy;Copyrights iso certified 234567890986543</p>
</div>
</body>

</html>