<?php
// if(!defined('authorized')){
//     header("Location:../Router/router.php?unauthorized_access_request=TRUE");
// }
require_once "../helpers/functions.php";
session_start();
if(isset($_POST['edit_account_info'])){
    $_SESSION['status']='to_update_info';
    header("Location:../Router/router.php");
}
if(isset($_POST['edit_tweet_body'])){
    $_SESSION['tweet_id_p']=$_POST['tweet_id'];
    header("Location:../Views/profile.php?edit_body=1");
}
if(isset($_POST['edit_tweet_image'])){
    $_SESSION['tweet_id_p']=$_POST['tweet_id'];
    header("Location:../Views/profile.php?edit_image=1");
}
if(isset($_POST['insert_tweet_image'])){
    $_SESSION['tweet_id_p']=$_POST['tweet_id'];
    header("Location:../Views/profile.php?insert_image=1");
}
if(isset($_POST['submit_edit_image'])){
    $tweet_info['id']=$_POST['tweet_id'];
    if(!isset($_FILES['file']['name'])){
       $tweet_info['image_serial']=NULL;
   }
   else{
       $tweet_info['image_serial']=image_validation();
   }
    Tweet::update($tweet_info);
    header("Location:../Views/profile.php");
}
if(isset($_POST['edit_tweet'])){
        $tweet_info['body_text']=$_POST['body_text'];
        $tweet_info['id']=$_POST['tweet_id'];
        Tweet::update($tweet_info);
        header("Location:../Views/profile.php");
}
if(isset($_POST['comment'])){
    $_SESSION['tweet_id_p']=$_POST['tweet_id'];
    header("Location:../Views/profile.php?comment=1");
}
if(isset($_POST['logout'])){
    $_SESSION['status']='logout';
    User::update_user_status('offline',$_SESSION['email']);
    header("Location:../Router/router.php");
}
if(isset($_POST['delete_tweet'])){
    Comment::delete_tweet_comments($_POST['tweet_id']);
    Tweet::delete($_POST['tweet_id']);
    header("Location:../Views/profile.php");
}
if(isset($_POST['comment_submit'])){
    $serial=image_validation();
    $comment=new Comment($serial,$_POST['comment_text'],$_SESSION['id'],$_POST['tweet_id']);
    $comment->create();
    header("Location:../Views/profile.php");
}
if(isset($_POST['edit_comment'])){
    header("Location:../Views/profile.php?edit_comment=1");
}
if(isset($_POST['delete_comment'])){
    Comment::delete($_POST['comment_id']);
    header("Location:../Views/profile.php");
}
if(isset($_POST['submit_edit_comment'])){
    $comment_info['body_text']=$_POST['body_text'];
    $comment_info['id']=$_POST['comment_id'];
    if(!isset($_FILES['file']['name'])){
        $comment_info['image_serial']=NULL;
    }
    else{
        $comment_info['image_serial']=image_validation();
    }
    Comment::update($comment_info);
    header("Location:../Views/profile.php");
}
if(isset($_GET['message'])){
     
    header("Location:../Views/chat.php");
}

