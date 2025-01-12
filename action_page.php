<?php
$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// echo"<pre>";
// print_r($_POST);
// die();
$name = mysqli_real_escape_string($con, $_POST['uname']);
$email = mysqli_real_escape_string($con, $_POST['uemail']);
$password = mysqli_real_escape_string($con, $_POST['upassword']);
$phone_no = mysqli_real_escape_string($con, $_POST['ut']);
$old_img = mysqli_real_escape_string($con, $_POST['old_img']);
$gender = mysqli_real_escape_string($con, $_POST['gender']);

$sql2 = "SELECT * FROM registration WHERE  email='$email'";
$query2 = mysqli_query($con, $sql2);
$result = mysqli_fetch_assoc($query2);
$row = mysqli_num_rows($query2);

if ($row > 0) {
    echo "<script>alert('This email is already exit');window.location.href='home.php';</script>";
} else {
    $img_name=$_FILES['pic']['name'];
    $img_tmpname=$_FILES['pic']['tmp_name'];
    $folder = "assets/user_img/" . $img_name;
    
    if (move_uploaded_file($img_tmpname, $folder)) {
        echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    } else {
        echo "<h3>&nbsp; Failed to upload image!</h3>";
    }

    $sql = "INSERT INTO registration(name,email,password,phone_no,image,gender) VALUES('" . $name . "','" . $email . "','" . $password . "','" . $phone_no . "','".$img_name."','".$gender."')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        session_start();
        $_SESSION['uname']=$name;
        $_SESSION['id'] = $data['id'];
        $_SESSION['name'] = $data['name'];
		$_SESSION['email'] = $data['email'];
        echo "<script>alert('Registration Successful');window.location.href='home.php';</script>";
        
    } else {
        echo "<script>alert('Sorry,Registration UnSuccessful');window.location.href='home.php';</script>";
    }
}
