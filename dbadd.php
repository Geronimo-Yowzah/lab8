<?php include "db.php" ?>
<html>
    <head><meta charset="utf-8">
    </head>
    <body>
        <form action="insert.php" method="post">
            username: <input type="text" name="username"><br>
            password: <input type="text" name="password"><br>
            name: <input type="text" name="name"><br>
            address: <textarea row="3" col="40" name="address"></textarea><br>
            mobile: <input type="text" name="mobile"><br>
            email: <input type="email" name="email"><br>
            <input type="submit" value="เพิ่มรายชื่อ">
        </form>
    </body>
</html>