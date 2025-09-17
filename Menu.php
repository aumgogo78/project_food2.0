<?php
session_start();
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
                <div class="container mt-5 mb-5">
                    <div class="row justify-content-center">
                        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
                            <div class="col-md-3 mb-4">
                                <!-- Flip Card -->
                                <div class="myCard mx-auto gap-4" style="perspective: 1000px; width: 300px; height: 400px;">
                                    <div class="innerCard position-relative w-100 h-100 text-center"
                                        style="transition: transform 0.8s; transform-style: preserve-3d; cursor: pointer;">

                                        <!-- Front Side -->
                                        <div class="frontSide d-flex flex-column align-items-center justify-content-end rounded-4 shadow"
                                            style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; background: url('./assets/imgs/<?= htmlspecialchars($row['imgs_menu']); ?>') center/cover no-repeat; font-weight: 700;">
                                        </div>

                                        <!-- Back Side -->
                                        <div class="backSide text-white rounded-4 shadow d-flex flex-column justify-content-between "
                                            style="position: absolute; width: 100%; height: 100%; backface-visibility: hidden; background-color: rgba(129, 129, 129, 1); transform: rotateY(180deg); font-weight: 200;">

                                            <!-- Text section: ชิดซ้าย -->
                                            <div class="text-start p-4 flex-grow-1 sb" style="overflow-y: auto; word-wrap: break-word;">
                                                <p class="mb-2"><strong class="fw-bold">Name : </strong><?= htmlspecialchars($row['name']); ?></p>
                                                <p class="mb-2"><strong class="fw-bold">Price : </strong><?= htmlspecialchars($row['price']); ?> ฿</p>
                                                <p class="mb-2"><strong class="fw-bold">Description : </strong><?= htmlspecialchars($row['description']); ?></p>
                                            </div>

                                            <!-- Button section: อยู่ล่างกลาง -->
                                            <div class="d-flex justify-content-center p-3">
                                                <a href="MenuDetail.php?id=<?= $row['id'] ?>" class="b p-2 w-100 fw-medium">
                                                    Menu Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php include './components/footer.php'; ?>
</body>

</html>
