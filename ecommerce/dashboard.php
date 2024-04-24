<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UberCart Dashboard</title>
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
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
        }

        .navbar-brand:hover {
            color: #f8f9fa;
        }

        .user-info {
            font-size: 16px;
            color: #fff;
        }

        .user-info span {
            font-weight: bold;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product-card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
        }

        .product-card h3 {
            margin-top: 0;
        }

        .product-card p {
            margin-bottom: 10px;
        }

        .add-to-cart-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-to-cart-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <a href="#" class="navbar-brand">UberCart</a>
        <div class="user-info">Welcome, <span><?php echo $loggedInUsername; ?></span></div>
    </div>
</header>

<div class="container">
    <h2>Products</h2>
    <div class="products">
        <?php
            // Include database connection logic here
            $servername = "localhost";
            $username = "username";
            $password = "password";
            $dbname = "myDB";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Fetch products from database
            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            // Display products
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">';
                    echo '<img src="' . $row["image_url"] . '" alt="' . $row["name"] . '">';
                    echo '<h3>' . $row["name"] . '</h3>';
                    echo '<p>Price: $' . $row["price"] . '</p>';
                    echo '<p>' . $row["description"] . '</p>';
                    echo '<button class="add-to-cart-btn">Add to Cart</button>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
    </div>
</div>

</body>
</html>
