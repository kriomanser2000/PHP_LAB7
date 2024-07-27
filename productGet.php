<?php
class Product 
{
    public function getProduct() 
    {
        return [
            ["id" => 1, "name" => "Продукт 1", "price" => 100],
            ["id" => 2, "name" => "Продукт 2", "price" => 200],
            ["id" => 3, "name" => "Продукт 3", "price" => 300]
        ];
    }
}
$productObj = new Product();
$products = $productObj->getProduct();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Список продуктів</h1>
<ul>
    <?php foreach ($products as $product): ?>
        <li>
            <?php echo "ID: " . $product["id"] . ", Назва: " . $product["name"] . ", Ціна: " . $product["price"]; ?>
        </li>
    <?php endforeach; ?>
</ul>
</body>
</html>