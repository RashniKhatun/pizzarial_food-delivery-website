<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=CategoryDelete($user_id);
if($call){
	echo "<script>
			confirm('Are you sure');
			alert('category Delete Successful.');
			window.location.href='category_list.php';
		  </script>";
}else{
	echo "<script>
			alert('category Delete Unuccessful.');
			window.location.href='category_list.php';
		  </script>";
}


?>