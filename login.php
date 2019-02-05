<?php
    $loginPage = true;
    require "header.php";
?>
    <form action="login_post.php" method="post">
        <input type="text" placeholder="Pseudo" name="pseudo">
        <input type="password" placeholder ="Password" name="password">
        <input type="submit" value="Connect">
    </form>
    <?php
        if( isset($_GET["message"]) ){
            echo $_GET["message"];
        }
    ?>
</body>
</html>