<!-- login.php -->

<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hardcoded username and password for demonstration purposes
    $validUsername = "admin";
    $validPassword = "admin123";

    // Get the entered username and password from the form
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    // Check if the entered credentials are valid
    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Set session variable to indicate that the user is logged in
        $_SESSION["admin_logged_in"] = true;

        // Redirect to the admin dashboard
        header("Location: forms.php");
        exit;
    } else {
        // Display an error message if credentials are invalid
        $errorMessage = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Login</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #0038FF;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #FF5F00;
        }

        p {
            color: red;
        }
    </style>
</head>

<body>
	
    <div class="container">
		<div class="logo">
        <img src="assets\img\logo\removebackground.png" h1 class="text-light"><a href="index.php"></a></img>
      </div>
        <h2>Admin Page</h2>
        <?php if (isset($errorMessage)) : ?>
            <p><?php echo $errorMessage; ?></p>
        <?php endif; ?>
        <form action="login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>

</html>
