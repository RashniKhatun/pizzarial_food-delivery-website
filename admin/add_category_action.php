<?php
include("admin_function.php");
$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// echo"<pre>";
// print_r($_POST);
// die();
$category = mysqli_real_escape_string($con, $_POST['category']);
$category_status = mysqli_real_escape_string($con, $_POST['category_status']);
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
$sql2 = "SELECT * FROM category WHERE  category='$category'";
$query2 = mysqli_query($con, $sql2);
$result = mysqli_fetch_assoc($query2);
$row = mysqli_num_rows($query2);

if ($row > 0) {
    echo "<script>alert('This category is already exit');window.location.href='category_list.php';</script>";
} else {
$img_name=$_FILES['pic']['name'];
$img_tmpname=$_FILES['pic']['tmp_name'];
$folder = "../assets/category_img/" . $img_name;

if (move_uploaded_file($img_tmpname, $folder)) {
    echo "<h3>&nbsp; Image uploaded successfully!</h3>";
} else {
    echo "<h3>&nbsp; Failed to upload image!</h3>";
}

    $sql = "INSERT INTO category(category,category_status,image) VALUES('" .$category . "','" .$category_status . "','" .$img_name . "')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script>alert('Add category Successfully');window.location.href='category_list.php';</script>";
    } else {
        echo "<script>alert('Sorry,Add category UnSuccessful');window.location.href='category_list.php';</script>";
    }
}
