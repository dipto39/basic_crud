<?php
$conn = new mysqli("localhost", "root", "", "inventory_management");

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Product</title>
</head>
<body>
    <h1>Edit Product</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $product['id'] ?>">
        
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" value="<?= $product['product_name'] ?>" required><br><br>
        
        <label for="description">Description:</label>
        <textarea id="description" name="description"><?= $product['description'] ?></textarea><br><br>
        
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" step="0.01" value="<?= $product['price'] ?>" required><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?= $product['quantity'] ?>" required><br><br>
        
        <button type="submit">Update Product</button>
    </form>
</body>
</html>

