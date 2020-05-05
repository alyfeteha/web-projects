<!DOCTYPE html >
<html lang="en" class="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedHelp</title>
   
    <link href="https://fonts.googleapis.com/css?family=Cantata+One|Oleo+Script&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="styles.css">
</head>
<div >
<body >
<h1 class="title"align="center">MedHelp</h1>
<h2 align="center">welcome to MedHelp where your health is the to priority </h2>
<!-- <div id="main"> -->

        <div id="choice_of_job" align="center">
                <h1  align="center">please select your Category to proceed</h1><br>
                <input type="button"id="doctor" class="button"name="doctor"value="Doctor"><br><br>
                <input type="button"id="patient" class="button"name="patient"value="Patient"><br><br>
                <input type="button" id="analysis_lab"  class="button"name="analyst"  value="Analysis_lab"><br><br>
                <input type="button"id="pharmast" class="button"name="pharmacist"value="Pharmacist"><br><br>
                <a href="http://localhost/MedHelp/Views/Registeration.php">Don't have an account</a>
        </div>
    <div id="login_doctor" align="center">
        <form action="http://localhost/MedHelp/Controllers/index.php" method="POST"id="doctr">
            <input type="hidden" name="doc" value="doctor">
            <h1> National Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h1><br>
            <input type="text" name="national_number" size="50" autofocus placeholder="enter your national number here.."><br>
            <h1><div align="center"id="national_msg_d" style="color:red"></div></h1>
            <h1>Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h1><br>
            <input type="password" name="password" size="50" placeholder="password..."><br><br>
            <h1><div align="center"id="password_msg_d" style="color:red"></div></h1>
            <input type="submit" class="button" name="login_doctor" value="Login"><br><br>
        </form>
        <a href="http://localhost/MedHelp/Views/Registeration.php">Don't have an account</a>
        <a href="http://localhost/MedHelp/Views/register.php">forgot my password</a><br><br>
        <input type="button" class="button1" id="back_d"value="back to choice menu">
    </div>
    <div id="login_pharma" align="center">
        <form action="http://localhost/MedHelp/Controllers/index.php" id="pharma">
            <input type="hidden" name="pharm" value="pharmacist">
             <h2>National Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="text" name="national_number" size="50" autofocus placeholder="enter your national number here.."><br>
            <div align="center"id="national_msg_ph"></div>
            <h2>Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="password" name="password" size="50" placeholder="password..."><br>
            <div align="center"id="password_msg_ph"></div>
            <input type="submit" class="button" name="login_pharma" value="Login"><br><br>
        </form>
        <a href="http://localhost/MedHelp/Views/Registeration.php">Don't have an account</a>
        <a href="http://localhost/MedHelp/Views/register.php">forgot my password</a><br><br>
        <input type="button" class="button" id="back_ph"value="back to choice menu">
    </div>
    <div id="login_patient" align="center">
        <form action="http://localhost/MedHelp/Controllers/index.php" method="post" id="patint">
            <input type="hidden" name="pat" value="patient">
             <h2>National Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="text" name="national_number" size="50" autofocus placeholder="enter your national number here.."><br>
            <div align="center"id="national_msg_p" style="color:red"></div>
            <h2>Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="password" name="password" size="50" placeholder="password..."><br>
            <div align="center"id="password_msg_p" style="color:red"></div>
            <input type="submit" class="button"name="login_patient" value="Login"><br><br>
        </form>
        <a href="http://localhost/MedHelp/Views/Registeration.php">Don't have an account</a>
        <a href="http://localhost/MedHelp/Views/register.php">forgot my password</a><br><br>
        <input type="button"class="button" id="back_p"value="back to choice menu">
    </div>
    <div id="login_lab" align="center">
        <form action="http://localhost/MedHelp/Controllers/index.php" method="post" id="lab" enctype="multipart/form-data">
            <input type="hidden" name="lab" value="lab">
             <h2>Lab Name(Legal Name):<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="text" name="name" size="50" autofocus placeholder="enter Lab name here.."><br>
            <div align="center"id="name_msg_l" style="color:red"></div>
            <h2>Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="password" name="password" size="50" placeholder="password..."><br>
            <div align="center"id="password_msg_l" style="color:red"></div>
            <input type="submit" name="login_lab" value="Login"><br><br>
        </form>
        <a href="http://localhost/MedHelp/Views/Registeration.php">Don't have an account</a>
        <a href="http://localhost/MedHelp/Views/register.php">forgot lab password</a><br><br>
        <input type="button" class="button"id="back_l"value="back to choice menu">
    </div>

</body>
</div>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$("#choice_of_job").show();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").hide();


$("#pharmast").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
$("#choice_of_job").hide();
$("#login_pharma").show();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").hide();
}});
});
$("#analysis_lab").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
   
$("#choice_of_job").hide();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").show();
$("#login_patient").hide();

}});
});
$("#doctor").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){

    $("#choice_of_job").hide();
$("#login_pharma").hide();
$("#login_doctor").show();
$("#login_lab").hide();
$("#login_patient").hide();
}});
});
$("#patient").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
    
$("#choice_of_job").hide();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").show();

}});
});




$("#back_l").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
$("#choice_of_job").show();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").hide();
}});
});
$("#back_p").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
   
    $("#choice_of_job").show();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").hide();

}});
});
$("#back_d").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){

    $("#choice_of_job").show();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").hide();
}});
});
$("#back_ph").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
    
    $("#choice_of_job").show();
$("#login_pharma").hide();
$("#login_doctor").hide();
$("#login_lab").hide();
$("#login_patient").hide();

}});
});
});
$("#patint").submit(function(event){
    var formdata=$("#patint").serialize();
    console.log(formdata);
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/index.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
            console.log(response);
            if(response.response=="national_number"){
             if(response.error=="empty"){
             $("#national_msg_p").html('please enter your national number');
              return;
          }
        }
            else if(response.response=="password"){
             if(response.error=="empty"){
            $("#password_msg_p").html('please fill in password field');
              return
            }
        }
      else if(response.response=="valid"){
        window.location.replace("http://localhost/MedHelp/Views/home.php");
      }
      else if(response.response=='invalid national number or password'){
        alert(response.response);
          
      }
            }
    });
    return false;
  });

$("#lab").submit(function(event){
    var formdata=$("#lab").serialize();
    console.log(formdata);
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/index.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
              console.log(response);
        if(response.response=="name"){
          if(response.error=="empty"){
             $("#name_msg_l").html('empty lab name');
              return;
          }
      }
      else if(response.response=="password"){
          if(response.error="empty"){
            $("#password_msg_l").html('please fill in password field');
              return;
          }
      }
      else if(response.response=="valid"){
         window.location.replace("http://localhost/MedHelp/Views/welcome.php");
         return;
      }
      else if(response.response=='invalid commercial name or password'){
          alert(response.response);
          return;
      }
      else if(response.response=="no account available using these data"){
          alert(response.response);
          return;
      }
    }
    });
    return false;
  });


  $("#doctr").submit(function(event){
    var formdata=$("#doctr").serialize();
    console.log(formdata);
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/index.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
            console.log(response);
            if(response.response=="national_number"){
             if(response.error=="empty"){
             $("#national_msg_d").html('please enter your national number');
              return;
          }
        }
            else if(response.response=="password"){
             if(response.error="empty"){
            $("#password_msg_d").html('please fill in password field');
              return
            }
        }
      else if(response.response=="valid"){
        window.location.replace("http://localhost/MedHelp/Views/welcome.php");
        return;
      }
      else if(response.response=='invalid national number or password'){
        alert(response.response);
          
      }
            }
    });
    return false;
  });

  $("#pharma").submit(function(event){
    var formdata=$("#pharma").serialize();
    console.log(formdata);
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/index.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
            console.log(response);
            if(response.response=="national_number"){
             if(response.error=="empty"){
             $("#national_msg_ph").html('please enter your national number');
              return;
          }
        }
            else if(response.response=="password"){
             if(response.error="empty"){
            $("#password_msg_ph").html('please fill in password field');
              return
            }
        }
      else if(response.response=="valid"){
        window.location.replace("http://localhost/MedHelp/Views/welcome.php");
      }
      else if(response.response=='invalid national number or password'){
        alert(response.response);
          
      }
            }
    });
    return false;
  });

  





</script>
