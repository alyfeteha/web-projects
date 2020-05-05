<?php
session_start();
require_once "../helpers/functions.php";
require_once "../helpers/includes.php";
header('Content-Type: application/json');

if(isset($_POST['body_text'])){
$body_text=$_POST['body_text'];
$reciever_id=retrive_user_id($_SESSION['email']);
$sender_id=retrive_user_id($_SESSION['loger_email']);
$image_serial=NULL;
$message=new Message($body_text, $reciever_id,$sender_id,$image_serial);
// $message->create();
$_SESSION['last_msg_id']=$message->create();
}
if(isset($_GET['fresh_start'])){
    $data= get_prev_data();
    foreach($data as $messages){
       $username="";
       $user=get_client_by_id($messages->sender_id);
       if($_SESSION['loger_email']==$user->email){
           $username="You";
       }
       else{
           $user=get_client_by_id(retrive_user_id($_SESSION['email']));
           $username=$user->username;
       }
       $messages_responce.="{$username}::".PHP_EOL."{$messages->body_text}".PHP_EOL."{$messages->time}".PHP_EOL.PHP_EOL;
    }
    echo json_encode(['resp'=>$messages_responce]);
}
else{
    $msgs=new Message("",retrive_user_id($_SESSION['email']),retrive_user_id($_SESSION['loger_email']),"");
    $resvr=get_client_by_id(retrive_user_id($_SESSION['email']));
    $sender=get_client_by_id(retrive_user_id($_SESSION['loger_email']));
    $messages=Message::get_all_after($_GET['after'],$resvr,$sender);
   if(isset($messages)){
       $username="";
       $user=get_client_by_id($messages->sender_id);
       if($_SESSION['loger_email']==$user->email){
           $username="You";
       }
       else{
           $user=get_client_by_id(retrive_user_id($_SESSION['email']));
           $username=$user->username;
       }
       $messages_responce.="{$username}::".PHP_EOL."{$messages->body_text}".PHP_EOL."{$messages->time}".PHP_EOL.PHP_EOL;
   }
   if ( $_GET['after']>=$messages->id){
    echo json_encode([
        "status"=>false,
        "last_id" => $messages[count($messages)-1]->id,
        "body_text" => $messages_responce]);
        exit(0);
   }
    else{
        echo json_encode([
            "status"=>true,
            "last_id" => $messages->id,
            "body_text" => $messages_responce]);
    }
}
   