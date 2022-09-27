<?php include "db.php" ?>
<html>
    <head><meta charset="utf8"></head>
    <style>
        .edit{
            padding:20px;
            text-align:center;
            display:inline-block;
        }
        a{
            text-decoration: none;
        }
        img{
            padding:10px
        }
    </style>
    <body>
        <div style = "text-align:center;">
       <?php
        $stmt = $pdo->prepare("SELECT * FROM member");
        $stmt->execute();
        ?>

        <?php while($row = $stmt->fetch()):?>
            <div class="edit">
                <a href="detailworkshop5.php?username=<?=$row["username"]?>">
                    <img src="..\member_photo\<?=$row["username"]?>.jpg"><br>
                    ชื่อสมาชิก: <?=$row["name"]?><br>
                </a>  
            </div>
        <?php endwhile; ?>
        </div>
    </body>
</html>