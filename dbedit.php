<?php include "db.php" ?>
<html>
    <head><meta charset="utf-8">
    </head>
    <body>
        <?php
            $stmt = $pdo->prepare("SELECT * FROM member");
            $stmt->execute();

            while($row = $stmt->fetch()){  
            ?>
                Username: <?=$row["username"]?><br>
                ชื่อสมาชิก: <?=$row["name"]?><br>
                ที่อยู่: <?=$row["address"]?><br>
                อีเมล: <?=$row["email"]?><br> 
                <a href='editform.php?username=<?=$row["username"]?>'>แก้ไข</a>
                <hr>
            <?php
            } 
            ?>
    </body>
</html>