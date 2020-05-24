
<?php
//แปลง Array เป็น String
// implode
// join 

$array = array("Thai", "Lao", "Japan");
$str = implode("|", $array);


print_r($array);
echo "<br>";
echo $str;
