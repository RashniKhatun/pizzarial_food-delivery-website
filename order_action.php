<?php

$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}

$cus_name = mysqli_real_escape_string($con, $_POST['cus_name']);
$phone_no = mysqli_real_escape_string($con, $_POST['phone_no']);
$pincode= mysqli_real_escape_string($con, $_POST['pincode']);
$city = mysqli_real_escape_string($con, $_POST['city']);
$state = mysqli_real_escape_string($con, $_POST['state']);
$food = mysqli_real_escape_string($con, $_POST['food']);
$price = mysqli_real_escape_string($con, $_POST['price']);
$house = mysqli_real_escape_string($con, $_POST['house']);
$payment_status = mysqli_real_escape_string($con, $_POST['payment_status']);
// $sql2 = "SELECT * FROM orderlist WHERE  name='$name'";
// $query2 = mysqli_query($con, $sql2);
// $result = mysqli_fetch_assoc($query2);
// $row = mysqli_num_rows($query2);

// if ($row > 0) {
//     echo "<script>alert('This food is already exit');window.location.href='dashboard.php';</script>";
// } else {}

if (isset($_POST['orderbtn'])) {
    $sql = "INSERT INTO orderlist(cus_name,phone_no,pincode,city,state,food,price,house,payment_status) VALUES('" . $cus_name . "','" . $phone_no . "','" . $pincode . "','" . $city . "','" . $state . "','" . $food . "','" . $price . "','" . $house. "','" . $payment_status. "')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        echo "<script>alert('Order Successful');window.location.href='successful.php';</script>";
    } else {
        echo "<script>alert('Sorry,Add food UnSuccessful');window.location.href='Menu.php';</script>";
    }
}
