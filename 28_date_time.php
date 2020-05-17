<?php
// function เวลา unix  timestamp time();  หน่วยวินาที


//d แสดงวันที่
$str = date("d/D", time());
echo $str;
echo "<br>";

//l แสดงวันเต็ม
$str1 = date("d/l", time());
echo $str1;
echo "<br>";

//F แสดงเดือนเต็ม
$str1 = date("d/l/F", time());
echo $str1;
echo "<br>";

//F แสดงเดือนย่อ
$str1 = date("d/l/m", time());
echo $str1;
echo "<br>";


$str2 = date("j", time());
echo $str2;
