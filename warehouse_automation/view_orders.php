<?php
include 'db.php';

$sql = "SELECT orders.order_id, orders.customer_name, products.name AS product_name, 
       orders.quantity, orders.total_price, orders.order_date
    FROM orders
    JOIN products ON product_id = products.id";

$result = $conn->query($sql);

if (!$result) {
    die("Error fetching orders: " . $conn->error);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Orders List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>Warehouse Automation System</header>
<header>by Soumyadip</header>
    <nav>
        <a href="index.php">Home</a>
        <a href="add_product.php">Add Product</a>
        <a href="view_orders.php">View Orders</a>
    </nav>

    <div class="container">
        <h2>Orders List</h2>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Customer Name</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Order Date</th>
            </tr>
            <?php 
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { 
            ?>
                <tr>
                    <td><?php echo $row['order_id']; ?></td>
                    <td><?php echo $row['customer_name']; ?></td>
                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['total_price']; ?></td>
                    <td><?php echo $row['order_date']; ?></td>
                </tr>
            <?php 
                } 
            } else { 
                echo "<tr><td colspan='6'>No orders found.</td></tr>";
            } 
            ?>
        </table>
    </div>
</body>
</html>
