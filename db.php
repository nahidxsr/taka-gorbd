<?php
$conn = new mysqli("localhost", "root", "", "income_zone");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
