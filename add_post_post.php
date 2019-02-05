<?php
    session_start();
    require "database.php";
    // $title = $_POST["title"];
    // $content = $_POST["content"];
    // Prepare REQ
    $req = $db->prepare("INSERT INTO posts (title, content) VALUES (:title, :content)");
    // Execute REQ
    $req->execute(array(
            "title" => $_POST["title"],
            "content" => $_POST["content"]
    ));
    // Redirect to admin + message
    header("Location: admin.php?message=Success to insert !");

?>