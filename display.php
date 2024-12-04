<?php
$conn = new mysqli("localhost", "root", "", "inventory_management");

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

echo "<h1>Product Inventory</h1>";
echo "<a href='index.html'>Add New Product</a><br><br>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['product_name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['price']}</td>
                <td>{$row['quantity']}</td>
                <td>
                    <a href='edit_form.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No products found.";
}
?>

