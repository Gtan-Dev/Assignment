<?php
include 'config.php';
session_start();
$pass = $_POST['pass'];
$sql = "SELECT * FROM `assessment` WHERE `password` = '$pass'";
$checksql = mysqli_query($conn, $sql);
if (mysqli_num_rows($checksql) > 0) {
    $saved = mysqli_fetch_assoc($checksql);
    if ($saved['pass'] == $pass) {
        $_SESSION['user'] = $saved;
        header('location:dashboard.php');
    }
}else {
    $_SESSION['error'] = "Invalid password !";
    header('location:pass_login.php');
}
if (empty($pass)) {
    $_SESSION['error'] = "empty password !";
    header('location:pass_login.php');
}
?>