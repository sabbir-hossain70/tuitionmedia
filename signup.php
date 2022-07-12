<?php
@include 'config.php';
$conn= mysqli_connect('localhost','root','','tuition_media'); 
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $password=($_POST['password']);
    $password2=($_POST['password2']);
    
    $select="SELECT * FROM users WHERE email='$email' AND password='$password' ";
    $result=mysqli_query($conn,$select);

    if(mysqli_num_rows($result)>0){
        $error[]='user already exists';
    }
    else{
        if($password!=$password2){
            $error[]='password not matched!';
        }else{
            $insert= "INSERT INTO users (name,email,password) VALUES('$name','$email','$password')";
           
            mysqli_query($conn,$insert);
            header('location:login.php');
        }
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
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="center">
        <h1>Signup</h1>
        <form method="post">
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                }
            }
            ?>
            <div class="txt_field">
                <input type="text" name="name" required>
                <span></span>
                <label>Full name</label>
            </div>
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
            <div class="txt_field">
                <input type="password" name="password2" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            
            <input type="submit" value="submit" name="submit">
            
            <div class="login_link">
                Already have an account?
                <a href="login.php">Log in</a>
            </div>
        </form>
    </div>

</body>