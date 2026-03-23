<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$sql = "UPDATE products 
        SET name='$name', quantity='$quantity', price='$price' 
        WHERE id=$id";

$conn->query($sql);

header("Location: view.php");
?>
