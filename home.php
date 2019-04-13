<?php
include("database.php");
?>
<?php 
//create a select query
$query = "SELECT * FROM shouts ORDER BY id DESC";
$shouts = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div  id="container">
		<header>
			<h1>SHOUT IT! Shoutbox</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php while($row= mysqli_fetch_assoc($shouts)): ?>
					<li class="shout">
						<span><?php echo $row['time'] ?>- </span><strong><?php echo $row['user'] ?> </strong>: <?php echo $row['message'] ?>
				<?php endwhile; ?>
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div style="background: red;color: #ffffff;padding: 5px;margin-bottom: 20px;">
					<?php echo $_GET['error']; ?>
				</div>  
			<?php endif; ?>
			<form method="POST" action="process.php">
				<input type="text" name="user" placeholder="Enter your name" autocomplete="off" />
				<input type="text" name="message" placeholder="Enter A message" autocomplete="off" />
				<br>
				<input  class="shout-btn" type="submit" name="submit" value="shout it Out">
			</form>
		</div>
	</div>
</body>
</html>