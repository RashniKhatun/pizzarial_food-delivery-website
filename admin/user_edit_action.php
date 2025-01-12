<?php
include("admin_function.php");
// echo "<pre>";
// print_r($_POST);
if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST) && isset($_POST['userEditBtn'])) {
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender = $_POST['gender'];
  $old_img = $_POST['old_img'];
  $pic = $_FILES['pic'];
  $image = ' ';

  if ($pic['name'] != '') {
    $img_type = strtolower(pathinfo($pic['name'], PATHINFO_EXTENSION));
    $image = time() . "." . $img_type;
  } else {
    $image = $old_img;
  }

  $returnData = UserUpdate($user_id, $name, $email, $gender, $image);

  if ($returnData) { {
      if ($pic['name'] != '') {
        if ($old_img != '')
          unlink('../assets/user_img/' . $old_img);
        move_uploaded_file($pic['tmp_name'], '../assets/user_img/' . $image);
      }
    }
    echo "<script>
    alert(' User update successfully');
    window.location.href='user_list.php';
  </script>";
  } else {
    echo "<script>
    alert('User update unsuccessfully');
    window.location.href='user_list.php';
    </script>";
  }
}
