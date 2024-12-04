<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$conn = new mysqli("localhost", "root", "", "inventory_management");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $product_name = $_POST['product_name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Prepare SQL query
    $sql = "INSERT INTO products (product_name, description, price, quantity) 
            VALUES ('$product_name', '$description', $price, $quantity)";
    
    // Execute query and check for errors
    if ($conn->query($sql) === TRUE) {
        echo "Product added successfully! <a href='display.php'>View Products</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>


