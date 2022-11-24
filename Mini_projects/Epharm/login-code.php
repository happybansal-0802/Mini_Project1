<?php
session_start();
include('dbconfig.php');

if(isset($_POST['login_button']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM customers where email='$email' and password='$password' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        $row = mysqli_fetch_array($query_run);

        // Authenticating Logged In User
        $_SESSION['authentication'] = true;

        // Storing Authenticated User data in Session
        $_SESSION['auth_user'] = [
            
            'user_fullname'=>$row['name'],
            'user_email'=>$row['email'],
        ];

        $_SESSION['message'] = "You are Logged in "; //message to show
        header("Location: home.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password"; //message to show
        header("Location: signup.php");
        exit(0);
    }
}
?>