<!DOCTYPE html>
<html>

<head>
    <title>PHP Basic</title>
</head>

<body>

    <?php
    //ทำงานไม่ระบุรอบอย่างชัดเจน 
    //เช็คเงื่อนไขก่อนแล้วค่อยทำงาน
    $score = 20;

    while ($score != 25) {
        echo "While <br>";

        //ใส่ break เพื่อให้หยุดจาก loop
        $score++;
        if ($score == 25) {
            break;
        }
    }


    ?>




</body>

</html>