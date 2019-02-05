<?php
    require "header.php";
    if(isset($_GET["message"])){
        echo $_GET["message"];
    }
?>
    <h1>Admin</h1>

    <a href="add_post.php">Ajouter article</a>
</body>
</html>