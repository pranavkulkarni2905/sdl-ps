<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Management System</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Complaint Management System</h1>
        <form action="submit_complaint.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="department">Department:</label>
            <select id="department" name="department" required>
                <option value="IT">IT</option>
                <option value="HR">HR</option>
                <option value="Finance">Finance</option>
            </select><br><br>

            <label for="complaint">Complaint:</label><br>
            <textarea id="complaint" name="complaint" rows="4" required></textarea><br><br>

            <button type="submit">Submit Complaint</button>
        </form>
    </div>
</body>
</html>
<!-- 
-- First Create a database named complaint_management_system in XAMPP Server under phpMyAdmin
-- Then run the following SQL commands to create the vehicles table

CREATE DATABASE complaint_management_system;

CREATE TABLE complaints (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL,
    complaint TEXT NOT NULL,
    status ENUM('Pending', 'Resolved') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP


.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input, select, textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ccc;
}

th, td {
    padding: 10px;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}




.....

<?php
// Database connection
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $database = "complaint_management_system";

// $conn = new mysqli($servername, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $name = $conn->real_escape_string($_POST['name']);
// $email = $conn->real_escape_string($_POST['email']);
// $department = $conn->real_escape_string($_POST['department']);
// $complaint = $conn->real_escape_string($_POST['complaint']);

// // Insert complaint into database
// $sql = "INSERT INTO complaints (name, email, department, complaint) VALUES ('$name', '$email', '$department', '$complaint')";

// if ($conn->query($sql) === TRUE) {
//     echo "<script>alert('Complaint submitted successfully!');</script>";
//     echo "<script>window.location.href = 'index.php';</script>";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // Close connection
// $conn->close();
// ?>

-----

<?php
// // Database connection
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $database = "complaint_management_system";

// $conn = new mysqli($servername, $username, $password, $database);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // Fetch complaints from database
// $sql = "SELECT * FROM complaints";
// $result = $conn->query($sql);

// ?>

// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>View Complaints - Complaint Management System</title>
//     <link rel="stylesheet" href="styles.css">
// </head>
// <body>
//     <div class="container">
//         <h1>Complaint Management System</h1>
//         <h2>View Complaints</h2>
//         <table>
//             <tr>
//                 <th>Name</th>
//                 <th>Email</th>
//                 <th>Department</th>
//                 <th>Complaint</th>
//                 <th>Status</th>
//                 <th>Created At</th>
//             </tr>
//             <?php
//             if ($result->num_rows > 0) {
//                 while($row = $result->fetch_assoc()) {
//                     echo "<tr>";
//                     echo "<td>" . $row['name'] . "</td>";
//                     echo "<td>" . $row['email'] . "</td>";
//                     echo "<td>" . $row['department'] . "</td>";
//                     echo "<td>" . $row['complaint'] . "</td>";
//                     echo "<td>" . $row['status'] . "</td>";
//                     echo "<td>" . $row['created_at'] . "</td>";
//                     echo "</tr>";
//                 }
//             } else {
//                 echo "<tr><td colspan='6'>No complaints found</td></tr>";
//             }
//             ?>
//         </table>
//     </div>
// </body>
// </html>

// <?php
// // Close connection
// $conn->close();
// ?>


); -->