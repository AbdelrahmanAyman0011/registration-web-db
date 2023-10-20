<?php
 $conn = mysqli_connect("localhost", "root", "", "registration");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve name and password from the form
$name = $_POST['name'];
$password = $_POST['password'];

// Sanitize input to prevent SQL injection
$name = $conn->real_escape_string($name);

// Hash the password (use a strong hashing method in production)
$password = md5($password);

// Query the database to check if the name and password match
$sql = "SELECT * FROM user WHERE name = '$name' AND password = '$password'";
$result = $conn->query($sql);


if ($result->num_rows == 1) {
    echo '<div style="font-size: 32px; font-weight: bold; text-align: center; color: #ff0000;">Login successful. Welcome, ' . $name . '!</div>';
} else {
    echo '<div style="font-size: 32px; font-weight: bold; text-align: center; color: #ff0000;">Login failed. Invalid name or password.</div>';
}


// Close the database connection
$conn->close();
?>
