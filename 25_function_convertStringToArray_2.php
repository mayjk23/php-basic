
<?php
//explode แปลง String เป็น Array 


$str = "หมู,ไก่,หนู,ปลา,ผัก,ผลไม้";
echo $str . "<br>";

$arr = explode("=", $str);

print_r($arr);
