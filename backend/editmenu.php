<?php
include './controls/idMenu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- icon boostrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include '../backend/components/header.php'; ?>
    <div class="d-flex">
        <main class="p-4 flex-grow-1">
            <div class="d-flex justify-content-center align-content-center h-b mt-4 text-center">
                <a href="Menulist.php" class="fs-3 text-black"><i class="bi bi-chevron-left chev"></i></a>
                <div class="flex-grow-1 text-center">
                    <h2 class="color-text ">Edit Menu</h2>
                </div>
            </div>
            <form action="controls/editMenu.php" method="POST" enctype="multipart/form-data" class="mt-5">
                <input type="hidden" name="id" value="<?= $food['id']; ?>">
                <div class="mb-3">
                    <label for="" class="form-label">name</label>
                    <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($food['name']); ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" value="<?= htmlspecialchars($food['description']); ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" value="<?= htmlspecialchars($food['price']) ?>">
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Picture</label>
                    <input type="file" name="imgs_menu" class="form-control">
                </div>

                <div class="mb-3 d-flex flex-column">
                    <label for="" class="form-label">Show Picture</label>
                    <img style="max-width: 200px;" src="../assets/imgs/<?= htmlspecialchars($food['imgs_menu']); ?>" alt="">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </main>
    </div>

    <?php if (isset($_SESSION['success'])) : ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '<?= $_SESSION['success']; ?>',
                confirmButtonText: 'Confirm'
            });
        </script>
    <?php unset($_SESSION['success']);
    endif; ?>

    <?php if (isset($_SESSION['error'])) : ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '<?= $_SESSION['error']; ?>',
                confirmButtonText: 'Confirm'
            });
        </script>
    <?php unset($_SESSION['error']);
    endif; ?>
</body>

</html>