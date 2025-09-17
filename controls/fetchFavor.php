<?php
    include './controls/db.php';

    // ดึงข้อมูลผู้ใช้งานจาก database
    $sql = "SELECT `id`, `name`, `description`, `price`, `imgs_menu` FROM `favorite`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
?>