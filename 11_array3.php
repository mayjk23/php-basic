
    <?php

    //ค่า key และ value
    $name = array("THAILAND", "ENGLAND", "JAPAN");
    //array รูปแบบที่ 1
    foreach ($name as $value) {
        echo $value . "<br>";
    }

    echo  "<br>";
    //array รูปแบบที่2
    $country = array("TH" => "THAILAND", "EN" => "ENGLAND", "JP" => "JAPAN");
    foreach ($country as $key => $value) {
        echo "คีย์-" . $key . "<br>";
    }






    ?>