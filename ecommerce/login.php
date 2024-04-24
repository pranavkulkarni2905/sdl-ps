<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 400px;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
}

form {
    margin-top: 20px;
}

input[type="text"],
input[type="email"],
input[type="password"],
button {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

button {
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

p {
    text-align: center;
    margin-top: 20px;
}

</style>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Signup</a></p>
</body>
</html>
