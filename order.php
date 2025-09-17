<?php
session_start();
//เพิ่มจำนวนสินค้าในตะกร้า
if (isset($_POST['action']) && $_POST['action'] == 'increase' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    foreach ($_SESSION['cart'] as $key => $item) { //ใช้ $key เพื่อไม่ให้มีการอ้างอิงโดยตรง
        if ($item['productId'] == $productId) {
            $_SESSION['cart'][$key]['quantity'] += 1;
            break;
        }
    }
}

//ลดจำนวนสินค้าในตะกร้า
if (isset($_POST['action']) && $_POST['action'] == 'decrease' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['productId'] == $productId && $item['quantity'] > 1) {
            $_SESSION['cart'][$key]['quantity'] -= 1;
            break;
        }
    }
}

//ลบสินค้าออกจากตะกร้า
if (isset($_POST['action']) && $_POST['action'] == 'remove' && isset($_POST['productId'])) {
    $productId = $_POST['productId'];
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['productId'] == $productId) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

// คำนวณราคาทั้งหมด
$totalPrice = 0;
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += (float)$item['productPrice'] * (int)$item['quantity'];
    }
}

include './controls/fetchAddress.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- icon boostrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <?php include './components/header.php' ?>

    <section id="cart_product">
        <div class="container">
            <h2 class="text-center mt-5 pb-5 bd color-text">Order</h2>

            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) : ?>
                <div class="row g-3"> <!-- ใช้ row/gutter เพื่อระยะห่างเหมือนเดิม -->
                    <?php foreach ($_SESSION['cart'] as $index => $food) : ?>
                        <div class="col-12">
                            <div class="card mt-5" style="cursor: pointer; border: 1px solid #555555ff;" data-bs-toggle="collapse" data-bs-target="#collapse<?= $index ?>" aria-expanded="false" aria-controls="collapse<?= $index ?>">
                                <img src="./assets/imgs/<?= htmlspecialchars($food['productImage']); ?>" class="card-img-top" alt="<?= htmlspecialchars($food['productName']); ?>" style="height: 200px; object-fit: cover;">
                                <div class="nmenu">
                                    <h2><?= htmlspecialchars($food['productName']); ?></h2>
                                </div>
                                <div class="qtity">
                                    <h2><Strong>Quantity : </Strong><?= htmlspecialchars($food['quantity']); ?></h2>
                                </div>
                            </div>

                            <!-- Collapsible content -->
                            <div id="collapse<?= $index ?>" class="collapse rounded" style="box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.25);">
                                <div class="p-3 d-flex justify-content-between">
                                    <div>
                                        <p><strong>Price:</strong> <?= htmlspecialchars($food['productPrice']); ?> ฿</p>
                                        <p><strong>Total Price:</strong> <?= htmlspecialchars($food['productPrice'] * $food['quantity']); ?> ฿</p>
                                    </div>
                                    <div>
                                        <div class="d-flex align-items-center gap-2 mt-2">
                                            <form method="post" style="display:inline;">
                                                <input type="hidden" name="productId" value="<?= htmlspecialchars($food['productId']); ?>">
                                                <input type="hidden" name="action" value="increase">
                                                <button type="submit" class="btn btn-success"><i class="bi bi-plus-circle-fill"></i></button>
                                            </form>

                                            <form method="post" style="display:inline;">
                                                <input type="hidden" name="productId" value="<?= htmlspecialchars($food['productId']); ?>">
                                                <input type="hidden" name="action" value="decrease">
                                                <button type="submit" class="btn btn-warning"><i class="bi bi-dash-circle-fill"></i></button>
                                            </form>

                                            <form method="post" style="display:inline;" onsubmit="confirmDelete(event)">
                                                <input type="hidden" name="productId" value="<?= htmlspecialchars($food['productId']); ?>">
                                                <input type="hidden" name="action" value="remove">
                                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="mt-4">
                    <h4><strong>Total Price: <?= number_format($totalPrice, 2) ?> ฿</strong></h4>
                </div>
            <?php else : ?>
                <p class="text-center mt-5">There are no products in your cart.</p>
            <?php endif; ?>

            <!-- Address แสดงปกติ -->
            <div class="mt-5 text-left">
                <h4><strong>Address</strong></h4>
                <hr>
                <p><strong>Name :</strong> <?= htmlspecialchars($row['firstName'] . " " . $row['lastName']); ?></p>
                <p><strong>Email :</strong> <?= htmlspecialchars($row['email']); ?></p>
                <p><strong>Tel :</strong> <?= htmlspecialchars($row['phone']); ?></p>
                <p><strong>Address :</strong> <?= htmlspecialchars($row['address']); ?></p>
            </div>
    </section>

    <script>
        function confirmDelete(event) {
            event.preventDefault();
            const form = event.target;
            Swal.fire({
                text: "Do you want to remove this menu from the order?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        }
    </script>

    <?php include './components/footer.php'; ?>

</body>


</html>