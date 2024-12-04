<?php
$conn = new mysqli("localhost", "root", "", "inventory_management");

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully! <a href='display.php'>View Products</a>";
} else {
    echo "Error: " . $conn->error;
}
?>

