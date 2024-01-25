<?php
include_once './repository/productRepository.php';
include_once './models/product.php';

include_once './controller/AuthController.php';

$auth = new AuthController;

if (isset($_POST['addProduct'])) {
    if (
        empty($_POST['name']) || empty($_POST['brand']) || empty($_POST['price'])
    ) {
        echo "Fill all fields!";
    } else {
        $name = $_POST['name'];
        $brand = $_POST['brand'];
        $price = $_POST['price'];
        $user_id = $auth->getAuthenticatedUserId();

        $product = new Product(null, $name, $brand, $price, $user_id); 
        $productRepository = new ProductRepository();

        $productRepository->insertProduct($product);

    }
}
?>