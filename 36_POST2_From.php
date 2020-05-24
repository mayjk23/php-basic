<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="36_POST.php" method="post">
        <label>ชื่อ <input type="text" name="name" value="" /></label>
        <label>รหัสผ่าน <input type="password" name="password" value="" /></label>
        <br><label>เพศ:</label>
        <input type="radio" name="sex" value="หญิง" checked="checked" />หญิง
        <input type="radio" name="sex" value="ชาย" />ชาย<br>

        <input type="submit" value="ส่งข้อมูล" />
        <input type="reset" value="ล้าง" />


    </form>
</body>

</html>