<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //include มาได้หลายรอบการทำงาน
    for ($i = 0; $i < 5; $i++) {
        include("page1.php");
    }
    ?>
</body>

</html>