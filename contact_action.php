<?php
$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// echo"<pre>";
// print_r($_POST);
// die();
$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
$message = mysqli_real_escape_string($con, $_POST['message']);


if (isset($_POST['contactbtn'])) {



	$query = "INSERT INTO contact_us(name,email,phone_no,message) VALUES('" . $name . "','" . $email . "','" . $phone_no. "','" . $message . "')";



	if (mysqli_query($con, $query)) {
		echo "<script>alert('Message sent to the admin Successfully.');window.location.href='Home.php';</script>";
	} else {
		echo "<script>alert('Sorry..contact Unsuccessful.');window.location.href='Home.php';</script>";
	}
}
