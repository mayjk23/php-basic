<?php

function summation($var1, $var2)
{
    return $var1 + $var2;;
}

function sum2($var1)
{
    $sum = 0;
    for ($i = 0; $i < count($var1); $i++) {
        $sum += $var1[$i];
    }
    return $sum;
}
$varsum = summation(10, 50);
echo "ผลรวม=" . $varsum . "<br>";

$summation = sum2(array(10, 209, 22, 22, 3232, 2323));
echo "ผลรวมของการบวก Array=" . $summation;
