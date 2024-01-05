<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
        $id = $_GET['id'];
        ?>
<h1 style="text-align: center;">Webboard</h1>
    <hr>    
    <div style="text-align: center;">
    <?php echo"ต้องการดูกระทู้หมายเลข  $id" ?>
    </div>
    <br>
    <div style="text-align: center;">
    <table style="border: 2px solid black; width: 40%;" align="center">
    <tr><td colspan="2" style="background-color: #6CD2FE;">เเสดงความคิดเห็น</td></tr>
    <form>
    <tr><td><textarea name='massage' row="10" cols="30">
        The cat was playing in the garden.
    </textarea></td></tr>
        <br>
        <tr><td><input type="submit" value="ส่งข้อความ"></td></tr>
    </form>
    </div>
    </table>
</body>
</html>