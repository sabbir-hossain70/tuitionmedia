<?php
    include("config.php");
    $conn= mysqli_connect('localhost','root','','tuition_media'); 
    $id=$_GET['id'];
    $sql="DELETE FROM teachers WHERE tid='$id'";
    $run=mysqli_query($conn,$sql);

    if($run){
        header("Location:admin_teachers.php");
    }
    else{
        echo "Failed to delete the record";
    }
?>