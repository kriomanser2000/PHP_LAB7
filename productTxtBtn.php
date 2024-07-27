<?php
session_start();
class Product 
{
    public $name;
    public $price;
    public function __construct($name, $price) 
    {
        $this->name = $name;
        $this->price = $price;
    }
}
if (!isset($_SESSION['products'])) 
{
    $_SESSION['products'] = [];
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add'])) 
{
    $name = $_POST['name'];
    $price = $_POST['price'];
    $product = new Product($name, $price);
    $_SESSION['products'][] = $product;
}
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
<form method="post" action="">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="price">Product Price:</label>
    <input type="text" id="price" name="price" required>
    <br>
    <button type="submit" name="add">Add</button>
</form>
<h2>Products:</h2>
<ul>
    <?php
    if (!empty($_SESSION['products']))
    {
        foreach ($_SESSION['products'] as $product)
        {
            echo "<li>{$product->name}: {$product->price}</li>";
        }
    }
    else
    {
        echo "<li>No products added yet.</li>";
    }
    ?>
</ul>
</body>
</html>
