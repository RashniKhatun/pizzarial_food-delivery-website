<?php
include('db_connection.php');
global $conn;
$fid=$_POST['id'];
$quantity=$_POST['quantity'];
$price=$_POST['total'];
// $id=;
$sql="INSERT INTO cart(f_id,quantity,total_price)VALUES('".$fid."','".$quantity."','".$price."')";
$query=mysqli_query($conn,$sql);
if(isset($query)){
    echo "<script>
    alert('Food add on cart successfully');
    window.location.href='cart.php';
  </script>";
}
else{
    echo "<script>
    alert('sorry');
    window.location.href='menu.php';
  </script>";
}

// include("db_connection.php");
// global $conn;
// $quantity=$_POST['quantity'];
// $price=$_POST['price'];
// // $id=;
// $sql="UPDATE cart SET quantity='".$quantity."',total_price='".$price."' WHERE f_id='".$id."'";
// $query=mysqli_query($conn,$sql);
// if(isset($query)){
//     header("location:cart.php");
// }
// else{
//     header("location:cart.php");
// }

?>