<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php

        
        $conn = mysqli_connect("localhost", "root", "", "registration");

        
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $mdpass = md5($password);

        
        $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$mdpass')";

        
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully."
                . " Please browse your localhost PHPMyAdmin"
                . " to view the updated data.</h3>";
                header("Location: login.php");

            echo nl2br("\nName: $name\nEmail: $email\nPassword: $mdpass\n");
        } else {
            echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
        }

        
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
