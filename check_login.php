<?php
 $conn = mysqli_connect("localhost", "root", "", "registration");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$email = $conn->real_escape_string($email);

$password = md5($password);

$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
    
$name = $row['name']; 

if ($result->num_rows == 1) {
    echo '<div style="font-size: 32px; font-weight: bold; text-align: center; color: #ff0000;">Login successful. Welcome, ' . $name . '!</div>';
} else {
    echo '<div style="font-size: 32px; font-weight: bold; text-align: center; color: #ff0000;">Login failed. Invalid email or password.</div>';
}


$conn->close();
?>
