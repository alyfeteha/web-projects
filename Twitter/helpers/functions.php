<?php
 require_once "includes.php";
 require_once "../Model/user.php";
 require_once "../Model/comment.php";
 require_once "../Model/tweet.php";
 require_once "../Model/message.php";
 session_start();
//   header('Content-Type: application/json');
function image_validation(){
    $file=$_FILES['file'];
    $file_name=$_FILES['file']['name'];
    $file_temp_loc_name=$_FILES['file']['tmp_name'];
    $file_size=$_FILES['file']['size'];
    $file_error=$_FILES['file']['error'];
    $file_type=$_FILES['file']['type'];
    $file_ext=explode(".",$file_name);
    $file_act_ext=strtolower(end($file_ext));
    $allowed_ext=array('jpg','jpeg','png');
    $allowed=1;
    if(in_array($file_act_ext,$allowed_ext)){
        if($file_error===0){
            if($file_size<5000000){
                $serial=uniqid('',true);
                $file_name_new=$serial.".".$file_act_ext;
                $file_dest='../uploads/'.$file_name_new;
                move_uploaded_file($file_temp_loc_name,$file_dest);
            }
            else{
               $allowed=0;
            }
        }
        else{
            $allowed=0;
        }
    }
    else{
        $allowed=0;
    }
    return $serial;
}
function display_tweets(){
    $tweets=Tweet::get_all_tweets();
    return $tweets;
}
function get_post_owner($username,$email){
    $user=new User($username,"",$email,"");
    $client=$user->find();
    return $client;
}
function retrive_user_id($email){
   return  User::get_user_id($email);
}
function get_client_by_id($data){
    return User::get_user_by_id($data);
}
function get_comments_on_tweet($tweet_id){
    $comment=new Comment("","","",$tweet_id);
    $tweet_comments=$comment->find();
    return $tweet_comments;
}
function get_wall_tweets($email){
    return User::get_tweets(retrive_user_id($email));
}
function get_chat_messages(){
$msgs=new Message("",retrive_user_id($_SESSION['email']),retrive_user_id($_SESSION['loger_email']),"");
 $data=$msgs->find();
 $_SESSION['last_msg_id']=$data[count($data)-1]->id;
}
function get_last_message(){
    return Message::get_last_msg_id();
}
function get_prev_data(){
$msgs=new Message("",retrive_user_id($_SESSION['email']),retrive_user_id($_SESSION['loger_email']),"");
$data=$msgs->find();
$_SESSION['last_msg_id']=$data[count($data)-1]->id;
 return $data;
}
function get_status($client){
    $user=new User("","",$client->email,"");
    return $user->find()->status;
}
