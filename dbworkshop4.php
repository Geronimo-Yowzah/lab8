<?php include "db.php" ?>
<html>
    <head><meta charset="utf8"></head>
    <body>
    <form>
        <input type="text" name="keyword">
        <input type="submit" value="ค้นหา">
    </form>
       <?php
        $stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
        if(!empty($_GET))
            $value = '%'.$_GET["keyword"].'%';
        $stmt->bindParam(1,$value);
        $stmt->execute();
        ?>

        <?php while($row = $stmt->fetch()):?>
            ชื่อสมาชิก: <?=$row["name"]?><br>
            ที่อยู่: <?=$row["address"]?><br>
            อีเมล์: <?=$row["email"]?><br>
            <img src="..\member_photo\<?=$row["username"]?>.jpg">
            <hr>
        <?php endwhile; ?>
    </body>
</html>