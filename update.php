<?php
$conn = new mysqli("localhost", "root", "", "inventory_management");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE products SET 
            product_name='$product_name', 
            description='$description', 
            price=$price, 
            quantity=$quantity 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Product updated successfully! <a href='display.php'>View Products</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

