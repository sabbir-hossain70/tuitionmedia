<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users list</title>
    <link rel="stylesheet" href="admin_users.css">
</head>
<body>
    <h1>Our User List</h1>
    <?php
    $conn= mysqli_connect('localhost','root','','tuition_media');                       
    ?>
    <div id="Users" >
        <table>
            <th>USER_ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>DELETE</th>
            <?php
            $sql="SELECT user_id,name,email FROM users;";
            $query=mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $info['user_id']?></td>
                    <td><?php echo $info['name']?></td>
                    <td><?php echo $info['email']?></td>
                    <td><a href="delete_user.php ?id=<?php echo($info['user_id']);?>" 
                     onclick='return checkdelete()'>DELETE</a> 
                    </td>
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