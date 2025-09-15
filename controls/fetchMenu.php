<?php
    include './controls/db.php';
    session_start();

    // ดึงข้อมูลผู้ใช้งานจาก database
    $sql = "SELECT `id`, `name`, `description`, `price`, `imgs_menu` FROM `menu`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>