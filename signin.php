<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Javascript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background-image: url('assets/imgs/ai-generated-cozy-restaurant-interior-with-warm-lighting-wooden-furniture-by-large-windows-generative-by-ai-photo\ \(1\).jpg'); background-size: cover; background-repeat: no-repeat;">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 40%; border-radius: 6ch;">
        <div class="card" style="width: 100%; border-radius: 6ch; box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25);">
            <div class="row g-0">
                <!-- ฟอร์มด้านซ้าย -->
                <div class="col-md-12 d-flex justify-content-center align-items-center py-5 px-3">
                    <div class="card-body p-4">
                        <!-- เข้าสู่ระบบ -->
                        <h1 class="text-center">SignIn</h1>
                        <form method="POST" action="./controls/signinUsers.php">
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">SignIn</button>
                        </form>
                        <!-- สมัครสมาชิก -->
                        <div class="text-center mt-3"></div>
                        <div class="text-center">
                            <span>Don't have an account?</span>
                            <a href="signup.php">Register</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
    <?php if (isset($_GET['error']) && $_GET['error'] == 'invalid') : ?>
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Invalid email or password',
        footer: 'Please try again.'
    });
    <?php endif; ?>
    </script>
</body>

</html>