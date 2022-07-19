<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher list(1-5)</title>
    <link rel="stylesheet" href="1to5.css">
</head>
<body>
    <h1>Our Teacher list for Class 1 to Class 5</h1>
    <?php
    $conn= mysqli_connect('localhost','root','','tuition_media');                       
    ?>
    <div id="1to5Teachers" >
        <table>
            <th>NAME</th>
            <th>SUBJECTS</th>
            <th>PHONE NO</th>
            <?php
            $sql="SELECT tname,subjects,phone FROM teachers WHERE tclass='1to5';";
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