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

<body style="background-image: url('assets/imgs/ai-generated-cozy-restaurant-interior-with-warm-lighting-wooden-furniture-by-large-windows-generative-by-ai-photo.jpg'); background-size: cover; background-repeat: no-repeat; backdrop-filter: blur(10px);">
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh; max-width: 800px;">
        <div class="card" style="width: 100%; background-color: rgba(0, 0, 0, 0.4); border-radius: 6ch;">
            <div class="row g-0 shadow">

                <div class="col-md-12">
                    <div class="card-body p-5 justify-content-center align-items-center">
                        <div class="d-flex justify-content-center align-content-center">
                            <a href="Home.php" class="ch">
                                <p class="" style="font-size: 40px;"><</p>
                            </a>
                            <h2 class="text-center text-white fw-lighter flex-grow-1" style="font-size: 60px;">HOMEY</h2>
                        </div>
                        <form method="POST" action="controls/createUsers.php">
                            <div class="mb-3 form_group field">
                                <input type="text" name="firstName" class="form_field" required>
                                <label for="" class="form_label">First Name</label>

                            </div>

                            <div class="mb-3 form_group field">
                                <input type="text" name="lastName" class="form_field">
                                <label for="" class="form_label">Last Name</label>

                            </div>

                            <div class="mb-3 form_group field">
                                <input type="email" name="email" class="form_field">
                                <label for="" class="form_label">Email</label>

                            </div>

                            <div class="mb-3 form_group field">
                                <input type="password" name="password" class="form_field">
                                <label for="" class="form_label">Password</label>

                            </div>

                            <div class="mb-3 form_group field">
                                <input type="text" name="phone" class="form_field">
                                <label for="" class="form_label">Phone</label>

                            </div>

                            <div class="mb-3 form_group field">
                                <textarea name="address" id="" class="form_field"></textarea>
                                <label for="" class="form_label">Address</label>
                            </div>

                            <button type="submit" class="btn w-100 mt-3 bc">Register</button>
                            <div class="text-center mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>