<?php
include 'db.php'; // Ensure db.php exists in the same directory

$result = $conn->query("SELECT * FROM products");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Warehouse Automation</title>
</head>
<body>
<header>Warehouse Automation System</header>
<header>by Soumyadip</header>
    <nav>
        <a href="add_product.php">Add Product</a>
        <a href="view_orders.php">View Orders</a>
    </nav>
    <table border="1">
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['description']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
