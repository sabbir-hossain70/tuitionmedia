<?php
$name=$_POST['name'];
$email= $_POST['email'];
$phone=$_POST['phone'];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title></head>
    <body>
    Welcome <?php echo $_POST["name"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?><br>
    Your phone no is: <?php echo $_POST["phone"]; ?><br>

    You have been successfully registered as a teacher.
    </body>
</html>