<?php
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
function searchByName($products, $productName)
{
    foreach ($products as $product)
    {
        if ($product->name === $productName)
        {
            return $product;
        }
    }
    return null;
}
$products = [
    new Product("Apple", 1.2),
    new Product("Banana", 0.5),
    new Product("Orange", 0.8),
];
$searchName = "Banana";
$foundProduct = searchByName($products, $searchName);
if ($foundProduct)
{
    echo "Found: " . $foundProduct->name . " - $" . $foundProduct->price;
}
else
{
    echo "Product not found.";
}