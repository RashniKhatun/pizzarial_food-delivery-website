<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['serviceEditBtn'])) {
  $user_id = $_POST['user_id'];
  $service = $_POST['service'];
  $service_status = $_POST['service_status'];
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

  $returnData = serviceUpdate($user_id, $service,$service_status, $image);
  
  if ($returnData) {
    {
      if( $pic['name']!=''){
        if($old_img!='')
         unlink('../assets/service_img/'.$old_img);
        move_uploaded_file($pic['tmp_name'],'../assets/service_img/'.$image);
    }
    }
    echo "<script>
    alert('service update successfully');
    window.location.href='service_list.php';
  </script>";
  } 
  else {
    echo "<script>
    alert('service update unsuccessfully');
    window.location.href='service_list.php';
    </script>";
  }
}
?>
