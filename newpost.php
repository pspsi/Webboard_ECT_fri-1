<?php
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;"> webboard kakkak</h1>
    <hr>
    <form>
        <table>
        <tr><td>ผู้ใช้:</td><td><?php echo $_SESSION['username'] ?></td></tr>
        <tr><td>หวมดหมู่ :</td><td> 
            <select  name="Catgoy">
        <option value="general">--เรื่องทั่วไป--</option>
        <option value="study">--เรื่องเรียน--</option>
    </select>
    </td></tr>
        <tr><td>หัวข้อ:</td><td><input ttpe="text"></td></tr>
        <tr><td>เนื้อหา:</td><td><textarea cols="30"rows="2"></textarea></td></tr>
        <tr><td></td><td><input type="submit" value="บันทึกข้อความ"></td></tr>
        <tr><td></td><td></td></tr>
</table>
        
</body>
</html>