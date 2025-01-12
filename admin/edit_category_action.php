<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['categoryEditBtn'])) {
  $user_id = $_POST['user_id'];
  $category = $_POST['category'];
  $category_status = $_POST['category_status'];
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

  $returnData = CategoryUpdate($user_id, $category,$category_status, $image);
  
  if ($returnData) {
    {
      if( $pic['name']!=''){
        if($old_img!='')
         unlink('../assets/category_img/'.$old_img);
        move_uploaded_file($pic['tmp_name'],'../assets/category_img/'.$image);
    }
    }
    echo "<script>
    alert('Category update successfully');
    window.location.href='category_list.php';
  </script>";
  } 
  else {
    echo "<script>
    alert('Category update unsuccessfully');
    window.location.href='category_list.php';
    </script>";
  }
}
?>
