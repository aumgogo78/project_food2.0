<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include './components/header.php'; ?>

    <section class="text-center" style="height: 100vh; background-image: url(assets/imgs/imgs1.png); background-size: cover; background-position: 50%;">
        <div class="d-flex align-items-center justify-content-center">
            <span class="taviraj-medium color-text " style="font-size: 48px; margin-top: 250px;">
                WELCOME TO OUR RESTAURANT
            </span>
        </div>
        <div class="d-flex justify-content-center">
            <div class="zone-text">
                <span class="taviraj-extralight text-light " style="font-size: 28px;">
                    Every dish crafted with care, the service is warm, and only qulity ingredients are used just like home, at Homey.
                </span>
            </div>
        </div>
        <button type="button" class="btn rounded-5 px-4 py-2 my-3 btn_hover" style="font-size: 18px;"><a href="Menu.php" class="nav-link">Discover Our Menu</a></button>
    </section>
</body>

</html>