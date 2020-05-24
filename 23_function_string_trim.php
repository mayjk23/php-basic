
<?php
//การตัดช่องว่างใน string  เอาไว้ใช้ตัดช่องว่าง  user กรอกช่องว่างเข้ามาด้วย
//strlen นับความยาว
//trim  ตัดช่องว่าง string ซ้ายและขวา
//ltrim  ตัดช่องว่าง string ซ้าย
//rtrim  ตัดช่องว่าง string ขวา



$str = "   WebProgramming    ";
$str_trim = trim($str);
$str_ltrim = ltrim($str);
$str_rtrim = rtrim($str);


echo "WebProgramming =" . strlen($str) . "<br>";
echo   "WebProgramming ตัดช่องว่างทั้งหมด=" . strlen($str_trim) . "<br>";
echo   "WebProgramming ตัดช่องว่างซ้าย=" . strlen($str_ltrim) . "<br>";
echo   "WebProgramming ตัดช่องว่างขวา =" . strlen($str_rtrim) . "<br>";
