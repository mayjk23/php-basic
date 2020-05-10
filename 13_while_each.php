<?php
//Key + Value
$country = array("BK" => "Bangkok", "UD" => "Udotani", "CB" => "Cholburi");

//foreach ($count as $key => $value)
//echo "Key=" . $key . "<br>";

while ($element = each($country)) {

    echo "Key=" . $element['key'] . "<br>";
    echo "Value=" . $element['value'] . "<br>";
}
