<?php
include './controls/fetchMenu.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
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
    <section id="fetch_user">
        <div class="container">
            <h2 class="mb-4 mt-5 text-center h-b color-text">Menu</h2>
            <?php if ($stmt->rowCount() > 0) : ?>
                <div class="container mt-5">
                    <div class="row">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-3 mb-4">
                                <div class="card rounded-4">

                                <img style="max-width: 450px;" src="./assets/imgs/<?= htmlspecialchars($row['imgs_menu']); ?>" alt="">
                                    <div class="card-body" style="overflow: hidden;">
                                        
                                        <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                                        <div class="text-center">
                                            <button class="btn btn-primary" id="add-to-cart"
                                                data-id="<?= htmlspecialchars($row['id']); ?>"
                                                data-name="<?= htmlspecialchars($row['name']); ?>"
                                                data-price="<?= htmlspecialchars($row['price']); ?>"
                                                data-image="<?= htmlspecialchars($row['imgs_menu']); ?>">
                                                เพิ่มสินค้า</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endif ?>
        </div>
</html>