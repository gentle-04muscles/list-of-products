<!-- ProductManager.php -->
<?php
class ProductManager {
    private $products = [];

    public function addProduct($product) {
        $this->products[] = $product;
    }

    public function displayProducts() {
        echo "Product List:\n";
        foreach ($this->products as $product) {
            echo $product . "\n";
        }
    }
}
?>
