<?php
require_once "../helpers/functions.php";
get_chat_messages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#f").submit(function(event){
    var formdata=$("#f").serialize();
    $.post("http://localhost/Twitter/Controllers/chat.php",formdata,function(){
      return false;
    });
    document.f.reset();
    return false;
  })
});
var last_msg="<?php echo $_SESSION['last_msg_id']?>";
setInterval(function(){ 
  
    $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "http://localhost/Twitter/Controllers/chat.php?after="+last_msg,             
        dataType: "json",   //expect html to be returned                
        success: function(response){    
          if(response.status==true){               
            $("#messages").append(response.body_text); 
            last_msg=response.last_id;
          }
            //last_msg=last_msg-1;
            console.log("last_msg"+ " "+last_msg,"last_id"+ " "+response.last_id,"response"+ " "+response.status,"status"+" "+status);
        }
    }); 
    }, 1000);
var flag=1;
var msgs;
let test_url = "http://localhost/Twitter/Controllers/chat.php?fresh_start=1";
let success_call_back = function(responce){
  $("#messages").html(responce.resp);
return
}
let error_call_back = function(responce){
    alert("somthing went wrong please try again later!");
}
let ajax_object =  {
    url: test_url , 
    success: success_call_back,
    error: error_call_back
};
$(document).ready(function(){
 
    $.ajax(ajax_object);
   
});

</script>
</head>
<body style="margin: 0; overflow:hidden;">
    <textarea id="messages" style="height:88vh;" row="15" cols="50"></textarea>
    <form action="../Controllers/chat.php" name="f"id="f" method="POST">
    <input type="hidden" id="last_messsage_id" value="<?php echo $_SESSION['last_msg_id']?>">
    <input type="text" id="message" name="body_text" autofocus autocomplete="off"placeholder="type message here..." style="flex:2;">
    <input type="submit" name="send" id="send"value="Send">
    </form>
</body>
</html>
