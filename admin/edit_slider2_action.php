<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['slider2EditBtn'])) {
  $user_id = $_POST['user_id'];
  $slider2 = $_POST['slider2'];
  $slider2_status = $_POST['slider2_status'];
  $old_img = $_POST['old_img'];
  $pic = $_FILES['pic'];
  $image = ' ';

  if ($pic['name'] != '') {
    $img_type = strtolower(pathinfo($pic['name'], PATHINFO_EXTENSION));
    $image = time() . "." . $img_type;
  }
   else {
    $image = $old_img;
  }

  $returnData = slider2Update($user_id, $slider2,$slider2_status, $image);
  
  if ($returnData) {
    {
      if( $pic['name']!=''){
        if($old_img!='')
         unlink('../assets/slider_img/'.$old_img);
        move_uploaded_file($pic['tmp_name'],'../assets/slider_img/'.$image);
    }
    }
    echo "<script>
    alert('slider2 update successfully');
    window.location.href='slider2.php';
  </script>";
  } 
  else {
    echo "<script>
    alert('slider2 update unsuccessfully');
    window.location.href='slider2.php';
    </script>";
  }
}
?>
