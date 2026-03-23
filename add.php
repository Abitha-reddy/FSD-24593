<?php
include 'db.php';

$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "INSERT INTO products (name, quantity, price)
        VALUES ('$name', '$quantity', '$price')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // 🔥 important
} else {
    echo "Error: " . $conn->error;
}
?>
