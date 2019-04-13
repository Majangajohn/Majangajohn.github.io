<?php
include("database.php");
?>
<?php
if(isset($_POST['login'])){
 $user = htmlentities(mysqli_real_escape_string($conn, $_POST['user']));
 $password = htmlentities(mysqli_real_escape_string($conn, $_POST['pass']));
 $query="SELECT * FROM students WHERE (username='$user' OR email='$user')AND password='$password'";
 $run_query = mysqli_query($conn, $query);
 $results = mysqli_num_rows($run_query);
 if($results==1){
 	header("Location: home.php");
 	exit();
 }else{
 echo "Invalid email address or email";
 }
}
?>