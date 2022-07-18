<?php

@include 'config.php';
$conn= mysqli_connect('localhost','root','','tuition_media'); 
session_start();
if(isset($_SESSION["signedup"])&& $_SESSION["signedup"]=="true"){
    $_SESSION["signedup"]=false;
    echo $_SESSION["signedup"];
    ?>
    <script>
    alert("You have been signed up successfully..log in now");
    </script>
    <?php

}
if(isset($_POST['submit'])){
    
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=$_POST['password'];
    
    $select1="SELECT * FROM admins WHERE email='$email' && password='$password' ";
    $result1=mysqli_query($conn,$select1);

    $select2="SELECT * FROM users WHERE email='$email' && password='$password' ";
    $result2=mysqli_query($conn,$select2);

    if(mysqli_num_rows($result1)>0){
       $row=mysqli_fetch_array($result1);
       $_SESSION['admin_name']=$row['name'];
       header('location:admin_page.php');
    }
    elseif(mysqli_num_rows($result2)>0){
        $row=mysqli_fetch_array($result2);
        $_SESSION['user_name']=$row['name'];
        header('location:user_page.php');
     }else{
        $error[]='incorrect email or password';
     }
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Tuition Media</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
        <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
        ?>
            
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email </label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <span></span>
                <label>Password</label>
            </div>
            
            <input type="submit" value="submit" name="submit">
            <div class="pass">
                Forgot Password??
            </div>
            <div class="signup_link">
                Don't have an account?
                <a href="signup.php">Signup</a>
            </div>
        </form>
    </div>

</body>