<?php
$teachername=$_POST['teachername'];
$email= $_POST['email'];      
$phone=$_POST['phone'];         
$subjects=$_POST['subjects']; 
$classes=$_POST['classes'];    
$servername = "localhost";    
$username = "root";
$password = "";
$dbname = "tuition_media";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO teachers (tname,email,phone,subjects,classes)
VALUES ('$teachername','$email','$phone','$subjects','$classes');";


$check=mysqli_query($conn,$sql);

if ($check) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title></head>
    <body>
    Welcome <?php echo $_POST["teachername"]; ?><br>
    Your email address is: <?php echo $_POST["email"]; ?><br>
    Your phone no is: <?php echo $_POST["phone"]; ?><br>

    You have been successfully registered as a teacher.
    </body>
</html>