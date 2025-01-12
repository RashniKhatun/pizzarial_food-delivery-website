<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=orderDelete($user_id);
if($call){
	echo "<script>
			alert('Order Delete Successful.');
			window.location.href='order_list.php';
		  </script>";
}else{
	echo "<script>
			alert('Order Delete Unuccessful.');
			window.location.href='order_list.php';
		  </script>";
}


?>