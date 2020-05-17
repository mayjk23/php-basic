<?php
$food = array("ผลไม้", "อาหารคาว", "ของหวาน", "ไอศครีม", "กุ้งทะเล", "ปูผัด");

// Array Index
echo "<hr>";
echo "<h2>ก่อนการเรียงลำดับ</h2>";


for ($i = 0; $i < count($food); $i++) {
    echo $food[$i] . "<br>";
}

echo "<br>";
echo "<hr>";
//เรียงลำดับน้อยไปมาก
sort($food);
echo "<h2>เรียงลำดับน้อยไปมาก</h2>";



for ($i = 0; $i < count($food); $i++) {
    echo $food[$i] . "<br>";
}


echo "<br>";
//เรียงลำดับมากไปน้อย
rsort($food);
echo "<hr>";
echo "<h2>เรียงลำดับมากไปน้อย</h2>";
for ($i = 0; $i < count($food); $i++) {
    echo $food[$i] . "<br>";
}
