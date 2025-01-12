<?php
include("admin_function.php");
$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// echo"<pre>";
// print_r($_POST);
// die();
$slider1 = mysqli_real_escape_string($con, $_POST['slider1']);
$slider1_status = mysqli_real_escape_string($con, $_POST['slider1_status']);
$old_img = mysqli_real_escape_string($con, $_POST['old_img']);

// $old_img = $_POST['old_img'];
// $pic = $_FILES['pic'];
// $image = $old_img;


// if ($pic['name'] != '') {
//     $img_type = strtolower(pathinfo($pic['name'], PATHINFO_EXTENSION));
//     $image = time() . "." . $img_type;
// } else {
//     $image = $old_img;
// }
$sql2 = "SELECT * FROM slider1 WHERE  slider1='$slider1'";
$query2 = mysqli_query($con, $sql2);
$result = mysqli_fetch_assoc($query2);
$row = mysqli_num_rows($query2);

if ($row > 0) {
    echo "<script>alert('This slider1 is already exit');window.location.href='slider1.php';</script>";
} else {
$img_name=$_FILES['pic']['name'];
$img_tmpname=$_FILES['pic']['tmp_name'];
$folder = "../assets/slider_img/" . $img_name;

if (move_uploaded_file($img_tmpname, $folder)) {
    echo "<h3>&nbsp; Image uploaded successfully!</h3>";
} else {
    echo "<h3>&nbsp; Failed to upload image!</h3>";
}

    $sql = "INSERT INTO slider1(slider1,slider1_status,image) VALUES('" .$slider1 . "','" .$slider1_status . "','" .$img_name . "')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script>alert('Add slider1 Successfully');window.location.href='slider1.php';</script>";
    } else {
        echo "<script>alert('Sorry,Add slider1 UnSuccessful');window.location.href='slider1.php';</script>";
    }
}
