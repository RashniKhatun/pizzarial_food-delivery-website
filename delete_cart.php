<?php
include('function.php');

$user_id=$_REQUEST['uid'];

$call=CartDelete($user_id);
if($call){
	echo "<script>
			alert('food Delete Successful.');
			window.location.href='cart.php';
		  </script>";
}else{
	echo "<script>
			alert('food Delete Unuccessful.');
			window.location.href='cart.php';
		  </script>";
}


?>