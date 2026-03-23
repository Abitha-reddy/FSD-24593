<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>View Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Product List</h2>
<form method="GET">
    <input type="text" name="search" placeholder="Search product...">
    <button type="submit">Search</button>
</form>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Actions</th>
</tr>

<?php
include 'db.php';

$search = "";

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM products";
}

$result = $conn->query($sql); 
while($row = $result->fetch_assoc()) { 
    ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['quantity'] ?></td>
    <td><?= $row['price'] ?></td>
    <td class="actions">
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a>
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>
