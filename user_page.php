<?php
$conn= mysqli_connect('localhost','root','','tuition_media');  
session_start();
if(!isset($_SESSION['user_name'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="user_page.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h3>hi, <span>user</span></h3>
        <h1>welcome <span><?php echo $_SESSION['user_name']  ?></span> </h1>
        <p>You have been successfully logged in</p>
        <a href="index.php" class="btn">home</a>
        <a href="logout.php" class="btn">logout</a>

    </div>
</div>

</body>
</html>