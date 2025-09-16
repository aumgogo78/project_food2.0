<?php
include './controls/idMenu.php';
include './controls/fetchMenu.php';
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
    <main class="">
        <div class="d-flex justify-content-center align-content-center bd p-4 text-center" style="box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25);">
            <a href="Menu.php" class="fs-3 text-black"><i class="bi bi-chevron-left chev"></i></a>
            <div class="flex-grow-1 text-center">
                <h2 class="color-text">Menu Details</h2>
            </div>
            <a href="order.php" class="color-text"><i class="bi bi-cart3 od"></i> Order</a>
        </div>
        <?php if (!empty($food)): ?>

            <div class="bd">
                <div class="text-center mt-5 mb-5">
                    <img style="width: 100vh; box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25);" src="./assets/imgs/<?= htmlspecialchars($food['imgs_menu']); ?>" alt="">
                </div>
            </div>

            <div class="bd m">
                <div class="mt-5 mb-5 d-flex flex-column align-content-between px-5" style=" word-wrap: break-word;">
                    <h5><strong>Name : </strong><?= htmlspecialchars($food['name']); ?></h5>
                    <h5><strong>Price : </strong><?= htmlspecialchars($food['price']); ?> ฿</h5>
                    <h5><strong>Description : </strong><?= htmlspecialchars($food['description']); ?></h5>
                </div>
            </div>
        <?php else: ?>
            <p>Menu not found.</p>
        <?php endif; ?>

        <div class="d-flex justify-content-center align-content-center p-4 text-center gap-5 bt w-100 bg-white">
            <button type="submit" class="btn-favorite w-50">
                <i class="bi bi-star"></i> Add to favorite
            </button>
            <button class="btn-add-to-order w-50" id="add-to-order"
                data-id="<?= htmlspecialchars($food['id']); ?>"
                data-name="<?= htmlspecialchars($food['name']); ?>"
                data-price="<?= htmlspecialchars($food['price']); ?>"
                data-image="<?= htmlspecialchars($food['imgs_menu']); ?>">
                <i class="bi bi-cart3"></i> Add to order
            </button>
        </div>
    </main>

    <?php include './components/footer.php'; ?>
</body>

</html>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('#add-to-order');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-id');
                const productName = this.getAttribute('data-name');
                const productPrice = this.getAttribute('data-price');
                const productImage = this.getAttribute('data-image');

                fetch('./controls/addToOrder.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/x-www-form-urlencoded'
                        },
                        body: new URLSearchParams({
                            productId: productId,
                            productName: productName,
                            productPrice: productPrice,
                            productImage: productImage
                        })
                    })
                    .then(response => response.text())
                    .then(data => {
                        Swal.fire({
                            title: 'สำเร็จ',
                            text: `${productName} ได้ถูกเพิ่มลงในตะกร้าแล้ว!`,
                            icon: 'success',
                            confirmButtonText: 'ตกลง'
                        });
                    }).catch(error => {
                        Swal.fire({
                            title: 'เกิดข้อผิดพลาด',
                            text: `${error.message} ไม่สามารถเพิ่มสินค้าได้ กรุณาลองใหม่อีกครั้ง`,
                            icon: 'error',
                            confirmButtonText: 'ตกลง'
                        });
                    });

            });
        });
    });
</script>