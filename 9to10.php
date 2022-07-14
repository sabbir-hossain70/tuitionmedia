<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher list(9-10)</title>
    <link rel="stylesheet" href="9to10.css">
</head>
<body>
    <h1>Our Teacher list for Class 9 and Class 10</h1>
    <?php
    $conn= mysqli_connect('localhost','root','','tuition_media');                       
    ?>
    <div id="1to5Teachers" >
        <table>
            <th>NAME</th>
            <th>SUBJECTS</th>
            <th>PHONE NO</th>
            <?php
            $sql="SELECT tname,subjects,phone FROM teachers WHERE classes='9to10';";
            $query=mysqli_query($conn,$sql);
            while($info=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $info['tname']?></td>
                    <td><?php echo $info['subjects']?></td>
                    <td><?php echo $info['phone']?></td>
                </tr>


                <?php
            }
            ?>
        </table>
    </div>
</body>
</html>