<?php
session_start();
// if(!defined('authorized')){
//     header("Location:../Router/router.php?unauthorized_access_request=TRUE");
// }
header('Content-Type: application/json');
require "../Model/user.php";
require "../helpers/functions.php";
if(isset($_POST)){
    if($_POST['password']=="" || $_POST['confirm_password']=="" || $_POST['username']=="" || $_POST['email']==""){
        echo json_encode(["response"=>"please fill in all fields"]);
        exit(0);
    }
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){ 
        echo json_encode(["response"=>"please enter a valid email format"]);
    exit(0);
    }
    if($_POST['password']==$_POST['confirm_password'] ){
        $serial=image_validation();
        $user_info['username']=$_POST['username'];
        $user_info['email']=$_POST['email'];
        $user_info['password']=$_POST['password'];
        $user_info['image_serial']=$serial;
        $user=new User($_POST['username'],$_POST['password'],$_POST['email'],$serial);
       if($user->find()){
        echo json_encode(["response"=>"this email is used in an already existing account"]);
        exit(0);
       }
        else{
            $user=new User($_POST['username'],$_POST['password'],$_POST['email'],$serial);
            $user->create();
            $_SESSION['status']='index';
            $_SESSION['signedup_user']=$_POST['username'];
            echo json_encode(["response"=>$_POST['username']]);
            exit(0);
        }
    }
    else{
        echo json_encode(["response"=>"please re-confirm your password"]);
        exit(0);
    }
}
else{
    echo json_encode(["response"=>"please fill in all fields"]);
}
?>