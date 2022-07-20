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


$sql = "INSERT INTO teachers (tname,email,phone,tclass,subjects)
VALUES ('$teachername','$email','$phone','$classes','$subjects');";


$check=mysqli_query($conn,$sql);

if ($check) {
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
    <title>Registration confirmation</title>
    <link rel="stylesheet" href="regconfirmed.css">
</head>
    <body style="background-color:aliceblue;">
    <h1>Welcome <?php echo $_POST["teachername"]; ?> </h1><br>
    <h2>Your email address is: <?php echo $_POST["email"]; ?><br><h2>
    <h2>Your phone no is: <?php echo $_POST["phone"]; ?><h2><br>

    <h1>You have been successfully registered as a teacher.<h1>
    </body>
</html>