<?php include "db.php" ?>
<?php
        $stmt = $pdo->prepare("UPDATE member SET password=?, name=?, address=?, mobile=?, email=? WHERE username=?");
        $stmt->bindParam(1,$_POST["password"]);
        $stmt->bindParam(2,$_POST["name"]);
        $stmt->bindParam(3,$_POST["address"]);
        $stmt->bindParam(4,$_POST["mobile"]);
        $stmt->bindParam(5,$_POST["email"]);
        $stmt->bindParam(6,$_POST["username"]);
        if($stmt->execute())
                echo "แก้ไขรายชื่อ " .$_POST["username"]. " สำเร็จ";
   
?>