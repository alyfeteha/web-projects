<?php
// header('Content-Type: application/json');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration</title>
    <link rel="stylesheet" href="../styles.css">
   
</head>
<body class="bg">
  <h1 class="title"align="center">MedHelp</h1>
    <h1 align="center">Register now</h1>

    <div align="center" id="main"style="border-style:solid">

        <div id="choice_of_job">
                
                <input type="button"id="doctor" class="button"name="doctor"value="Doctor">
                <input type="button"id="patient" class="button"name="patient"value="Patient">
                <input type="button" id="analysis_lab" class="button" name="analyst"  value="Analysis_lab">
                <input type="button"id="pharmast" class="button"name="pharmacist"value="Pharmacist">

        </div>
        
        <div id="pharmacist">
        
            <form action="http://localhost/MedHelp/Helpers/image_validation.php" id=pharma_img method="POST" enctype="multipart/form-data">
            <h2>Profile Picture:<p style="color:red;white-space:nowrap;display:inline-block">(optional)(only jpeg,jpg,png)</p></h2><br>
            <input type="file" name="file" id="file" ><br><br>
            <input type="button" name="file"id="upload0" value="Upload">
            </form>




            <form action="http://localhost/MedHelp/Controllers/Registeration.php" id="pharma" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="pharm" value="pharmacist">
            <h2>Full name (first 3 names of your legal name):<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="text" name="name" id="name_field" placeholder="enter your full name here.." ><br>
            <h2><div style="color:red"id="name_msg"></div></h2>
            <h2>National Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="text" name="national_number" placeholder="Enter digits here.." ><br>
            <h2><div style="color:red" id="national_msg"></div></h2>
            <h2>Syndicate Membrship Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p></h2><br>
            <input type="text" name="job_number" placeholder="Enter digits here.." ><br><br>
            <div style="color:red" id="job_msg"></div>
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="prefer not to say">prefer not to say<br>
            
            Password:<p style="color:red;white-space:nowrap;display:inline-block" >*</p><br>
            <input type="password" name="password" ><br>
            <div style="color:red" id="pass_msg"></div>
            Confirm Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="password" name="c_password" ><br>
            <div style="color:red"  id="cpass_msg"></div>
            Name of the pharmacy you work in and its address:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="work_address" placeholder="enter address here.."><br>
            <div style="color:red" id="add_msg"></div>
            Contact Number of your working place:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <div style="color:red" id="cont_msg"></div>
            <input type="text" name="phone_num" placeholder="+20....mobile or 03....home"><br><br>
            <input type="submit" name="register_pharamacist" value="Register">
            </form>
            
        </div>

        <div id="Doctor">
            <form action="http://localhost/MedHelp/Helpers/image_validation.php" id=doc_img method="POST" enctype="multipart/form-data">
            Profile Picture:<p style="color:red;white-space:nowrap;display:inline-block">(optional)(only jpeg,jpg,png)</p><br>
            <input type="file" name="file" id="file1" ><br><br>
            <input type="button" name="file" id="upload1" value="Upload">
            </form>
            <form action="http://localhost/MedHelp/Controllers/Registeration.php" id="doctr" method="POST" >

            <input type="hidden" name="doc" value="doctor">

            Full name (first 3 names of your legal name):<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="name" placeholder="enter your full name here.."><br>
            <div style="color:red"id="name_msg_d"></div>

            National Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="national_number" placeholder="Enter digits here.."><br>
            <div style="color:red" id="national_msg_d"></div>

            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="prefer not to say">prefer not to say<br>
            
            Syndicate Membrship Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="job_number" placeholder="Enter digits here.." ><br><br>
            <div style="color:red" id="job_msg_d"></div>

            Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="password" name="password"><br>
            <div style="color:red" id="pass_msg_d"></div>

            Confirm Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="password" name="c_password"><br>
            <div style="color:red" id="cpass_msg_d"></div>

            Field of proficiency:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="pro_field" placeholder="your specialization"><br>
            <div style="color:red" id="pro_msg_d"></div>

            Name of the Hospital you work in and its address:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="work_address" placeholder="enter address here.."><br>
            <div style="color:red" id="add_msg_d"></div>

            Phone Number of your working place:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="phone_num" placeholder="03...."><br><br>
            <div style="color:red" id="phone_msg_d"></div>

            <input type="submit" name="register_doctor" value="Register">

            </form>

        </div>
        
        <div id="Analysis_lab">

            <form action="http://localhost/MedHelp/Controllers/Registeration.php" id="lab" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="lab"value="lab">
            Official Commercial Name:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="name" placeholder="enter your full name here.."><br>
            <div style="color:red" id="name_msg_l"></div>
            Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="password" name="password"><br>
            <div style="color:red" id="pass_msg_l"></div>
            Confirm Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="password" name="c_password"><br>
            <div style="color:red" id="cpass_msg_l"></div>
            Address:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="work_address" placeholder="enter address(es) here.."><br>
            <div style="color:red" id="add_msg_l"></div>
            Contact:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
            <input type="text" name="phone_num" placeholder="03...."><br><br>
            <div style="color:red" id="phone_msg_l"></div>
            <input type="submit" name="register_analysis_lab" value="Register">
            </form>

        </div>

        <div id="Patient">
        <form action="http://localhost/MedHelp/Helpers/image_validation.php" id=patient_img method="POST" enctype="multipart/form-data">
            Profile Picture:<p style="color:red;white-space:nowrap;display:inline-block">(optional)(only jpeg,jpg,png)</p><br>
            <input type="file" name="file" id="file2" ><br><br>
            <input type="button" id="upload2" value="Upload">
            </form>
        <form action="http://localhost/MedHelp/Controllers/Registeration.php" id="patint" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="pat" value="patient">
        Full name (first 3 names of your legal name):<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
        <input type="text" name="name" placeholder="enter your full name here.."><br>
            <div id="name_msg_p" style="color:red"></div>
        National Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
        <input type="text" name="national_number" placeholder="Enter digits here.."><br>
            <div id="national_msg_p" style="color:red"></div>
        <input type="radio" name="gender" value="male">male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="prefer not to say">prefer not to say<br>

        Date of birth:<p style="color:red;white-space:nowrap;display:inline-block">*</p>
        <div class="controls">
            <select name="dob-day" id="dob-day">
                <option value="">Day</option>
                <option value="">---</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
            </select>
                <select name="dob-month" id="dob-month">
                <option value="">Month</option>
                <option value="">-----</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
            <select name="dob-year" id="dob-year">
                <option value="">Year</option>
                <option value="">----</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                <option value="1979">1979</option>
                <option value="1978">1978</option>
                <option value="1977">1977</option>
                <option value="1976">1976</option>
                <option value="1975">1975</option>
                <option value="1974">1974</option>
                <option value="1973">1973</option>
                <option value="1972">1972</option>
                <option value="1971">1971</option>
                <option value="1970">1970</option>
                <option value="1969">1969</option>
                <option value="1968">1968</option>
                <option value="1967">1967</option>
                <option value="1966">1966</option>
                <option value="1965">1965</option>
                <option value="1964">1964</option>
                <option value="1963">1963</option>
                <option value="1962">1962</option>
                <option value="1961">1961</option>
                <option value="1960">1960</option>
                <option value="1959">1959</option>
                <option value="1958">1958</option>
                <option value="1957">1957</option>
                <option value="1956">1956</option>
                <option value="1955">1955</option>
                <option value="1954">1954</option>
                <option value="1953">1953</option>
                <option value="1952">1952</option>
                <option value="1951">1951</option>
                <option value="1950">1950</option>
                <option value="1949">1949</option>
                <option value="1948">1948</option>
                <option value="1947">1947</option>
                <option value="1946">1946</option>
                <option value="1945">1945</option>
                <option value="1944">1944</option>
                <option value="1943">1943</option>
                <option value="1942">1942</option>
                <option value="1941">1941</option>
                <option value="1940">1940</option>
                <option value="1939">1939</option>
                <option value="1938">1938</option>
                <option value="1937">1937</option>
                <option value="1936">1936</option>
                <option value="1935">1935</option>
                <option value="1934">1934</option>
                <option value="1933">1933</option>
                <option value="1932">1932</option>
                <option value="1931">1931</option>
                <option value="1930">1930</option>
                <option value="1929">1929</option>
                <option value="1928">1928</option>
                <option value="1927">1927</option>
                <option value="1926">1926</option>
                <option value="1925">1925</option>
                <option value="1924">1924</option>
                <option value="1923">1923</option>
                <option value="1922">1922</option>
                <option value="1921">1921</option>
                <option value="1920">1920</option>
                <option value="1919">1919</option>
                <option value="1918">1918</option>
                <option value="1917">1917</option>
                <option value="1916">1916</option>
                <option value="1915">1915</option>
                <option value="1914">1914</option>
                <option value="1913">1913</option>
                <option value="1912">1912</option>
                <option value="1911">1911</option>
                <option value="1910">1910</option>
                <option value="1909">1909</option>
                <option value="1908">1908</option>
                <option value="1907">1907</option>
                <option value="1906">1906</option>
                <option value="1905">1905</option>
                <option value="1904">1904</option>
                <option value="1903">1903</option>
                <option value="1901">1901</option>
                <option value="1900">1900</option>
            </select>
        </div>

        Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
        <input type="password" name="password"><br>
        <div id="pass_msg_p" style="color:red"></div>
        Confirm Password:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
        <input type="password" name="c_password"><br>
        <div id="cpass_msg_p" style="color:red"></div>
        Address:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
        <input type="text" name="work_address" placeholder="enter address here.."><br>
        <div id="add_msg_p" style="color:red"></div>
        Phone Number:<p style="color:red;white-space:nowrap;display:inline-block">*</p><br>
        <input type="text" name="phone_num" placeholder=" +20....(mobile) or 03...(home)"><br><br>
        <div id="phone_msg_p" style="color:red"></div>

        <input type="submit" name="register_patient" value="Register">
        </form>

    </div>

    </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

$("#main #choice_of_job").show();
$("#main #pharmacist").hide();
$("#main #Doctor").hide();
$("#main #Analysis_lab").hide();
$("#main #Patient").hide();


$("#pharmast").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
$("#main #choice_of_job").hide();
$("#main #pharmacist").show();
$("#main #Doctor").hide();
$("#main #Analysis_lab").hide();
$("#main #Patient").hide();
}});
});
$("#analysis_lab").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
   
$("#main #choice_of_job").hide();
$("#main #pharmacist").hide();
$("#main #Doctor").hide();
$("#main #Analysis_lab").show();
$("#main #Patient").hide();

}});
});
$("#doctor").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){

$("#main #choice_of_job").hide();
$("#main #pharmacist").hide();
$("#main #Doctor").show();
$("#main #Analysis_lab").hide();
$("#main #Patient").hide();

}});
});
$("#patient").click(function(){
$.ajax({url: "http://localhost/MedHelp/Views/Registeration.php", success: function(){
    
$("#main #choice_of_job").hide();
$("#main #pharmacist").hide();
$("#main #Doctor").hide();
$("#main #Analysis_lab").hide();
$("#main #Patient").show();

}});
});
});


  $("#lab").submit(function(event){
    var formdata=$("#lab").serialize();
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/Registeration.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
        if(response.response=="name"){
          if(response.error=="empty"){
             $("#name_msg_l").html('empty username');
              return;
          }
      }
      else if(response.response=="password"){
          if(response.error="empty"){
            $("#pass_msg_l").html('please fill in password field');
              return
          }
      }
      else if(response.response=="c_password"){
          if(response.error="empty"){
            $("#cpass_msg_l").html('please confirm your password');
              return
          }
          if(response.error=="confirmation"){
            $("#cpass_msg_l").html('please re-confirm your password correctly');
          }
      }
      else if(response.response=="phone_num"){
          if(response.error=="empty"){
            $("#phone_msg_l").html('please fill in phone number field');
              return
          }
         else if(response.error=="format"){
            $("#phone_msg_l").html('please check if your contact number starts with 03 and dont enter characters ');
              return
          }
      }
      else if(response.response=="work_address"){
          if(response.error="empty"){
            $("#add_msg_l").html('please fill in your work address field');
              return
          }
      }
      else{
        alert('now your Analysis Lab has an account on MedHelp login now!');
          window.location.replace("http://localhost/MedHelp/index.php");
      }
    }
    });
    return false;
  });





  $("#doctr").submit(function(event){
    var formdata=$("#doctr").serialize();
    //console.log(formdata);
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/Registeration.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
        console.log(response);
      if(response.response=="image"){
          if(response.error=="unacceptable"){
              alert('profile picture is not valid please check if:'+"\n"+"1-file has one of the required extentions"+"\n"+"2-file size is less than 2MB"+"\n");
          }
      }
      else if(response.response=="name"){
          if(response.error=="empty"){
             $("#name_msg_d").html('empty username');
              return;
          }
      }
      else if(response.response=="national_number"){
          if(response.error=="empty"){
            $("#national_msg_d").html('please fill in national number field');
              return
          }
          if(response.error=="format"){
            $("#national_msg_d").html('please enter your national number with correct format(14 digits-all numbers)');
            return
          }
      }
      else if(response.response=="job_number"){
          
          if(response.error=="empty"){
            $("#job_msg_d").html('please enter your Syndicate membership number');
            return
          }
          if(response.error=="format"){
            $("#job_msg_d").html('please enter your Syndicate membership number in correct format');
            return
          }
      }
      else if(response.response=="password"){
          if(response.error="empty"){
            $("#pass_msg_d").html('please fill in password field');
              return
          }
      }
      else if(response.response=="c_password"){
          if(response.error="empty"){
            $("#cpass_msg_d").html('please confirm your password');
              return
          }
          if(response.error=="confirmation"){
            $("#cpass_msg_d").html('please re-confirm your password correctly');
          }
      }
      else if(response.response=="pro_field"){
        $("#pro_msg_d").html('please enter your field of specialization');
      }
      else if(response.response=="work_address"){
          if(response.error="empty"){
            $("#add_msg_d").html('please fill in your work address field');
              return
          }
      }
      else if(response.response=="phone_num"){
          if(response.error=="empty"){
            $("#phone_msg_d").html('please fill in phone number field');
              return
          }
         else if(response.error=="format"){
            $("#phone_msg_d").html('please check if your contact number starts with 03 and dont enter characters ');
            return
          }

      }
      else{
        alert('you know have and account you will be directed to login page to login to your profile DR.'+response.response);
          window.location.replace("http://localhost/MedHelp/index.php");
      }
            }
    });
    return false;
  });





  $("#patint").submit(function(event){
    var formdata=$("#patint").serialize();
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/Registeration.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
        console.log(response);
      if(response.response=="image"){
          if(response.error=="unacceptable"){
              alert('profile picture is not valid please check if:'+"\n"+"1-file has one of the required extentions"+"\n"+"2-file size is less than 2MB"+"\n");
          }
      }
      else if(response.response=="name"){
          if(response.error=="empty"){
             $("#name_msg_p").html('empty username');
              return;
          }
      }
      else if(response.response=="national_number"){
          if(response.error=="empty"){
            $("#national_msg_p").html('please fill in national number field');
              return
          }
          if(response.error=="format"){
            $("#national_msg_p").html('please enter your national number with correct format(14 digits-all numbers)');
            return
          }
      }
      
      else if(response.response=="password"){
          if(response.error="empty"){
            $("#pass_msg_p").html('please fill in password field');
              return
          }
      }
      else if(response.response=="c_password"){
          if(response.error="empty"){
            $("#cpass_msg_p").html('please confirm your password');
              return
          }
          if(response.error=="confirmation"){
            $("#cpass_msg_p").html('please re-confirm your password correctly');
          }
      }
      else if(response.response=="work_address"){
          if(response.error="empty"){
            $("#add_msg_p").html('please fill in your residential address field');
              return
          }
      }
      else if(response.response=="phone_num"){
          if(response.error=="empty"){
            $("#phone_msg_p").html('please fill in phone number field');
              return
          }
         else if(response.error=="format"){
            $("#phone_msg_p").html('please check if your contact number starts with +20 if mobile phone number of 03 if a ground phone number and avoid entering characters');
            return
          }

      }
      else{
          alert('you know have and account you will be directed to login page to login to your profile'+response.response);
          window.location.replace("http://localhost/MedHelp/index.php");
      }
            }
    });
    return false;
  });
 






  $("#pharma").submit(function(event){
    var formdata=$("#pharma").serialize();
    console.log(formdata);
    $.ajax({
            url:"http://localhost/MedHelp/Controllers/Registeration.php",
            type:'POST',
            datatype:'json',
            data:formdata,
            success:function(response){
        console.log(response);
      if(response.response=="image"){
          if(response.error=="unacceptable"){
              alert('profile picture is not valid please check if:'+"\n"+"1-file has one of the required extentions"+"\n"+"2-file size is less than 2MB"+"\n");
          }
      }
      else if(response.response=="name"){
          if(response.error=="empty"){
             $("#name_msg").html('empty username');
              return;
          }
      }
      else if(response.response=="national_number"){
          if(response.error=="empty"){
            $("#national_msg").html('please fill in national number field');
              return
          }
          if(response.error=="format"){
            $("#national_msg").html('please enter your national number with correct format(14 digits-all numbers)');
            return
          }
      }
      else if(response.response=="job_number"){
          
          if(response.error=="empty"){
            $("#job_msg").html('please enter your Syndicate membership number');
            return
          }
          if(response.error=="format"){
            $("#job_msg").html('please enter your Syndicate membership number in correct format');
            return
          }
      }
      else if(response.response=="password"){
          if(response.error="empty"){
            $("#pass_msg").html('please fill in password field');
              return
          }
      }
      else if(response.response=="c_password"){
          if(response.error="empty"){
            $("#cpass_msg").html('please confirm your password');
              return
          }
          if(response.error=="confirmation"){
            $("#cpass_msg").html('please re-confirm your password correctly');
          }
      }
      else if(response.response=="work_address"){
          if(response.error="empty"){
            $("#add_msg").html('please fill in your work address field');
              return
          }
      }
      else if(response.response=="phone_num"){
          if(response.error=="empty"){
            $("#cont_msg").html('please fill in phone number field');
              return
          }
         else if(response.error=="format"){
            $("#cont_msg").html('please check if your contact number starts with 03 and dont enter characters ');
            return
          }

      }
      else{
          alert('you know have and account you will be directed to login page to login to your profile'+response.response);
          window.location.replace("http://localhost/MedHelp/index.php");
      }
            }
      
    });
    return false;
  });



  $("#upload0").click(function(){
     var fd= new FormData();
        var files=$('#file')[0].files[0];
        fd.append('file',files);
        console.log(fd);
        $.ajax({
            url:"http://localhost/MedHelp/Helpers/image_validation.php",
            type:'post',
            data:fd,
            contentType: false,
            processData:false,
            success:function(response){
            console.log(response);
            }
        });
        return false;
 });




 $("#upload1").click(function(){
     var fd= new FormData();
        var files=$('#file1')[0].files[0];
        fd.append('file',files);
        console.log(fd);
        $.ajax({
            url:"http://localhost/MedHelp/Helpers/image_validation.php",
            type:'post',
            data:fd,
            contentType: false,
            processData:false,
            success:function(response){
            console.log(response);
            }
        });
        return false;
 });





 $("#upload2").click(function(){
     var fd= new FormData();
        var files=$('#file2')[0].files[0];
        fd.append('file',files);
        console.log(fd);
        $.ajax({
            url:"http://localhost/MedHelp/Helpers/image_validation.php",
            type:'post',
            data:fd,
            contentType: false,
            processData:false,
            success:function(response){
            console.log(response);
            }
        });
        return false;
 });

// });



</script>
