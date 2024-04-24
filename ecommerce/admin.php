<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* Internal CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .sidebar {
            width: 250px;
            background-color: #f8f9fa;
            padding: 20px;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            display: block;
            padding: 10px 0;
            text-decoration: none;
            color: #333;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .add-product-form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .add-product-form input[type="text"],
        .add-product-form input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .add-product-form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-product-form button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <h1>Admin Dashboard</h1>
</header>

<div class="sidebar">
    <a href="#">Add Product</a>
    <a href="#">View Products</a>
    <a href="#">View Customers</a>
    <a href="#">View Orders</a>
</div>

<div class="main-content">
    <h2>Add Product</h2>
    <div class="add-product-form">
        <form action="addproduct_process.php" method="POST">
            <label for="productName">Product Name:</label>
            <input type="text" id="productName" name="productName" required>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" required>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" min="0" step="0.01" required>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" min="0" required>
            <button type="submit">Add Product</button>
        </form>
    </div>
</div>

</body>
</html>
