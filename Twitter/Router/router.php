<?php
if(!defined('authorized')){
    header("Location:../Router/router.php?unauthorized_access_request=TRUE");
}
session_start();
if($_SESSION['status']=='index' || !isset($_SESSION['status'])){
if(isset($_GET['login'])){
if($_GET['login']=='login'){
    $_SESSION['status']='login';
    header('Location:../Views/home.php');
}
elseif($_GET['login']=='no_login'){
    header('Location:../index.php?login=0');
}
    }
if(!isset($_GET['login'])){
    header('Location:../index.php');
}
if($_GET['signup_success']==1){
    $_SESSION['status']='index';
    header("Location:../index.php?signup_success=1");
}
}
if($_GET['unauthorized_access_request']==TRUE){
    $_SESSION['status']='error';
    header("Location:../Errors/unauthorized_access.php");
}
if($_SESSION['status']=='to_update_info'){
    header("Location:../Views/update_account_info.php");
}
if($_SESSION['status']=='logout'){
    session_destroy();
    header("Location:../index.php");
}
if($_SESSION['status']=='login'){
    header("Location:../Views/home.php");
}