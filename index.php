<?php
    session_start();
    $flag=false;
    $signup="Sign Up";
    if(isset($_SESSION['admin_name'])){
        $signup=$_SESSION['admin_name'];
    }
    else if(isset($_SESSION['user_name'])){
        $signup=$_SESSION['user_name'];
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
    <link rel="stylesheet" href="index.css">
</head>
<body>
  <div class="titlebar">
        <h1><b>Tuition media</b></h1>
        <ul>
            <?php
                if($signup!="Sign Up"){
                ?>
                    <li><button class="b1"><a href="#"><?php echo($signup); ?></a></button></li>
                    <li><button class="b2"><a href="logout.php">Log Out</a></button></li>
            <?php
                }
                else{
                ?>
                    <li><button class="b1"><a href="signup.php">Sign Up</a></button></li>
                    <li><button class="b2"><a href="login.php">Log in</a></button></li>
                <?php
                }
            ?>
            
        </ul>
              
  </div>
   
    
  <div class="menu" >
    <ul >
        <li ><a href="#">Home</a></li>
        <li >
            <a href="#">Find Tutor</a>
            <ul>
                <li><a href="1to5.php"target="_blank">class 1-class 5</a></li>
                <li><a href="6to8.php"target="_blank">class 6-class 8</a></li>
                <li><a href="9to10.php"target="_blank">class 9-class 10</a></li>
                <li><a href="11to12.php"target="_blank">class 11-class 12</a></li>
            </ul>
        </li>
        <li ><a href="findtuition.html"target="_blank">Find Tuition</a></li>
        <li ><a href="tutorRegistration.html" target="_blank">Tutor Registration</a></li>
    </ul>

  </div>
</body>
</html>