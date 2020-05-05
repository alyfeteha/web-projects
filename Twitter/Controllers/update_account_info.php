<?php
if(!defined('authorized')){
    header("Location:../Router/router.php?unauthorized_access_request=TRUE");
}
include "../Model/user.php";
include "../helpers/functions.php";
session_start();
if(isset($_GET['change_password'])){
    header("Location:../Views/update_account_info.php?edit=password");
}
if(isset($_POST['change_password'])){
    if($_POST['new_password']==$_POST['new_password_confirm']){
    $user=new User($_SESSION['username'],$_SESSION['password'],$_SESSION['email'],$_SESSION['image_serial']);
    $client=$user->find();
    $user_info['id']=$client->id;
    $user_info['new_password']=$_POST['new_password'];
    User::update($user_info);
    header("Location:../Views/update_account_info.php?password_change=success");
    }
    else{
        header("Location:../Views/update_account_info.php?password_confirmation=failed");
    }
    
}
if(isset($_GET['change_username'])){
    header("Location:../Views/update_account_info.php?edit=username");
}
if(isset($_POST['change_username'])){
    $user=new User($_SESSION['username'],$_SESSION['password'],$_SESSION['email'],$_SESSION['image_serial']);
    $client=$user->find();
    $user_info['id']=$client->id;
    $user_info['new_username']=$_POST['new_username'];
    User::update($user_info);
    $_SESSION['username']=$_POST['new_username'];
    header("Location:../Views/update_account_info.php?username_change=success");
}
if(isset($_GET['change_profile_picture'])){
    header("Location:../Views/update_account_info.php?edit=profile_picture");
}
if(isset($_POST['change_profile_pic'])){
    $user=new User($_SESSION['username'],$_SESSION['password'],$_SESSION['email'],$_SESSION['image_serial']);
    $client=$user->find();
    $user_info['id']=$client->id;
    if(!isset($_FILES['file']['name'])){
        $user_info['new_profile_picture']=0;
    }
    else{
        $user_info['new_profile_picture']=image_validation();
    }
    User::update($user_info);
    $_SESSION['image_serial']=$user_info['new_profile_picture'];
   
    header("Location:../Views/update_account_info.php?profile_picture_change=success");
}
if(isset($_GET['return_to_home_page'])){
    $_SESSION['status']='login';
    header("Location:../Router/router.php");
}
