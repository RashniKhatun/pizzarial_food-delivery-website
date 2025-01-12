<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=foodDelete($user_id);
if($call){
	echo "<script>
			alert('Food Delete Successful.');
			window.location.href='food_list.php';
		  </script>";
}else{
	echo "<script>
			alert('Food Delete Unuccessful.');
			window.location.href='food_list.php';
		  </script>";
}


?>