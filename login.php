<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">

    <title>Document</title>
</head>

<body>
    <form action="contact.php" method="post">
        
        <div class="container">
            <h1>Login</h1>
            <label for="name"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="name" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" class = "Loginbtn">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

      
    </form>
</body>

</html>