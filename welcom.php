<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WelcomePage</title>
    </head>
    <body>
    <h1>Welcome Page</h1>
        <?php
         session_start(); // Start the session
         if (isset($_SESSION['user'])) {
             $name = $_SESSION['user'];
             echo "<p>Welcome, " . $name . "</p>";
             echo '<p><a href="register.php">Go back to registration</a></p>';
             echo '<p><a href="index.php">Sign in to another account</a></p>';
         }
        ?>
    </body>
    <style>
body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    text-align: center;
    margin: 0;
    padding: 0;
}

h1 {
    color: #333;
}

p {
    font-size: 18px;
    margin: 10px;
}

a {
    text-decoration: none;
    color: #007BFF;
}

a:hover {
    text-decoration: underline;
}

    </style>
    </html>