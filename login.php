<?php

session_start();
include_once('connection.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    
    $email_pattern = "/^[a-zA-Z0-9._%+-]+@mmcoe\.edu\.in$/"; 
    if (!filter_var($username, FILTER_VALIDATE_EMAIL) || !preg_match($email_pattern, $username)) {
        echo "<script>alert('Invalid Email Format or Pattern');</script>";
        exit;
    }

    $sql = "SELECT * FROM `tbl_user` WHERE `username`='$username' AND `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if (empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert('Please Fill Username and Password');</script>";
        exit;
    } elseif (empty($_POST['password'])) {
        echo "<script>alert('Please Fill Password');</script>";
        exit;
    } elseif (empty($_POST['username'])) {
        echo "<script>alert('Please Fill Username');</script>";
        exit;
    } else {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $name = $row['name'];
            $username = $row['username'];
            $password = $row['password'];

            if ($username == $username && $password == $password) {
                $_SESSION['name'] = $name;
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header('location:dashboard.php');
            }
        } else {
            echo "<script>alert('Invalid Username or Password');</script>";
            exit;
        }
    }
}

?>