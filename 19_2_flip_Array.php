<?php

$room = array("A1" => 60, "B2" => 50, "B1" => 40);

echo "ก่อนใช้งานฟังก์ชั่น <br>";
print_r($room);


echo "<br>หลังใช้งานฟังก์ชั่น";
$flipvar = array_flip($room);
print_r($flipvar);
