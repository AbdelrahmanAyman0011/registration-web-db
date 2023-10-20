<!DOCTYPE html>
<html>

<head>
    <title>Insert Page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => registration
        $conn = mysqli_connect("localhost", "root", "", "registration");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $mdpass = md5($password);

        // We are going to insert the data into the `sampleDB` table (change to your actual table name)
        $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$mdpass')";

        // Check if the query is successful
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully."
                . " Please browse your localhost PHPMyAdmin"
                . " to view the updated data.</h3>";
                header("Location: login.php");

            echo nl2br("\nName: $name\nEmail: $email\nPassword: $mdpass\n");
        } else {
            echo "ERROR: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
