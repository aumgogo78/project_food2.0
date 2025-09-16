
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Menu</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <?php include './components/header.php'; ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 40%; border-radius: 6ch;">
        <div class="card" style="width: 100%; border-radius: 4ch; box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25);">
            <div class="row g-0">

                <div class="col-md-12">
                    <div class="card-body px-5 py-4 justify-content-center align-items-center">
                        <h2 class="text-center mt-3">Add Menu</h2>
                        <form method="POST" action="controls/createMenu.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            <div class="mb-4">
                                <label for="" class="form-label">Menu Image <p class="d-inline text-danger">(Please upload an image)</p></label>
                                <input type="file" name="imgs_menu" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Add</button>
                            <div class="text-center mt-3"></div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>