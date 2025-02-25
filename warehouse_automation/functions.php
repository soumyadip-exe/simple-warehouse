<?php
include 'db.php';

// Function to add a new product
function addProduct($name, $quantity, $price, $description) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO products (name, quantity, price, description) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sids", $name, $quantity, $price, $description);
    $stmt->execute();
    $stmt->close();
}

// Function to get all products
function getProducts() {
    global $conn;
    $result = $conn->query("SELECT * FROM products");
    return $result;
}

// Function to update product quantity
function updateProductQuantity($product_id, $quantity) {
    global $conn;
    $stmt = $conn->prepare("UPDATE products SET quantity = ? WHERE product_id = ?");
    $stmt->bind_param("ii", $quantity, $product_id);
    $stmt->execute();
    $stmt->close();
}

// Function to add an order
function addOrder($customer_name, $product_id, $quantity) {
    global $conn;

    // Get product price
    $stmt = $conn->prepare("SELECT price FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $product_id);
    $stmt->execute();
    $stmt->bind_result($price);
    $stmt->fetch();
    $stmt->close();

    // Calculate total price
    $total_price = $price * $quantity;

    // Insert order into database
    $stmt = $conn->prepare("INSERT INTO orders (customer_name, product_id, quantity, total_price) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siid", $customer_name, $product_id, $quantity, $total_price);
    $stmt->execute();
    $stmt->close();
}

// Function to get orders
function getOrders() {
    global $conn;
    $result = $conn->query("SELECT * FROM orders");
    return $result;
}
?>
