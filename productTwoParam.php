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
$product = new Product("Example Product", 99.99);
echo "Product Name: " . $product->name . "\n";
echo "Product Price: $" . $product->price . "\n";