<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=ServiceDelete($user_id);
if($call){
	echo "<script>
			alert('Service Delete Successful.');
			window.location.href='service_list.php';
		  </script>";
}else{
	echo "<script>
			alert('Service Delete Unuccessful.');
			window.location.href='service_list.php';
		  </script>";
}


?>