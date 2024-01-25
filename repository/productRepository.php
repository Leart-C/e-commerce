<?php
include_once './database/databaseConnection.php';

class ProductRepository
{
    private $connection;

    function __construct()
    {
        $conn = new DatabaseConenction;
        $this->connection = $conn->startConnection();
    }

    function insertProduct($product)
    {
        $conn = $this->connection;

        $id = $product->getId();
        $name = $product->getName();
        $brand = $product->getBrand();
        $price = $product->getPrice();
        $user_id = $product->getUserId();

        $sql = "INSERT INTO products (id,name,brand,price,user_id) VALUES (?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id, $name, $brand, $price, $user_id]);

        header('Location: Products.php');
    }


    function getProducts()
    {
        $conn = $this->connection;

        $sql = "SELECT * FROM products";

        $statement = $conn->query($sql);
        $products = $statement->fetchAll();

        return $products;
    }

    
}
?>