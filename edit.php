<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$row = $result->fetch_assoc();
?>

<h2>Edit Product</h2>
<div class="container">
    <link rel="stylesheet" href="style.css">
</div>
<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    Name: <input type="text" name="name" value="<?= $row['name'] ?>"><br><br>
    Quantity: <input type="number" name="quantity" value="<?= $row['quantity'] ?>"><br><br>
    Price: <input type="number" step="0.01" name="price" value="<?= $row['price'] ?>"><br><br>

    <button type="submit">Update</button>
</form>
