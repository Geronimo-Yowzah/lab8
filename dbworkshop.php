<?php include "db.php" ?>
<html>
    <head><meta charset="utf8"></head>
    <body>

    <table border='1'>
        <tr>
            <th>รหัสสินค้า</th>
            <th>ชื่อสินค้า</th>
            <th>รายละเอียดสินค้า</th>
            <th>ราคา</th>
        </tr>
    
        <?php
        $stmt = $pdo->prepare("SELECT * FROM product");
        $stmt->execute();


        while($row = $stmt->fetch()){
            echo "<tr>";
            echo "<td>".$row["pid"]."</td>";
            echo "<td>".$row["pname"]."</td>";
            echo "<td>".$row["pdetail"]."</td>";
            echo "<td>".$row["price"]. "บาท"."</td>";
            echo "</tr>";
        }
        
        ?>
        </table>
    </body>
</html>