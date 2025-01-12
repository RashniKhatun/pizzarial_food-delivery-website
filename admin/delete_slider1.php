<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=Slider1Delete($user_id);
if($call){
	echo "<script>
			alert('Slider1 Delete Successful.');
			window.location.href='slider1.php';
		  </script>";
}else{
	echo "<script>
			alert('Slider1 Delete Unuccessful.');
			window.location.href='slider1.php';
		  </script>";
}


?>