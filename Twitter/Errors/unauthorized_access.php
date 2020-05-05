<?php
session_start();
$_SESSION['status']='index';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>unauthorized access</title>
</head>
<body>
    <h1>Unauthorized access request detected </h1>
    <a href="../Router/router.php">return to main page</a>
</body>
</html>
