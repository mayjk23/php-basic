<?php
// getdate 

date_default_timezone_get('Asia/Bangkok');



$date_time = getdate();

echo "แสดงหน่วยวินาที" . $date_time['seconds'] . "<br>";
echo "แสดงหน่วยนาที" . $date_time['minutes'] . "<br>";
echo "แสดงชั่วโมง" . $date_time['hours'] . "<br>";
echo "วันที่" . $date_time['mday'] . "<br>";
echo "เดือน" . $date_time['mon'] . "<br>";
echo "ปี" . $date_time['year'] . "<br>";


var_dump($date_time);
