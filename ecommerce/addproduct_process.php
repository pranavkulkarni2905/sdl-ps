<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include database connection file
    include "config.php.php";

    // Escape user inputs for security
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $quantity = mysqli_real_escape_string($conn, $_POST['quantity']);

    // SQL query to insert data into products table
    $sql = "INSERT INTO products (product_name, description, price, quantity) 
            VALUES ('$productName', '$description', '$price', '$quantity')";

    // Execute query
    if (mysqli_query($conn, $sql)) {
        // Redirect to dashboard.php with success message
        header("Location: dashboard.php?success=Product added successfully");
        exit();
    } else {
        // Redirect to dashboard.php with error message
        header("Location: dashboard.php?error=Error adding product: " . mysqli_error($conn));
        exit();
    }

    // Close connection
    
} else {
    // If form is not submitted, redirect to dashboard.php
    header("Location: dashboard.php");
    exit();
}
?>
