<?php
include 'header.php';
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    addProduct($name, $quantity, $price, $description);
    echo "Product added successfully!";
}
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<h2>Add New Product</h2>
<form method="POST" action="add_product.php">
    <p align ="center">
    <label for="name">Product Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" required><br>

    <label for="price">Price:</label>
    <input type="number" step="0.01" id="price " name="price" required><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea><br>

    <button type="submit">Add Product</button>
</form>

<?php include 'footer.php'; ?>
