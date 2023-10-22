<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>

<body>
    <form action="contact.php" method="post" onsubmit="return validateForm()">
        <div class="container">
            <h1>Register</h1>      
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter name" name="name" id="name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" id="password" required>

            <label for="passwordRepeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="passwordRepeat" id="passwordRepeat" required>

            <button type="submit" class="registerbtn">Register</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="login.php">Sign in</a>.</p>
        </div>
    </form>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var passwordRepeat = document.getElementById("passwordRepeat").value;
            var email = document.getElementById("email").value;

            if (password !== passwordRepeat) {
                alert("Passwords do not match. Please try again.");
                return false;
            }
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!email.match(emailPattern)) {
                alert("Please enter a valid email address.");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
