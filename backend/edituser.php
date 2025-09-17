<?php
include './controls/idUser.php';
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
                    <h2 class="color-text ">Edit User</h2>
                </div>
            </div>
            <form action="controls/editUser.php" method="POST" enctype="multipart/form-data" class="mt-5 px-5 mb-5">
                <input type="hidden" name="id" value="<?= $user['id']; ?>">
                <div class="mb-3">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" class="form-control" value="<?= htmlspecialchars($user['firstName']); ?>">
                </div>

                <div class="mb-3">
                    <label for="">Last Name</label>
                    <input type="text" name="lastName" class="form-control" value="<?= htmlspecialchars($user['lastName']); ?>">
                </div>

                <div class="mb-3">
                    <label for="">Address</label>
                    <textarea name="address" id="" class="form-control"><?= htmlspecialchars($user['address']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="">Phone Number</label>
                    <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($user['phone']); ?>">
                </div>

                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($user['email']); ?>">
                </div>

                <div class="mb-3">
                    <label for="">Role</label>
                    <select name="role" class="form-control">
                        <option value="" selected disabled><- Select Role -></option>
                        <option value="admin" <?= htmlspecialchars($user['role']) == 'Admin' ? 'selected' : '' ?>>Admin</option>
                        <option value="customer" <?= htmlspecialchars($user['role']) == 'Customer' ? 'selected' : '' ?>>Customer</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Profile Image</label>
                    <input type="file" name="profile_image" class="form-control">
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