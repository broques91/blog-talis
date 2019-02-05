<?php
    session_start();
    require 'nav-bar.php';
    require 'database.php';

    // Select all posts to db
    $req = $db->query('SELECT * FROM posts');
    $req->execute();

    // While show all posts
    while($row = $req->fetch(PDO::FETCH_ASSOC)){
        echo "<h2>{$row["title"]}</h2>";
        echo "<p>{$row["content"]}</p>";
    }

?>