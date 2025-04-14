#!/usr/local/bin/php
<?php
session_start();
if (!isset($_SESSION['valid']) || $_SESSION['valid'] !== "session_active") {
    header('Location: ../index.php');
    exit();
}

if (isset($_GET['id'])) {
    $db = new mysqli("localhost", "your_user", "your_password", "your_database");
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $stmt = $db->prepare("DELETE FROM movies WHERE id = ?");
    $stmt->bind_param("i", $id);
    $id = (int) $_GET['id'];

    $stmt->execute();
    $stmt->close();
    $db->close();
}

header("Location: index.php");
exit();
?>
