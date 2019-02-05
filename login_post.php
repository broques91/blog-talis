<?php
    require 'database.php';
    $req = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo AND password = :password');
    $req->execute(array(
        "pseudo" => $_POST["pseudo"],
        "password" => $_POST["password"]
    ));
    $result =$req->fetch();

    if(!$result){
        header("Location: login.php");
    }else{
        session_start();
        $_SESSION["pseudo"] = $_POST["pseudo"];
        header("Location: admin.php");
    }

    // Redirect to admin.php si pseudo & password = admin
    // if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin") {
    //     session_start();
    //     $_SESSION["pseudo"] = $_POST["pseudo"];
    //     header("Location: admin.php");
    // }elseif($_POST["password"] !== "admin"){
    //     header("Location: login.php?message=Erreur de password");
    // }elseif($_POST["pseudo"] !== "admin"){
    //     header("Location: login.php?message=Erreur de pseudo");
    // }
?>