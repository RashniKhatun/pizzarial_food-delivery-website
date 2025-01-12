<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=ReviewDelete($user_id);
if($call){
	echo "<script>
			alert('Review Delete Successful.');
			window.location.href='review_list.php';
		  </script>";
}else{
	echo "<script>
			alert('Review Delete Unuccessful.');
			window.location.href='review_list.php';
		  </script>";
}


?>