<?php
$conn= mysqli_connect('localhost','root','','tuition_media');  
session_start();
session_unset();
session_destroy();
?>
<script>
    alert("You have been successfully logged out!");
</script>

<?php
header('location:login.php');
?>
<script>
    alert("You have been successfully logged out!");
</script>
