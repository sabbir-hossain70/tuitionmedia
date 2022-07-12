<?php
$conn= mysqli_connect('localhost','root','','tuition_media');  
session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin_page.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h3>hi, <span> admin</span></h3>
        <h1>welcome <span><?php echo $_SESSION['admin_name']  ?></span> </h1>
        <p>this is an admin page</p>
        <a href="login.php" class="btn">login</a>
        <a href="signup.php" class="btn">signup</a>
        <a href="logout.php" class="btn">logout</a>
        
    </div>
</div>

</body>
</html>