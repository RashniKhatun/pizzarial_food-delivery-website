<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['foodEditBtn'])) {
  $user_id = $_POST['user_id'];
  $food_name = $_POST['food_name'];
  $price = $_POST['price'];
  $stock_count = $_POST['stock_count'];
  $food_status=$_POST['food_status'];
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

  $returnData = FoodUpdate($user_id, $food_name, $price, $stock_count,$food_status, $image);
  
  if ($returnData) {
    {
      if( $pic['name']!=''){
        if($old_img!='')
         unlink('../assets/food_img/'.$old_img);
        move_uploaded_file($pic['tmp_name'],'../assets/food_img/'.$image);
    }
    }
    echo "<script>
    alert('Food update successfully');
    window.location.href='food_list.php';
  </script>";
  } 
  else {
    echo "<script>
    alert('Food update unsuccessfully');
    window.location.href='food_list.php';
    </script>";
  }
}
?>
