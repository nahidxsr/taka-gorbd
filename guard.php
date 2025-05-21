<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include 'db.php';
$uid = $_SESSION['user_id'];
$result = $conn->query("SELECT is_active FROM users WHERE id = '$uid'");
$row = $result->fetch_assoc();

if ($row['is_active'] != 1 && basename($_SERVER['PHP_SELF']) != 'activation.php') {
    header("Location: activation.php");
    exit();
}
?>
