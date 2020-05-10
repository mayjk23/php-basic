<?php
function random_number()
{
    for ($i = 1; $i <= 10; $i++) {
        $sum เระ+= rand(1, 20) . "<br>";
    }
    echo "ผลรวม=" . $sum;
}


echo "แสดงผลลัพธ์<br>";
random_number();
