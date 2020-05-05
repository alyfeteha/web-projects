<?php
define('authorized',TRUE);
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Twitter</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Twitter</h1>
    <form  id="f"action="http://localhost/Twitter/Controllers/index.php" method="POST">
    <label>Email</label><br>
    <input id="form-email" type="text" name="email" placeholder="Enter your Email"><br>
    <label>Password</label><br>
    <input id="form-password" type="password" name="password" placeholder="*****"><br>
    <input id="form-submit" type="submit" name="login" value="Login" ><br>
    
    </form>
    <a href="./Views/reset_password.php">Forgot Password!</a><br>
    <a href="./Views/signup.php">Not Registered!</a>
    <!-- <?php $_SESSION['status']='signup'?> -->
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
//     $("#form-submit").click(function(){
//   $.ajax({url: "http://localhost/Twitter/Controllers/index.php", success: function(result){
//     console.log(result.username);
//   }})
// });
$(document).ready(function(){
  $("#f").submit(function(event){
    var formdata=$("#f").serialize();
    $.post("http://localhost/Twitter/Controllers/index.php",formdata,function(response){
      //$("#answer").show().html(response);
      var user="<?php echo$_SESSION['loger_username']?>";
      console.log(response,user);
      if(response.name!= user)
       alert(response.name);
       else{
       window.location.href = "http://localhost/Twitter/Views/home.php";
       }
    });
    return false;
  })
});
</script>