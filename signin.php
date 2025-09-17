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

<body style="background-image: url('assets/imgs/interior-of-a-restaurant-ai-generated-free-photo.jpg'); background-size: cover; background-repeat: no-repeat; backdrop-filter: blur(10px);">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card" style="width: 50%; border-radius: 6ch; box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25); background-color: rgba(0, 0, 0, 0.4);">
            <div class="row g-0">
                <!-- ฟอร์มด้านซ้าย -->
                <div class="col-md-12 d-flex justify-content-center align-items-center py-5 px-3">
                    <div class="card-body px-4">
                        <!-- เข้าสู่ระบบ -->
                        <div class="d-flex justify-content-center align-content-center">
                            <a href="Home.php" class="ch">
                                <p class="" style="font-size: 40px;"><</p>
                            </a>
                            <h1 class="text-center text-white fw-lighter flex-grow-1" style="font-size: 60px;">Homey</h1>
                        </div>
                        <form method="POST" action="./controls/signinUsers.php" class="text-white">
                            <div class="mb-3 form_group field">
                                <input type="email" name="email" class="form_field" required>
                                <label for="" class="form_label">Email</label>
                            </div>
                            <div class="mb-3 form_group field">
                                <input type="password" name="password" class="form_field" required>
                                <label for="" class="form_label">Password</label>
                            </div>
                            <button type="submit" class="mt-3 w-100 bc">Log In</button>
                        </form>
                        <!-- สมัครสมาชิก -->
                        <div class="text-center mt-4"></div>
                        <div class="text-center">
                            <span class="text-white">Don't have an account?</span>
                            <a href="signup.php" class="regis">Register</a>
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