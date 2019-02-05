<?php
    session_start();
    require "database.php";

    $req = $db->prepare("DELETE FROM posts WHERE id = :id");
    $req->execute(array(
        "id" => $_GET["id"]
    ));

    header("Location: admin.php");
?>
