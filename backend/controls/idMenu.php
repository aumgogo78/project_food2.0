<?php
    include 'db.php';

    // ดึงข้อมูลผู้ใช้งานตาม id
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM menu WHERE id = ?");
    $stmt->execute([$id]);
    $food = $stmt->fetch(PDO::FETCH_ASSOC);
?>