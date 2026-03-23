<!DOCTYPE html>
<html>
<head>
    <title>Inventory System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Add Product</h2>

<form action="add.php" method="POST">
    Name:
    <input type="text" name="name" required><br>

    Quantity:
    <input type="number" name="quantity" required><br>

    Price:
    <input type="number" step="0.01" name="price" required><br>

    <button type="submit">Add Product</button>
</form>

<br>
<a href="view.php">View Products</a>
</div>

</body>
</html>
