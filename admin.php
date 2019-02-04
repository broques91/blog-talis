<?php
    session_start();
    //var_dump($_SESSION);
    if(!isset($_SESSION["pseudo"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php require "nav-bar.php"; ?>
    <h1>Admin</h1>
</body>
</html>