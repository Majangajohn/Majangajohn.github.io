<?php
$host="localhost";
$user ="root";
$password="";
$db="registration_details";
$conn =mysqli_connect($host, $user, $password, $db);
if($conn){

	//echo "connected";
}
else{
	echo "failed to connect";
}

?>
<?php
$con = mysqli_connect("localhost","root","","shoutit");
//test connection
if(mysqli_connect_errno()){
echo 'Failed to connect '.mysqli_connect_error();
}
?>