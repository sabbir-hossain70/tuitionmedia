<?php
    include("config.php");
    $conn= mysqli_connect('localhost','root','','tuition_media'); 
    $id=$_GET['id'];
    $sql="DELETE FROM users WHERE user_id='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:admin_users.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>