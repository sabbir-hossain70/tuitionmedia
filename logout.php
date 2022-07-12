<?php
$conn= mysqli_connect('localhost','root','','tuition_media');  
session_start();
session_unset();
session_destroy();
header('location:login_form.php');

?>