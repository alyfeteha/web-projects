<?php
define('authorized',TRUE);
session_start();
// if($_SESSION['status']!='to_profile'){
//     $_SESSION['status']='index';
//     header("Location:../Router/router.php");
// }
require_once "../helpers/includes.php";
require_once "../helpers/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
<?php
// var_dump($_SESSION);
// echo "<br>";
$no_editing_allowed=0;
if(isset($_GET['user']) && $_GET['user']!=$_SESSION['loger_email']){
    $user=get_client_by_id(User::get_user_id($_GET['user']));
    $_SESSION['image_serial']=$user->image_serial;
    $_SESSION['username']=$user->username;
    $_SESSION['email']=$_GET['user'];
    $no_editing_allowed=1;
}
if(isset($_SESSION['image_serial'])):
?>
<img src="<?php echo "../uploads/".$_SESSION['image_serial']."."."jpg" ?>" wdith="50" height="50" alt="<?php echo $_SESSION['username'] ?>"><br>
    <?php
    endif;
    if(!isset($_SESSION['image_serial'])):
    ?>
    <img src="<?php echo "../uploads/whatsapp-dp-latest-1.jpg" ?>" wdith="50" height="50" alt="<?php echo $_SESSION['username'] ?>"><br>
    <?php
    endif;
    echo $_SESSION['username'];
    if(!$no_editing_allowed):
    ?>
    <form action="../Controllers/profile.php" method="POST" enctype="multipart/form-data">
     <input type="submit" name="edit_account_info" value="Edit">
     <input type="submit" value="Logout" name="logout">
     <input type="submit" name="follow" value="Follow">
     <input type="submit" value="followers" name="Followers">
     </form>
</body>
</html>
<?php
endif;
if($no_editing_allowed):
?>
<form action="../Controllers/profile.php" method="GET">
<input type="submit" name="follow" value="Follow">
     <input type="submit" value="followers" name="Followers">
     <input type="submit" name="message" value="Message">
</form>
<?php
endif;
$tweets=get_wall_tweets($_SESSION['email']);
if(!isset($tweets)):
?>
    <h1><a href="home.php">Write your first tweet now !</a></h1>
<?php
endif;
if(isset($tweets)):
if($tweets):
foreach($tweets as $tweet):
$counter=0;
$comments=get_comments_on_tweet($tweet['id']);
?>
<h3 style="color:red"><?php echo $tweet['body_text']?></h3>
<?php
if(!empty($tweet['image_serial'])):
?>
<br>
<img src="<?php echo "../uploads/".$tweet['image_serial']."."."jpg" ?>" width="200" height="200"><br>
<?php
endif;
if(!$no_editing_allowed):
?>
<form action="../Controllers/profile.php" method="POST">
<input type="hidden" name="tweet_id" value="<?php echo $tweet['id']?>">
<input type="submit" value="edit tweet body" name="edit_tweet_body">
<input type="submit" value="comment" name="comment">
<input type="submit" value="Delete Tweet" name="delete_tweet">
</form>

<?php
endif;
if(!$no_editing_allowed):
if($tweet['image_serial']):
?>
<form action="../Controllers/profile.php" method="POST">
<input type="hidden" name="tweet_id" value="<?php echo $tweet['id'] ?>">
<input type="submit" value="edit image" name="edit_tweet_image">
</form>
<?php
endif;
if(!isset($tweet['image_serial'])):
?>
<form action="../Controllers/profile.php" method="POST">
<input type="hidden" name="tweet_id" value="<?php echo $tweet['id'] ?>">
<input type="submit" value="insert image" name="insert_tweet_image">
</form>
<?php
endif;
endif;
if($_GET['comment'] && $_SESSION['tweet_id_p']==$tweet['id']):
?>
<form action="../Controllers/profile.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="tweet_id" value="<?php echo $tweet['id'] ?>">
<textarea name="comment_text" cols="30" rows="1" placeholder="write your comment here"></textarea>
<input type="file" name="file" id="file">
<input type="submit" name="comment_submit" value="comment">
</form>
<?php
endif;
if($_GET['edit_body']):
?>
    <form action="../Controllers/profile.php" method="POST">
    <input type="hidden" name="tweet_id" value="<?php echo $tweet['id'] ?>">
    <textarea rows="7" cols="100" name="body_text"></textarea>
    <input type="submit" name="edit_tweet" value="Edit tweet">
    </form>
<?php
endif;
if($_SESSION['tweet_id_p']==$tweet['id']):
if($_GET['edit_image'] || $_GET['insert_image']):
?>
<form action="../Controllers/profile.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="tweet_id" value="<?php echo $tweet['id'] ?>">
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit_edit_image" value="upload now">
</form>
<?php
endif;
  endif; 

if(isset($comments)):
foreach($comments as $comment):
$client=get_client_by_id($comment['sender_id']);
if($client->image_serial):
?>
<img src="<?php echo "../uploads/".$client->image_serial."."."jpg" ?>" width="30" height="30">
<?php
endif;
if(!$client->image_serial):
?>
<img src="<?php echo "../uploads/"."whatsapp-dp-latest-1"."."."jpg" ?>" width="30" height="30">
<?php
endif;
echo $client->username."<br>";
if($comment['body_text']):
?>
 <h4 style="color:green"><?php echo $comment['body_text']?></h4><br>
<?php
endif;
if($comment['image_serial']):
?>
<img src="<?php echo "../uploads/".$comment['image_serial']."."."jpg" ?>" width="30" height="30">
<?php
endif;
// echo $client->username;
if($comment['sender_id']==$_SESSION['id']):
    ?>
    <form action="../Controllers/profile.php" method="POST">
        <input type="hidden" name="comment_id" value="<?php echo $comment['id'] ?>">
        <input type="submit" value="edit comment" name="edit_comment">
        <input type="submit" value="delete comment" name="delete_comment">
        </form>
        <?php
        if(isset($_GET['edit_comment'])):
        ?>
        <form action="../Controllers/profile.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="comment_id" value="<?php echo $comment['id']?>">
        <input type="file" name="file" id="file"><br>
        <textarea name="body_text" cols="30" rows="1" placeholder="write the new comment here"></textarea>
        <input type="submit" value="edit comment" name="submit_edit_comment">
        </form>
        <?php
        endif;
    endif;
endforeach;
endif;

if($flag){
continue;
}
endforeach;
endif;
endif;
?>
