<?php
class Product
{
    private $name;
    private $price;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function getProduct()
    {
        return "Name: {$this->name}; price: {$this->price}";
    }
}
$product = new Product("Apple", 10);
echo $product->getProduct();