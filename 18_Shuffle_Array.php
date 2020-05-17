<?php

$arr = array("A" => "50", "B" => "60",  "C" => 2);


echo "Shuffle Array";
echo "<hr>";

echo "ก่อน Shuffle Array";
echo "<br>";
print_r($arr);
echo "<br>";
echo "<br>";
echo "ผลลัพธ์ Shuffle Array";
echo "<br>";
if (shuffle($arr) == true); {
    print_r($arr);
}
