<?php
    require_once "../helpers/includes.php";
    define('authorized',TRUE);
    session_start();
    if($_SESSION['status']!='to_update_info' ){
        $_SESSION['status']='login';
        header("Location:../Router/router.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit account information</title>
</head>
<body>
   <?php
   if(isset($_SESSION['image_serial'])):
   ?>
    <img src="<?php echo "../uploads/".$_SESSION['image_serial']."."."jpg" ?>" width="40" height="40"alt="<?php echo $_SESSION['username'] ?>"><br>
    <?php
    endif;
    if(!isset($_SESSION['image_serial'])):
    ?>
    <img src="../uploads/whatsapp-dp-latest-1.jpg" width="40" height="40" alt="<?php echo $_SESSION['username'] ?>"><br>
    <?php 
    endif;
     echo $_SESSION['username']; ?>
    <form action="../Controllers/update_account_info.php" method="GET">
    <input type="submit" name="change_password" value="change password">
    <input type="submit" name="change_username" value="change username">
    <input type="submit" name="change_profile_picture" value="change profile picture">
    </form>
    <?php
        if($_GET['edit']=="password"):
    ?>
    <form action="../Controllers/update_account_info.php" method="post">
    Enter new password:<br>
    <input type="password" name="new_password" place_holder="enter your new password please" required><br>
    Confirm new password:<br>
    <input type="password" name="new_password_confirm" place_holder="re-enter your new password please" required><br>
    <input type="submit" name="change_password" value="change">
    </form>
    <?php
    endif;
    if($_GET['edit']=="username"):
    ?>
    <form action="../Controllers/update_account_info.php" method="post">
    Enter new username:<br>
    <input type="text" name="new_username" placeholder="enter your new username"><br>
    <input type="submit" name="change_username" value="change">
    </form>
    <?php
    endif;
    if($_GET['password_change']=="success"){
        echo"<script>alert('password successfully updated')</script>";
        $_GET['password_change']=NULL;
    }
    if($_GET['password_confirmation']=="failed"){
        echo"<script>alert('wrong password confirmation please re-enter your password correctly to procceed')</script>";
        $_GET['password_confirmation']=NULL;
    }
    if($_GET['edit']=="profile_picture"):
    ?>
    <form action="../Controllers/update_account_info.php" method="post" enctype="multipart/form-data">
    Select image to upload<br>
    <input type="file" name="file" id="file"><br>
    <input type="submit" value="change profile picture" name="change_profile_pic">
    </form>
    <?php
    endif;
    if($_GET['profile_picture_change']=="success"){
        echo"<script>alert('profile picture changed successfully')</script>";
        $_GET['profile_picture_change']=NULL;
    }
    ?>
    <form action="../Controllers/update_account_info.php" method="get">
    <input type="submit" value="Return to Home Page" name="return_to_home_page">
    </form>
</body>
</html>