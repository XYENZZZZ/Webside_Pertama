<?php
session_start();
include "koneksi.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

if (mysqli_num_rows($result) == 1) {
    $_SESSION['email'] = $email;
    header('location: data.php');
} else {
    echo "
    <div style='
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f8d7da;
        font-family: Arial, sans-serif;
    '>
        <div style='
            padding: 20px;
            border: 2px solid #d9534f;
            border-radius: 10px;
            background-color: #f8d7da;
            color: #721c24;
            text-align: center;
        '>
            <h2>Login Failed</h2>
            <p>Email or password is incorrect.</p>
            <p><a href='login.php' style='color: #004aad; text-decoration: none;'>Try Again</a></p>
        </div>
    </div>";
}
?>
