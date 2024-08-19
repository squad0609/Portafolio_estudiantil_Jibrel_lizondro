<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Form Submission Result</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $first_name = htmlspecialchars($_POST['first_name']);
        $last_name = htmlspecialchars($_POST['last_name']);
        $username = htmlspecialchars($_POST['username']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $confirmed_password = htmlspecialchars($_POST['confirmed_password']);

        // Check if passwords match
        if ($password !== $confirmed_password) {
            echo "<h1>Form Submission Result</h1>";
            echo "<p>Passwords do not match!</p>";
        } else {
            // Display the form data
            echo "<h1>Form Submission Result</h1>";
            echo "<p><strong>First Name:</strong> $first_name</p>";
            echo "<p><strong>Last Name:</strong> $last_name</p>";
            echo "<p><strong>Username:</strong> $username</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Password:</strong> $password</p>"; // Note: Displaying the password is generally not a good practice
        }
    } else {
        echo "<h1>Form Submission Result</h1>";
        echo "<p>Form not submitted correctly!</p>";
    }
    ?>
</body>
</html>
