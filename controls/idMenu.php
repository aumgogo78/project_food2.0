<?php
include 'db.php';

$food = null;

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM menu WHERE id = ?");
    $stmt->execute([$id]);
    $food = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>