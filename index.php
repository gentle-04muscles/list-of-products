<!-- index.php -->
<?php
echo "Product Management System\n";

// Include necessary files
require_once 'Product.php';
require_once 'ProductManager.php';

// Create an instance of the ProductManager class
$productManager = new ProductManager();

// Add some sample products
$productManager->addProduct(new Product("Laptop", 1200));
$productManager->addProduct(new Product("Smartphone", 800));

// Display the list of products
$productManager->displayProducts();
?>
