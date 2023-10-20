<?php
    session_start();
    include("config.php");
    if (isset($_POST['submit'])) { 
        $name = $_POST['name'];
        $password = $_POST['password'];
        $password =md5($password);
    $query="select * from users where name = '$name' and password = '$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);  
        if($count == 1){  
            $_SESSION['user']=$row['name'];
            header("Location: welcome.php");
        }  
        else {
            echo 'false';    }
    }
?>