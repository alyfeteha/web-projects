<?php
    include "../helpers/includes.php";
    define('authorized',TRUE);
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registeration</title>
</head>
<body>
    <form id="signupform"action="../Controllers/signup.php" method="post" enctype="multipart/form-data">
    <label>Enter your Username</label><br>
    <input type="text" name="username" ><br>
    <label>Enter your Email</label><br>
    <input type="text" name="email" ><br>
    <label>Enter your Passoword</label><br>
    <input type="password" name="password" ><br>
    <label>Confirm Passoword</label><br>
    <input type="password" name="confirm_password" ><br>
    <label>Select image to upload</label><br>
    <input type="file" name="file" id="file"><br>
    <input type="submit" value="signup" name="signup"><br>
    </form>
</body>
</html>
<?php
 define('authorized',TRUE);
// if(isset($_GET)){
//     if($_GET['exists']){
//         echo"<script>alert('Account already exist');</script>";
//     }
//     if($_GET['image_accept']){
//         echo"<script>alert('profile picture is too large!');</script>";
//     }
//     if($_GET['password_confirmation_check']){
//         echo"<script>alert('please re-confirm your password!');</script>";
//     }
// }   
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#signupform").submit(function(event){
    var formdata=$("#signupform").serialize();
    $.post("http://localhost/Twitter/Controllers/signup.php",formdata,function(response){
      //$("#answer").show().html(response);
      var user="<?php echo $_SESSION['signedup_user']?>";
      console.log(response,user);
      
      if(response.response!= user){
       alert(response.response);
      }

       else{
        alert("congratulations".concat(user," you are have an account on Twitter login now to procceed into some steps"));
       window.location.href = "http://localhost/Twitter/index.php";
       }
    });
    return false;
  })
});
</script>