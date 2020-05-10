<?php


$animal = array("cat", "dog");

print_r($animal);
echo "<hr>";

array_unshift($animal, "bird");
print_r($animal);
echo "<hr>";


array_unshift($animal, "1234");
print_r($animal);
echo "<hr>";


//ดึงข้อมูลจาก Array ออกมา
echo "ดึงข้อมูลจาก<br>";
array_shift($animal);
print_r($animal);
