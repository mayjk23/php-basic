<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
</head>

<body>
    <?php
    //ชื่อ class 1
    class Product
    {
        //แอททิบิว 2
        public $id = 101;
        public $name = "มา่มา";
        public $price = 6;

        //เมธอด 3
        public function showProduct()
        {
            echo $this->id;
        }
    }

    $pro1 = new Product();
    //การเข้าถึงเมธอด
    $pro1->showProduct();


    ?>



</body>

</html>