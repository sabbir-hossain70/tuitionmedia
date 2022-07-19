<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers list</title>
    <link rel="stylesheet" href="admin_teachers.css">
</head>
<body>
    <h1>Our Teachers list </h1>
    <?php
    $conn= mysqli_connect('localhost','root','','tuition_media');                       
    ?>
    <div id="Teachers" >
        <table>
            <th>NAME</th>
            <th>PHONE NO</th>
            <th>CLASSES</th>
            <th>SUBJECTS</th>
            <th>DELETE</th>
            <?php
            $sql="SELECT * FROM teachers;";
            $query=mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $info['tname']?></td>
                    <td><?php echo $info['phone']?></td>
                    <td><?php echo $info['tclass']?></td>
                    <td><?php echo $info['subjects']?></td>
                    <td><a href="delete_teacher.php ?id=<?php echo($info['tid']);?>" 
                    
                    
                    onclick='return checkdelete()'>DELETE</a> </td>
                </tr>

                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>


<script>
    function checkdelete()
    {
        return confirm('Are you sure to delete this job post?');
    }
 </script>