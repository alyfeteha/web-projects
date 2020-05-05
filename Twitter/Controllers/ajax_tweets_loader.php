<?php
require_once "../Model/user.php";
require_once "../Model/tweet.php";
header('Content-Type: application/json');
session_start();
$tweets=Tweet::get_all_tweets();
$counter=sizeof($tweets);
$tweet_info=[];
for($i=0;$i<$counter;$i++){
$user=new User("","","","");
$client=$user->get_user_by_id($tweets[$i]['sender_id']);
    $tweet_info[$i]=[
        "username"=>$client->username,
        "body_text"=>$tweets[$i]['body_text']
    ];
   // $tweet_info[$i]['body_text']=$tweets[$i]['body_text'];
   //echo json_encode($tweet_info);
    }
$x=$tweet_info;

echo json_encode($x);