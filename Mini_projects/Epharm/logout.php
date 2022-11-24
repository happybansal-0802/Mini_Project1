<?php
    session_start();
    unset($_SESSION["authentication"]);
    unset($_SESSION["auth_user"]);

    $_SESSION['message'] = "Please log in";
    header("Location: dashboard.html");
    exit(0);
?>