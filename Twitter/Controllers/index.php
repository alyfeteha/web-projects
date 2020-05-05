<?php
// if(!defined('authorized')){
//     header("Location:../Router/router.php?unauthorized_access_request=TRUE");
// }
header('Content-Type: application/json');
include "../Model/user.php";
session_start();
    if(isset($_POST)){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $error_empty=false;
        $error_email=false;
        $error_password=false;
        if($_POST['email']=="" || $_POST['password']=="" ){
            echo json_encode(["name"=>"fill in all fields"]);
            exit(0);
        }
        elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
            echo json_encode(["name"=>"please write a valid email address"]);
            exit(0);
        }
        else{
    $user=new User("",$_POST['password'],$_POST['email'],"");
    $client=$user->login();
    if(isset($client->username)){
        User::update_user_status('online',$client->email);
        $_SESSION['id']=$client->id;
        $_SESSION["username"]=$client->username;
        $_SESSION['loger_username']=$client->username;
        $_SESSION['email']=$client->email;
        $_SESSION['loger_email']=$client->email;
        $_SESSION["image_serial"]=$client->image_serial;
        $_SESSION['password']=$client->password;
        $_SESSION['status']='index';
        echo json_encode(["name"=>$client->username]);
        }
    else{
        $_SESSION['status']='index';
            echo json_encode(["name"=>"invalid username or password"]);
            exit(0);
        }
    }
   
}
else{
    echo json_encode(["name"=>"surver is currently facing some troubles"]);
}
?>
   