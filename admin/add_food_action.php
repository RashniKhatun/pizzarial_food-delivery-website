<?php
include("admin_function.php");
$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// echo"<pre>";
// print_r($_POST);
// die();
$food_name = mysqli_real_escape_string($con, $_POST['food_name']);
$cname = mysqli_real_escape_string($con, $_POST['cname']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$stock_count = mysqli_real_escape_string($con, $_POST['stock_count']);
$food_status = mysqli_real_escape_string($con, $_POST['food_status']);
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
$sql2 = "SELECT * FROM food WHERE  food_name='$food_name'";
$query2 = mysqli_query($con, $sql2);
$result = mysqli_fetch_assoc($query2);
$row = mysqli_num_rows($query2);

if ($row > 0) {
    echo "<script>alert('This food is already exit');window.location.href='dashboard.php';</script>";
} else {
$img_name=$_FILES['pic']['name'];
$img_tmpname=$_FILES['pic']['tmp_name'];
$folder = "../assets/food_img/" . $img_name;

if (move_uploaded_file($img_tmpname, $folder)) {
    echo "<h3>&nbsp; Image uploaded successfully!</h3>";
} else {
    echo "<h3>&nbsp; Failed to upload image!</h3>";
}

    $sql = "INSERT INTO food(food_name,price,stock_count,food_status,image,cname) VALUES('" . $food_name . "','" . $price . "','" . $stock_count . "','" . $food_status . "','" . $img_name . "','" . $cname . "')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script>alert('Add food Successfully');window.location.href='food_list.php';</script>";
    } else {
        echo "<script>alert('Sorry,Add food UnSuccessful');window.location.href='food_list.php';</script>";
    }
}
