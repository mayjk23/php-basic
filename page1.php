<!DOCTYPE html>

<header>
    <meta charset="UTF-8">
    <title>Test include file</title>
</header>

<body>
    <h1>รายกานสินค้า Stock</h1>
    <?php
    $product = array("น้ำ", "ปลากระป๋อง", "ของใช้", "ของกิน");

    foreach ($product as $list) {
        echo $list . "<br>";
    }

    ?>

</body>

</html>