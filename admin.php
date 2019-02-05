<?php
    require "header.php";
    if(isset($_GET["message"])){
        echo $_GET["message"];
    }
?>
    <h1>Admin</h1>

    <a href="add_post.php">Ajouter article</a>
<?php
    // Select all posts to db
    $req = $db->query('SELECT * FROM posts');
    $req->execute();

    // While show all posts
    while($row = $req->fetch(PDO::FETCH_ASSOC)){
        echo "<h4>{$row["title"]}</h4>";
        echo "<a href='delete_post.php?id={$row['id']}'>Supprimer</a>";
    }
?>
</body>
</html>