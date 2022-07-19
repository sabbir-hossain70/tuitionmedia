<?php
    session_start();
    $flag=false;
    $loggedin="false";
    if(isset($_SESSION['admin_name'])){
        $loggedin=$_SESSION['admin_name'];
    }
    else if(isset($_SESSION['user_name'])){
        $loggedin=$_SESSION['user_name'];
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
<body style=" background:  rgb(159, 250, 183);">
  <div class="titlebar">
        <h1><b>Tuition media</b></h1>
        <ul>
            <?php
                if($loggedin!="false"){
                ?>
                    <li><button class="b1"><a href="#"><?php echo($loggedin); ?></a></button></li>
                    <li><button class="b2"><a href="logout.php" onclick="return flogout();">Log Out</a></button></li>
            <?php
                }
                else{
                ?>
                    <li><button class="b1"><a href="signup.php">Sign Up</a></button></li>
                    <li><button class="b2"><a href="login.php">Log In</a></button></li>
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
            <ul style="top:45px;">
                <li><a href="1to5.php"target="_blank" class="cls" style="font-size:20px;width:100%">class 1-class 5</a></li>
                <li><a href="6to8.php"target="_blank" class="cls" style="font-size:20px;width:100%">class 6-class 8</a></li>
                <li><a href="9to10.php"target="_blank" class="cls" style="font-size:20px;width:100%">class 9-class 10</a></li>
                <li><a href="11to12.php"target="_blank" class="cls" style="font-size:20px;width:100%">class 11-class 12</a></li>
            </ul>
        </li>
        <!-- <li ><a href="findtuition.html"target="_blank">Find Tuition</a></li> -->
        <li>
            <?php
            if($loggedin=="false"){  
            ?>
              <a href="login.php"  onclick="return loginpopup();">Tutor Registration</a>
            <?php
            }
            else{
            ?>
               <a href="tutorRegistration.php" target="_blank">Tutor Registration</a>
            <?php
            }
            ?>
        </li>
    </ul>

  </div>
  <div class="main" style="min-height:50%;margin:5% 3%;">
        <h1 style="color:blue">আপনি কি গৃহশিক্ষক / শিক্ষিকা খুঁজছেন? </h1>
       <h2 style="color:blue;margin-bottom:100px">
       গৃহশিক্ষক বিষয়ক যেকোনো প্রয়োজনে যোগাযোগ করুন 
       <b style="font-size:40px;">০১৫২৩৪৫৬৭৮৯ </b>নম্বরে। 
        </h2>
        <h1 style="color:red;">How It Works:</h1>
        <h2 >
            ১) টিউশন পেতে হলে অবশ্যই আমাদের ওয়েবসাইটে রেজিস্ট্রেশন ১০০% সম্পন্ন করতে হবে।
        </h2>  
        <h2>  
            ২) অভিভাবকের সাথে স্বাক্ষাৎ করে টিউশন নিশ্চিত হলে আপনাকে ২ কিস্তিতে শুধুমাত্র প্রথম মাসের বেতনের ৭০% মিডিয়া ফি দিতে হবে, দ্বিতীয় মাস থেকে আমাদের কে আর কোন ফি দিতে হবে না। স্বাক্ষাতের দিন ৩৫% এবং জয়েন করার ৭দিন পর বাকি ৩৫% ফি দিতে হবে।
        </h2>
        <h2>
            ৩)প্রথম মাসের স্যালারি পাওয়ার আগে টিউশন চলে সম্পূর্ণ মিডিয়া ফি ফেরত দেওয়া হবে।
        </h2>
        <h2>
            ৪)প্রথম মাসের বেতন পাওয়ার পর টিউশন চলে গেলে সম্পূর্ণ ফি ফেরত দেওয়া হবে,তবে আপনাকে যে বেতন দেওয়া হবে সেটার অর্ধেক মিডিয়া পাবে।
        </h2>
        <h2>
            ৫)আপনার ব্যক্তিগত কারনে টিউশন ছেড়ে দিলে বা চলে গেলে কো মিডিয়া ফি ফেরত দেওয়া হবে না।
        </h2>
       
  </div>


  <footer >
        <h3>Tuition Media-A reliable home tutor provider</h3>
        <div class="aboutus">
             <h2>About us</h2>
             <p>Tuitionmedia is one of the largest tuition media in Bangladesh.
                 Which aims to provide tuition to people who are searching for tuition.
                We have an objective to provide highly qualified teachers To those who can't find 
                the appropriate teachers. We have large number of tutors from different
                 university and different subjects
            </p>
        </div>
        <div class="Contact with us">
            <h2>Contact with us</h2>
            <p>Need any support? Call to <b style="font-size: 20px; color: green;">01521500000</b> 
            .<br>or email us <b style="font-size: 20px; color: green;">tuitionmedia@gmail.com</b>.</p>
        </div>
  </footer>
  


</body>
</html>


<script>
    function loginpopup(){
        alert("You need to log in first");
    }
    function flogout(){
        alert("You have been logged out successfully");
    }
</script>