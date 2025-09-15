<?php
    include './controls/db.php';

    // ดึงข้อมูลผู้ใช้งานจาก database
    $sql = "SELECT `id`, `firstName`, `lastName`, `address`, `email`, `password`, `phone` FROM `users`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>