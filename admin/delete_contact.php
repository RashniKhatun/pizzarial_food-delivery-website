<?php
include('admin_function.php');

$user_id=$_REQUEST['uid'];

$call=contactDelete($user_id);
if($call){
	echo "<script>
			alert('Message Delete Successful.');
			window.location.href='contact_list.php';
		  </script>";
}else{
	echo "<script>
			alert('Message Delete Unuccessful.');
			window.location.href='contact_list.php';
		  </script>";
}


?>