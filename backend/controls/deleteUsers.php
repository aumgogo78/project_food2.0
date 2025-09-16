<?php
    session_start();
    include 'db.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $stmt = $pdo->prepare("DELETE FROM menu WHERE id = ?");
        $result = $stmt->execute([$id]);

        if ($result) {
            $_SESSION['success'] = "Menu deleted successfully";
            header("Location: ../Menulist.php");
        } else {
            $_SESSION['error'] = "Failed to delete this Menu.";
            header("Location: ../Menulist.php");
        }

        exit;
    }
?>