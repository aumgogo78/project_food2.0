<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $product = $_POST['name'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $product_image = null;

    if (isset($_FILES['imgs_menu']) && $_FILES['imgs_menu']['error'] == 0) {
        $target_dir = "../../assets/imgs/";
        $image_name = basename($_FILES["imgs_menu"]["name"]);
        $target_file = $target_dir . $image_name;

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
            if (move_uploaded_file($_FILES["imgs_menu"]["tmp_name"], $target_file)) {
                $product_image = $image_name;
            } else {
                $_SESSION['error'] = "Sorry, there was an error uploading your file.";
                header("Location: ../editmenu.php?id=" . $id);
                exit;
            }
        } else {
            $_SESSION['error'] = "Invalid file  type. Only JPG, JPEG, PNG & GIF file are allowed.";
            header("Location: ../editmenu.php?id=" . $id);
            exit;
        }
    }

    $stmt = $pdo->prepare("UPDATE menu SET name = ? , description = ?, price = ?" . ($product_image ? ",imgs_menu = ?" : "") . "WHERE id = ?");
    $params = [$product, $des, $price];
    if ($product_image) {
        $params[] = $product_image;
    }
    $params[] = $id;
    $result = $stmt->execute($params);

    if ($result) {
        $_SESSION['success'] = "Menu update successfully";
        header("Location: ../Menulist.php");
    } else {
        $_SESSION['error'] = "Failed to update this menu.";
        header("Location: ../editmenu.php?id=" . $id);
    }
    exit;
}