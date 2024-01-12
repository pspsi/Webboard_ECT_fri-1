<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard</h1>;
    <hr>
    <div style="text-align: center;">
    เข้าสู้ระบบด้วย<br>
        <?php
        $password = $_POST["pwd"];
        $login = $_POST["login"];

        if($login == "admin" && $password == "ad1234"){
            echo"ยินดีต้อนรับคุณ ADMIN";     
            echo"<BR>";
            echo"<a href=login.html style=float: right;> กลับไปยังหน้าหลัก</a>";
        }
        elseif($login == "member"&& $password == "mem1234"){
            echo"ยินดีต้อนรับคุณ MEMBER";  
            echo"<BR>";  
            echo"<a href=login.html style=float: right;> กลับไปยังหน้าหลัก</a>";
        }
        else{
            echo"ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            echo"<BR>";
            echo"<a href=login.html style=float: right;> กลับไปยังหน้าหลัก</a>";
        }   
        ?>

    
</div>
</body>
</html>