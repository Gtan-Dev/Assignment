<?php
include 'config.php';
session_start();
$email = $_POST['email'];
$sql = "SELECT * FROM `assessment` WHERE `email` = '$email'";
$checksql = mysqli_query($conn, $sql);
if (mysqli_num_rows($checksql) > 0) {
    $saved = mysqli_fetch_assoc($checksql);
    if ($saved['email'] == $email) {
        $_SESSION['user'] = $saved;
        header('location:pass_login.php');
    }
}else {
    $_SESSION['error'] = "Invalid email !";
    header('location:email_login.php');
}
if (empty($email)) {
    $_SESSION['error'] = "empty email !";
    header('location:email_login.php');
}
?>