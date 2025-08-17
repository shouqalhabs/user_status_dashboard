<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = (int)$_POST['age'];

    $stmt = $conn->prepare("INSERT INTO users (name, age, status) VALUES (?, ?, 1)");
    $stmt->bind_param("si", $name, $age);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>
