<?php
session_start();
session_destroy();
echo"<script>alert('Successfully Logout');window.location.href='login.php'</script>";
?>