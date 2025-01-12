<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=Slider2Delete($user_id);
if($call){
	echo "<script>
			alert('slider2 Delete Successful.');
			window.location.href='slider2.php';
		  </script>";
}else{
	echo "<script>
			alert('slider2 Delete Unuccessful.');
			window.location.href='slider2.php';
		  </script>";
}


?>