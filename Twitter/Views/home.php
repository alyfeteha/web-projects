<?php
session_start();
// if($_SESSION['status']!='login'){
//     $_SESSION['status']='index';
//     header("Location:../Router/router.php");
// }
require_once "../helpers/includes.php";
require_once "../helpers/functions.php";
define('authorized',TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>home</title>
</head>
<body>
    <?php
    $loger_id=retrive_user_id($_SESSION['loger_email']);
    $loger=get_client_by_id($loger_id);
    $_SESSION['username']=$loger->username;
    $_SESSION['email']=$loger->email;
    $_SESSION['image_serial']=$loger->image_serial;
    if(!empty($loger->image_serial)):
        $_SESSION['status']='to_profile';
    ?>
    <a href="profile.php"><img src="<?php echo "../uploads/".$loger->image_serial."."."jpg" ?>" width="80" height="80" alt="<?php echo $loger->username ?>"></a>
   <?php
   endif;
   if(empty($loger->image_serial)):
    $_SESSION['status']='to_profile';
    ?>
    <a href="profile.php"><img src="../uploads/whatsapp-dp-latest-1.jpg" width="70" height="70" alt="<?php echo $loger->username ?>"></a>
    <?php
    endif;
   ?>
   <h2><?php echo $loger->username; ?></h2>
    <input type="submit" id="write_tweet" name="tweet_request" value="what's on your mind?"><br>
    <?php
    ?>
    <div id="write_tweet_response">
    <form action="../Controllers/home.php" method="post" enctype="multipart/form-data">
    <textarea rows="7" cols="100" name="body_text"></textarea>
    <input type="file" name="file"><br>
    <input type="submit" name="tweet_submit" value="tweet">
    </form>
    </div>
    <?php
    $client=get_post_owner($loger->username,$loger->email);
    $tweets=display_tweets();
    $counter=0;
    $loger_id=retrive_user_id($_SESSION['loger_email']);
    $d=0;
    foreach($tweets as $tweet):
    $d++;
    $client=get_client_by_id($tweet['sender_id']);
    $status=get_status($client);
    if(!$client->image_serial):
    ?>
    <a href="profile.php?user=<?php echo $client->email?>"><img src="../uploads/whatsapp-dp-latest-1.jpg" width="50" height="50"></a>
    <?php
    endif;
    if($client->image_serial):
    ?>
    <a href="profile.php?user=<?php echo $client->email?>"><img src="<?php echo "../uploads/".$client->image_serial."."."jpg" ?>" width="50" height="50"></a>
    <?php
    endif;
    ?>
        <h2><?php echo $client->username."<br>";?></h2>
        <p><?php echo $status."<br>"?></p>
        <h3 style="color:red;"><?php echo $tweet['body_text'];?></h3>
    <?php
    if(!empty($tweet['image_serial'])):
    ?>
    <br>
    <img src="<?php echo "../uploads/".$tweet['image_serial']."."."jpg" ?>" width="200" height="200"><br>
    <?php
    endif;
    ?>
    <div id="write_comment">
    <form action="../Controllers/home.php" method="get">
    <input type="hidden" name="tweet_id"  value="<?php echo $tweet['id']?>">
    <input type="submit" value="comment" name="comment">
    </form>
    </div>
    <?php
    // var_dump($_SESSION);
    if($_GET['comment']==1):
        // var_dump($_SESSION['tweet_id']==$tweet['id']);
        // var_dump($_SESSION['tweet_id'],$tweet['id']);
         $flag=0;
         if($_SESSION['tweet_id'] == $tweet['id']):
                 $flag=1;
    ?>
     <form action="../Controllers/home.php" method="POST" enctype="multipart/form-data">
     <input type="hidden" name="tweet_id" value="<?php echo $tweet['id']?>">
     <input type="hidden" name="loger_id" value="<?php  echo $loger_id ?>">
    <textarea rows="1" cols="50" name="body_text" placeholder="write your comment here"></textarea>
    <input type="file" name="file" ><br>
    <input type="submit" name="comment_submit" value="comment">
    </form>
    <?php
     endif; 
     if($flag){
     continue;
    }
    endif;
    if($tweet['sender_id']==$loger_id):
    ?>
    <form action="../Controllers/home.php" method="get">
    <input type="hidden" name="tweet_id" value="<?php echo $tweet['id']?>">
    <input type="submit" value="edit body" name="edit_tweet_body">
    <input type="submit" value="Delete Tweet" name="delete_tweet">
    </form>
    <?php
    if($tweet['image_serial']):
    ?>
     <form action="../Controllers/home.php" method="get">
     <input type="hidden" name="tweet_id" value="<?php echo $tweets[$counter]['id']?>">
    <input type="submit" value="edit image" name="edit_tweet_image">
    </form>
    <?php
    endif; 
    if(!$tweet['image_serial']):
    ?>
    <form action="../Controllers/home.php" method="get">
    <input type="hidden" name="tweet_id" value="<?php echo $tweet['id']?>">
    <input type="submit" value="insert image" name="insert_tweet_image">
    </form>
    <?php
    endif;
    if($_GET['edit_body']):
        $flag=0;
        //foreach($tweets as $tweet):
            if($_SESSION['tweet_id']==$tweet['id']):
                $flag=1;
    ?>
        <form action="../Controllers/home.php" method="get">
        <input type="hidden" name="tweet_id" value="<?php echo $tweets[$counter]['id']?>">
        <textarea rows="7" cols="100" name="body_text"></textarea>
        <input type="submit" name="edit_tweet" value="Edit tweet">
        </form>
    <?php
            endif;
            if($flag){
            continue;
            }
        //endforeach;
        endif;
    if($_GET['edit_image']):
        $flag=0;
            if($_SESSION['tweet_id']==$tweet['id']):
                $flag=1;
    ?>
    <form action="../Controllers/home.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="tweet_id" id="<?php echo $tweet['id'] ?>"value="<?php echo $tweet['id'] ?>">
     <input type="file" name="file" id="file"><br>
    <input type="submit" value="change tweet image" name="change_tweet_image"><br>
    </form>
    <?php
    endif;
     if($flag){
     continue;
     }
    //endforeach;
    endif;
    endif;
    ?>
    <?php
    $comments=get_comments_on_tweet($tweet['id']);
     if(isset($comments)):
     $itr=0;
     while($itr<sizeof($comments)):
        $commenter=get_client_by_id($comments[$itr]['sender_id']);
          if(!$commenter->image_serial):
             ?>
             <img src="../uploads/whatsapp-dp-latest-1.jpg" width="30" height="30">
             <?php
            endif;
            if($commenter->image_serial):
             ?>
            <img src="<?php echo "../uploads/".$commenter->image_serial."."."jpg" ?>" width="50" height="50">
             <?php
            endif;
             ?>
             <h4 style="color:green"><?php echo $commenter->username."<br>";?></h4>
             <?php
        if(!empty($comments[$itr]['body_text'])):
         ?>
      <h4 style="color:green"><?php echo $comments[$itr]['body_text'];?></h4><br>
         <?php
    endif;
         if(!empty($comments[$itr]['image_serial'])):
     ?><br>
    <img src="<?php echo "../uploads/".$comments[$itr]['image_serial']."."."jpg" ?>" width="40" height="30"><br>
     <?php
     endif;
        
     if($loger_id==$commenter->id): 
    ?>
    <form action="http://localhost/Twitter/Controllers/home.php" id="options" method="get">
    <input type="hidden" name="comment_id_options" value="<?php echo $comments[$itr]['id'] ?>">
    <!-- <input type="submit" value="edit comment" name="edit_comment"> -->
    <input type="submit" id="delete" value="delete comment" name="delete_comment">
    </form>
    <?php
    if(isset($_GET['edit_comment'])):
        $flag=0;
        if($_SESSION['comment_id']==$comments[$itr]['id']):
        $flag=1;
?>
    <div id="comment_edit">
        <form action="http://Controllers/home.php" method="POST">
            <input type="hidden" name="comment_id" value="<?php echo $comments[$itr]['id'] ?>">
            <input type="file" name="file" id="file"><br>
            <input type="submit" value="upload" name="submit_upload_image">
        </form>
        <form action="../Controllers/home.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="comment_id" value="<?php echo $comments[$itr]['id'] ?>">
            <textarea name="body_text" cols="30" rows="1" placeholder="write the new comment here"></textarea>
            <input type="submit" value="edit comment" name="submit_edit_comment">
        </form>
    </div>
    <?php
    endif;
     if($flag){
        break;
        }
    endif;
    endif;
    $itr++;
    endwhile;
     endif;
    $counter++;
    endforeach;
    ?>
     <!-- <button>show more tweets</button> -->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>


    $(document).ready(function(){

        $("#write_tweet").show();
        $("#write_tweet_response").hide();
        $("#write_tweet").click(function(){
  $.ajax({url: "http://localhost/Twitter/Views/home.php", success: function(){
    $("#write_tweet_response").show();
    $("#write_tweet").hide();
  }});
   });
});

    $("#options").submit(function(event) {
    var formdata=$("#options").serialize();
    console.log(formdata);
    $.ajax({
            url:"http://localhost/Twitter/Controllers/home.php",
            type:'GET',
            datatype:'json',
            data:formdata,
            success:function(response){
                console.log(response.response);
                return;
            }
    });
return false;
    });

   
    

</script>