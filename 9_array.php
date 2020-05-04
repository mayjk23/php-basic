<!DOCTYPE html>
<html>

<head>
    <title>PHP Basic</title>
</head>

<body>

    <?php

    $name = array("Red", "Green", "Blue");

    echo $name[1];   //แสดงข้อมูลเฉพาะตำแหน่งที่ 1
    echo "<br>";
    print_r($name);  //แสดงข้อมูลใน array ทั้งหมด
    echo "<br>";

    //นำข้อมูลตัวแปร array ไปใส่เป็นตัวแปรใช้ foreach วนแสดงผล
    foreach ($name as $nameshowall) {
        echo "$nameshowall <br>";
    }




    ?>


</body>

</html>