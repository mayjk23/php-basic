<?php

//function ในการสร้าง array

$number = range(10, 20);

echo "ก่อนการใช้งาน function array revers";
echo "<br>";
for ($i = 0; $i < count($number); $i++) {

    echo $number[$i] . "";
}

echo "<br>";
echo "<hr>";
echo "หลังการใช้งาน function array revers";
echo "<br>";
$numrevers = array_reverse($number);
for ($i = 0; $i < count($numrevers); $i++) {
    echo $numrevers[$i] . "";
}
