<?php
$std = array("A1" => 20, "B3" => 40,  "C3" => 10, "G3" => 10, "B5" => 4);

//ก่อนการ asort
echo "<h3>ก่อนเรียงลำดับ </h3>";
print_r($std);
echo  "<hr>";

// Array การจัดเรียง Value น้อยไปมาก 1
echo "<h3>เรียงลำดับ Value น้อยไปมาก 1 </h3>";
asort($std);
print_r($std);
echo  "<hr>";

// Array การจัดเรียง Value มากไปน้อย 2
echo "<h3>เรียงลำดับ Value มากไปน้อย 2 </h3>";
rsort($std);
print_r($std);
echo  "<hr>";


// Array การจัดเรียง Key น้อยไปมาก 3
echo "<h3>เรียงลำดับ Key น้อยไปมาก 3</h3>";
ksort($std);
print_r($std);
echo  "<hr>";


// Array การจัดเรียง Key มากไปน้อย 4
echo "<h3>เรียงลำดับ Key มากไปน้อย 4</h3>";
krsort($std);
print_r($std);
echo  "<hr>";
17_Associative_Array.php