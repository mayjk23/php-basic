
    <?php
    //ชนิดข้อมูลตัวแปร 
    //gettype: ตรวจสอบชนิดตัวแปร
    //count: นับรอบ

    $name = "May";
    $age = 20;
    $room = array("thailand", 123, 50.5);


    echo gettype($name);
    echo "<br>";
    echo gettype($age);

    for ($i = 0; $i < count($room); $i++) {
        echo gettype($room[$i]) . "<br>";
    }

    var_dump($room);



    ?>