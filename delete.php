<?php include "db.php" ?>
<html>
    <head><meta charset="utf8">
    </head>
    <body>
<?php
    $stmt = $pdo->prepare("DELETE FROM member WHERE username=?");
    $stmt->bindParam(1,$_GET["username"]);
    if($stmt->execute())
        header("location: dbdelete.php");
?>
    </body>
</html>