<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">
    <title>Document</title>
</head>
<body>
    <div align="center">
        <img src="<?php echo'http://localhost/MedHelp/uploads/'.$_SESSION['image']?>" width=200 height=200 alt="<?php echo $_SESSION['patient_name']?>"><br>
    </div>
        <h2>Full Name:</h2>
        <h2 style="color:white"><?php echo $_SESSION['patient_name']?></h2>
        <h2>Gender:</h2>
        <h2 style="color:white"><?php echo $_SESSION['gender']?></h2>
        <h2>Date Of Birth:</h2>
        <h2 style="color:white"><?php echo $_SESSION['dob']?></h2><br>
        <h2 id="address">Address Of Residence:</h2>
        <h2 id="address_val"style="color:blue"><?php echo $_SESSION['address']?></h2>
        <h2>Contact:</h2>
        <h2 style="color:white"><?php echo $_SESSION['contact']?></h2><br>
        
        <input type="button" class="button"id="enter" value="Add New Diagnosis">

        <form action="http://localhost/MedHelp/Controllers/home.php" id="histor" method="post">
        <input type="hidden" name="history" value="his">
        <input type="submit" class="button" value="view History of diseases">
        </form>
        
        <div id="dg_doctor" align="center">
            <form action="http://localhost/Controllers/home.php" id="dg_form"method="POST">
                <input type="hidden" name="diag" value="diagnosis">
                <h2>Enter Diagnosis:<h2>
                <textarea name="dg_body" cols="50" rows="10"></textarea>
                <h2>Enter prescribed medicine if needed:</h2>
                <input type="text" name="medicine" size="50" placeholder="medicine name"><br>
                <h2>Enter medicine dose required:</h2>
                <input type="text" name="conc" size="50"placeholder="Units/mg/mL...."><br>
                <h2>Enter Recommended period of drug use:</h2>
                <input type="text" name="days" size="50"placeholder="days"><br>
                <h2>Enter lab analysis name if required:<p style="color:red;white-space:nowrap;display:inline-block">please write correct spelling to avoid inaccuracy</p></h2>
                <input type="text" name="analysis_name" size="50"placeholder="scientific name"><br>
                <h2>Enter Date of visit(date when diagnosis is done):</h2>
                <input type="text" name="date" size="50"placeholder="yyyy-mm-dd"><br>
                <input type="submit" class="button"value="save diagnosis">
            </form>
        </div>
        <div id="prev">
        <h2> Previous diagnosises:</h2>
        <h3><textarea id="prev_diagnosis" cols="120" rows="10"></textarea></h3>
        </div>
        <div id="p">
        <form action="http://localhost/MedHelp/Controllers/home.php" id="pharma_com" method="post">
        <input type="hidden" name="comment_pharma" value="com">
        <input type="submit"  class="button"value="Give your comments about the drugs">
        </form>
        </div>
        <div id="pharma_comment">
                <form action="http://localhost/MedHelp/Controllers/home.php" id="pharma_form" method="post">
                <input type="hidden" name="comph" value="cph">
                <h2>Enter your comments about the drugs prescribed by the Doctor</h2>
                <textarea name="comment_body" cols="50" rows="10"></textarea>
                <h2>state if you sold the drugs to the patient type the date of selling:</h2>
                <input type="text" name="date_of_sold" size="50" placeholder="yyyy-mm-dd"><br>
                <input type="submit" value="record comment">
                </form>
        </div>
        <form action="http://localhost/MedHelp/Controllers/home.php" id="chat" method="post">
                <input type="hidden" name="comph" value="cph">
                <input type="submit" class="button" value="live chat with pharmacist/doctor">
                </form>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
var selector="<?php echo $_SESSION['identity']?>";
$("#enter").hide();
$("#dg_doctor").hide();
$("#prev").hide();
$('#pharma_comment').hide();
$('#p').hide();
if(selector=="pharma"){
    $("#address").hide();
    $("#address_val").hide();
    $("history").show();
    $('#pharma_comment').hide();
    $('#p').show();
}
if(selector=='doctor'){
    $("#address").hide();
    $("#address_val").hide();
    $("history").show();
}
if(selector=='doctor'){
    $("#enter").show();
    $("history").show();
}
$("#enter").click(function(){
    $("#dg_doctor").show();
    $("#enter").hide();
});

$("#dg_form").submit(function(){
    var formdata=$("#dg_form").serialize();
    console.log(formdata);
    $.ajax({url:'http://localhost/MedHelp/Controllers/home.php',
        type:'POST',
        datatype:'json',
        data:formdata,
        success:function(response){
            alert(response.response);
            window.location.replace("http://localhost/MedHelp/Views/welcome.php");
        }
});
return false;
});


$("#pharma_com").submit(function(){
    var formdata=$("#pharma_com").serialize();
    console.log(formdata);
    $.ajax({url:'http://localhost/MedHelp/Controllers/home.php',
        type:'POST',
        datatype:'json',
        data:formdata,
        success:function(response){
           $("#pharma_comment").show();
        }
});
return false;
});


$("#histor").submit(function(){
var formdata=$("#histor").serialize();
$("#prev").show();

console.log(formdata);
$.ajax({url:'http://localhost/MedHelp/Controllers/home.php',
        type:'post',
        datatype:'json',
         data:formdata,
        success:function(response){
            $("#histor").hide();
            var i=0;
            console.log(response);
            $("#prev_diagnosis").html(response.response);
            return;
        }
});
return false;
});
$("#pharma_form").submit(function(){
var formdata=$("#pharma_form").serialize();
console.log(formdata);
$.ajax({url:'http://localhost/MedHelp/Controllers/home.php',
        type:'post',
        datatype:'json',
         data:formdata,
        success:function(response){
            //$("#pharma_com").hide();
            console.log(response);
            //alert(response.response);
        }
});
return false;
});



</script>