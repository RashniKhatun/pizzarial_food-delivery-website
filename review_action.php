<?php

$con = mysqli_connect("localhost", "root", "", "cafe");
if (!$con) {
    die("Connection Unsuccessful" . mysqli_connect_error());
}
// $name = mysqli_real_escape_string($con, $_POST['name']);
//$old_img = mysqli_real_escape_string($con, $_POST['old_img']);
$opinion = mysqli_real_escape_string($con, $_POST['opinion']);
$rating = mysqli_real_escape_string($con, $_POST['rating']);
$sql2 = "SELECT * FROM review ";
$query2 = mysqli_query($con, $sql2);
$result = mysqli_fetch_assoc($query2);
$row = mysqli_num_rows($query2);

// if ($row > 0) {
//     echo "<script>alert('This email is already exit');window.location.href='home.php';</script>";
// } else {
    // $img_name=$_FILES['pic']['name'];
    // $img_tmpname=$_FILES['pic']['tmp_name'];
    // $folder = "assets/user_img/" . $img_name;
    
    // if (move_uploaded_file($img_tmpname, $folder)) {
    //     echo "<h3>&nbsp; Image uploaded successfully!</h3>";
    // } else {
    //     echo "<h3>&nbsp; Failed to upload image!</h3>";
    // }
    // session_start();
    $uid=mysqli_real_escape_string($con, $_POST['uid']);
    $sql = "INSERT INTO review(user_id,opinion,rating) VALUES('" . $uid . "','".$opinion."','".$rating."')";
    $query = mysqli_query($con, $sql);
    if ($query) {
        // session_start();
        // $_SESSION['name']=$name;
       echo "<script>alert('Thank you for your feedback');window.location.href='home.php';</script>";
       //echo $uid;
        
    } else {
        echo "<script>alert('Sorry,Registration UnSuccessful');window.location.href='home.php';</script>";
    }
//}

?>