<?php
    session_start();
    if(isset($_SESSION['admin_name'])){}
    else if(isset($_SESSION['user_name'])){}
    else{
        ?>
        <script>
            alert("You are not logged in");
        </script>
        <?php

        header("location:login.php");
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
  <div id="topmost">
        <h1 style="text-align: center;color: rgb(255, 255, 255);width: auto;"><b>Tuition media</b></h1>
  </div>
   
    
  <div  >
      <div >
          <ul >
              <li ><a href="#">Home</a></li>
              <li >
                  <a href="#">Find Tutor</a>
                  <ul>
                      <li><a href="1to5.php" target="_blank">class 1-class 5</a></li>
                      <li><a href="6to8.php"target="_blank">class 6-class 8</a></li>
                      <li><a href="9to10.php"target="_blank">class 9-class 10</a></li>
                      <li><a href="11to12.php"target="_blank">class 11-class 12</a></li>
                  </ul>
              </li>
              <li ><a href="findtuition.html"target="_blank">Find Tuition</a></li>
              <li ><a href="tutorRegistration.html" target="_blank">Tutor Registration</a></li>
              <li ><a href="login.php" target="_blank">Log In</a></li>
              <li ><a href="logout.php">Log Out</a></li>
          </ul>
      </div>

  </div>
</body>
</html>