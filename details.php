<?php 
include('database.php');

?>
<?php 
if(isset($_POST['register'])){
	 $firstname = mysqli_real_escape_string($conn, $_POST['fname']);
	 $lastname = mysqli_real_escape_string($conn, $_POST['lname']);
	 $username = mysqli_real_escape_string($conn, $_POST['uname']);
	 $email = mysqli_real_escape_string($conn, $_POST['email']);
	 $id = mysqli_real_escape_string($conn, $_POST['idnum']);
	 $phonumber = mysqli_real_escape_string($conn, $_POST['pnumber']);
	 $password = mysqli_real_escape_string($conn, $_POST['password']);
	 $confirmpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
	 $address = mysqli_real_escape_string($conn, $_POST['address']);

	if(isset($firstname) && isset($lastname) && isset($username) && isset($email) && isset($id) 
		&& isset($phonumber) && isset($password) && isset($confirmpassword) && isset($address)){

		$query="INSERT INTO 
		students(firstname,lastname,username,email,id_number,phone_number,password,confirm_password,address)
		VALUES('$firstname','$lastname','$username','$email','$id','$phonumber','$password','$confirmpassword','$address')";
		$input=mysqli_query($conn , $query);
		if($input){
			echo "data successfully inputed";
			//header('Location: index.php');
		}
		else{
			echo "failed to input";
		}

	}

}
?>