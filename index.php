<?php
include_once "Lesson4/Product.php";
include_once "Lesson3/ManagerProduct.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("TV"));
$productManager->add(new Product("PS6"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() ."<br/>";
}
Mobile
