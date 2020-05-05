<?php
// if(!defined('authorized')){
//     header("Location:../Router/router.php?unauthorized_access_request=TRUE");
// }
header('Content-Type: application/json');
require_once "../helpers/functions.php";
// require_once '../Model/comment.php';
// session_start();
// $_SESSION['status']='login';
// if(isset($_GET['tweet_request'])){
    
//     header("Location:../Views/home.php?tweet=1");
// }
// if(isset($_POST['tweet_submit'])){
//     $serial="";
//     $body=$_POST['body_text'];
//     $sender= new User($_SESSION['username'],"",$_SESSION['email'],"");
//     $client=$sender->find();
//     if(isset($_FILES['file']['name'])){
//         $serial=image_validation();
//      }
//     $tweet=new Tweet($body,$client->id,$serial);
//     $tweet->create();
//     header("Location:../Router/router.php");
// }

// if(isset($_GET['edit_tweet_body'])){
//     $_SESSION['tweet_id']=$_GET['tweet_id'];
//     header("Location:../Views/home.php?edit_body=1");
// }
// if(isset($_GET['delete_tweet'])){
//    Comment::delete_tweet_comments($_GET['tweet_id']);
//    Tweet::delete($_GET['tweet_id']);
//    header("Location:../Views/home.php");
// }

// if(isset($_GET['comment'])){
//     $_SESSION['tweet_id']=$_GET['tweet_id'];
//     header("Location:../Views/home.php?comment=1");
// }
// if(isset($_GET['edit_tweet_image']) || isset($_GET['insert_tweet_image'])){
//     $_SESSION['tweet_id']=$_GET['tweet_id'];
//     header("Location:../Views/home.php?edit_image=1");
// }
//  if(isset($_POST['change_tweet_image'])){
//      $tweet_info['id']=$_POST['tweet_id'];
//      if(!isset($_FILES['file']['name'])){
//         $tweet_info['image_serial']=NULL;
//     }
//     else{
//         $tweet_info['image_serial']=image_validation();
//     }
//      Tweet::update($tweet_info);
//      header("Location:../Views/home.php");
//  }
//  if(isset($_GET['edit_tweet'])){
//     $tweet_info['body_text']=$_GET['body_text'];
//     $tweet_info['id']=$_GET['tweet_id'];
//     Tweet::update($tweet_info);
//     header("Location:../Views/home.php");
// }
// if(isset($_POST['comment_submit'])){
//     $serial=image_validation();
//     $comment=new Comment($serial,$_POST['body_text'],$_POST['loger_id'],$_POST['tweet_id']);
//     $comment->create();
//     header("Location:../Views/home.php");
// }













// if(isset($_GET['edit_comment'])){
//     $_SESSION['comment_id']=$_GET['comment_id'];
//     header("Location:../Views/home.php?edit_comment=1");
// }
// if(isset($_GET['delete_comment'])){
//     Comment::delete($_GET['comment_id']);
//     header("Location:../Views/home.php");
// }
if(isset($_GET['comment_id_options'])){
    Comment::delete($_GET['comment_id_options']);
    echo json_encode(['response'=>$_GET]);
    
}
// if(isset($_POST['submit_edit_comment'])){
//     $comment_info['body_text']=$_POST['body_text'];
//     $comment_info['id']=$_POST['comment_id'];
//     if(!isset($_FILES['file']['name'])){
//         $comment_info['image_serial']=NULL;
//     }
//     else{
//         $comment_info['image_serial']=image_validation();
//     }
//     Comment::update($comment_info);
//     header("Location:../Views/home.php");
// }





