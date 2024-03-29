<?php
    session_start();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Registration</title>
    <link rel="stylesheet" href="tutorRegistration.css">
    
</head>
<body>
    <h1 style="text-align: center;color: green;font-family:fantasy;">Tutor Registration Form</h1>
    <div id="regform">
        <form action="regconfirmed.php" method="post" target="_blank" >
            <label>নাম</label>
            <input type="varchar" name="teachername"
            <?php 
                if(isset($_SESSION['name'])){ 
                    ?>
                        value=<?php echo $_SESSION['name'] ?>
                    <?php
                }
                else{ 
                    ?>
                        placeholder="Enter Your Name"
                    <?php
                }
            ?>
           required>
            <label>ইমেইল</label>
            <input type="email" name="email"
            <?php 
                if(isset($_SESSION['email'])){ 
                    ?>
                        value=<?php echo $_SESSION['email'] ?>
                    <?php
                }
                else{ 
                    ?>
                        placeholder="Please Enter Your Email"
                    <?php
                }
            ?>
             required>
            <label>মোবাইল নম্বর</label>
            <input type="varchar" name="phone"
            placeholder="Enter your phone no" required>
            <br>  

            <label>কোন ক্লাসের শিক্ষক হিসেবে রেজিস্ট্রেশন করতে চান? </label><br><br>
            <select type="varchar" name="classes">
                <option value="1to5">প্রথম - পঞ্চম শ্রেণী</option>
                <option value="6to8">ষষ্ঠ - অষ্টম শ্রেণী</option>
                <option value="9to10">নবম -দশম শ্রেণী</option>
                <option value="11to12">একাদশ - দ্বাদশ শ্রেণী</option>
               
            </select><br><br>
            <label>কোন বিষয়গুলো পড়াতে চান?</label>
            <input type="varchar" name="subjects" placeholder="Enter the name of subjects" required>
            <input type="submit" value="submit" >
        </form>
    </div>
</body>
</html>