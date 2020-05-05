<?php
if(!defined('authorized')){
    header("Location:../Router/router.php?unauthorized_access_request=TRUE");
}
if(isset($_GET)){
    $msg = "First line of text\nSecond line of text";

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);
    
    // send email
    $header= $_GET['recovery_email'];
    mail("alyfeteha1@gmail.com","My subject",$msg,$header);
?>