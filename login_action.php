<?php
include("db_connection.php");
global $conn;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST)) {

	$email = $_POST['email'];
	$password = $_POST['upassword'];
	$sql = "SELECT * FROM registration WHERE email='" . $email . "'";
	$query = mysqli_query($conn, $sql);

	$get_no_row = mysqli_num_rows($query);

	if ($get_no_row) {
		$data = mysqli_fetch_assoc($query);
		if ($data['password'] == $password) {
			session_start();
			$_SESSION['uid'] = $data['id'];
			$_SESSION['username'] = $data['email'];
			$_SESSION['name'] = $data['name'];
			$_SESSION['id'] = $data['id'];

			$_SESSION['email'] = $data['email'];
			
			header('location:Home.php');
		} else {
			echo "<script>
			alert('Password don\'t Match....');
			window.location.href='login.php';
		  </script>";
		}
	} 
	else {
		echo "<script>
			alert('User not Exist...');
			window.location.href='login.php';
		  </script>";
	}
}
 else {
	echo "<script>
			alert('Somethings Went Wrong.\nPlease Try Again...');
			window.location.href='login.php';
		  </script>";
}
?>