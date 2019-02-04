<?php
    var_dump($_GET);
    var_dump($_POST);

    if($_POST["pseudo"] === "admin" && $_POST["password"] === "admin") {
        echo "Bonjour " . $_GET["pseudo"];
    }elseif($_POST["password"] !== "admin"){
        header("Location: login.php?message=wrong password");
    }elseif($_POST["pseudo"] !== "admin"){
        header("Location: login.php?message=wrong username");
    }
?>