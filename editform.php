<?php include "db.php" ?>
<?php 
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username=?" );
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<html>
    <head><meta charset="utf-8">
    </head>
    <body>
        <form action="edit.php" method="post">
            <!-- username: <input type="text" name="username" value= ""><br> -->
            <input type="hidden" name="username" value="<?=$row["username"]?>">
            password: <input type="text" name="password" value= "<?=$row["password"]?>"><br>
            name: <input type="text" name="name" value= "<?=$row["name"]?>"><br>
            address: <textarea row="3" col="40" name="address"><?=$row["address"]?></textarea><br>
            mobile: <input type="text" name="mobile" value="<?=$row["mobile"]?>"><br>
            email: <input type="email" name="email" value="<?=$row["email"]?>"><br>
            <input type="submit" value="แก้ไขรายชื่อ">
        </form>
    </body>
</html>