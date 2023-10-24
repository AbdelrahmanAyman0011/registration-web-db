<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">

    <title>login</title>
</head>

<body>
    <form action="check_login.php" method="post">
        
        <div class="container">
            <h1>Login</h1>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit" name = "submit" class = "Loginbtn">Login</button>
            <label>  <p>don't have an account ?   <a href="register.php">Sign up</a></p></p>
            </label>
        

        </div>
      
    </form>
</body>

</html>