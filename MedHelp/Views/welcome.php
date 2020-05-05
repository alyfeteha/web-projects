<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Welcome</title>
</head>
<body class="bg">

    <div id="doc" align="center">
        <h1 align="center"><?= 'welcome Dr.'.$_SESSION['loger_name']?></h1>
        <?php if(!empty($_SESSION['loger_image'])): ?>
            <img src="<?php echo'http://localhost/MedHelp/uploads/'.$_SESSION['loger_image']?>" width=200 height=200   alt="<?php echo $_SESSION['loger_name']?>">
        <?php
            endif;
            if(empty($_SESSION['loger_image'])):
        ?>
                <img src="http://localhost/MedHelp/uploads/ano.jpg" width=200 height=200 alt="<?php echo $_SESSION['loger_name']?>">
        <?php
            endif;
        ?>
    </div>
    <div id='log_to_patient_profile' align="center">
        <form action="http://localhost/MedHelp/Controllers/welcome.php" id='log_patient' method="POST">
            <input type="hidden" name="pat" value="patient">
            <h2>Enter the national number of the patient</h2>
            <input type="text" name='national_number' size="50"placeholder='enter the patient national number'><br><br>
            <div id="national_msg_d" style="color:red"></div>
            <input type="submit" class="button" value="Search">
        </form>
    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
var selector="<?php echo $_SESSION['identity']?>";
$('#doc').hide();
if(selector=='doctor' || selector=='pharma'){
    $('#doc').show();
}
})
$('#log_patient').submit(function(){
    var formdata=$("#log_patient").serialize();
    console.log(formdata);
    $.ajax({url:'http://localhost/MedHelp/Controllers/welcome.php',
        type:'POST',
        datatype:'json',
        data:formdata,
        success:function(response){
            console.log(response);
            if(response.response=='valid'){
                window.location.replace("http://localhost/MedHelp/Views/home.php");
            }
            else if(response.error=='empty'){
                $('#national_msg_d').html('please fill in the national number (correct form 14 digits no characters)');
                return;
            }
            else{
                alert('invalid patient national number');
                return;
            }
        }
});

return false;

});
$("#view_profile").click(function(){
    window.location.replace("http://localhost/MedHelp/Views/main.php");
})




</script>