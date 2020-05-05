<?php
    include "../helpers/includes.php";
    define('authorized',TRUE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
</head>
<body>
    <form action="../Controllers/reset_password.php"  method="GET">
    <label>Enter Your Recovery Email please</label><br>
    <input type="email" name="recovery_email" placeholder="Email">
    <input type="submit" value="Confirm">
    </form>
</body>
</html>