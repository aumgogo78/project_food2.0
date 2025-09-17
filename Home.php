<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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

    <section class="text-center" style="height: 100vh; background-image: url(assets/imgs/imgs1.png); background-size: cover; background-position: 50%;">
        <div class="d-flex align-items-center justify-content-center">
            <span class="taviraj-medium color-text " style="font-size: 48px; margin-top: 250px;">
                WELCOME TO OUR RESTAURANT
            </span>
        </div>
        <div class="d-flex justify-content-center">
            <div class="zone-text">
                <span class="taviraj-extralight text-light " style="font-size: 28px;">
                    Every dish crafted with care, the service is warm, and only qulity ingredients are used just like home, at Homey.
                </span>
            </div>
        </div>
        <button type="button" class="btn rounded-5 px-4 py-2 my-3 btn_hover" style="font-size: 18px;"><a href="Menu.php" class="nav-link">Discover Our Menu</a></button>
    </section>


    
    <div class="container py-5">
        <h2 class="text-center mb-5 bd pb-5 color-text">Best selling menu</h2>
        <div class="row d-flex justify-content-center bd pb-5" >
                <!-- อันดับ 3 -->
                <div class="col-md-4 mb-4 px-5" >
                    <div class="menu-card-3">
                        <span class="rank-badge rank-3 fs-3">3</span>
                        <div class="menu-info">
                            <h5>Yigithan</h5>
                            <button class="btn-order">order now</button>
                        </div>
                    </div>
                </div>

                <!-- อันดับ 1 -->
                <div class="col-md-4 mb-4 px-5">
                    <div class="menu-card-1">
                        <span class="rank-badge rank-1 fs-3">1</span>
                        <div class="menu-info">
                            <h5>Steak</h5>
                            <button class="btn-order">order now</button>
                        </div>
                    </div>
                </div>

                <!-- อันดับ 2 -->
                <div class="col-md-4 mb-4 px-5">
                    <div class="menu-card-2">
                        <span class="rank-badge rank-2 fs-3">2</span>
                        <div class="menu-info">
                            <h5>fried rice</h5>
                            <button class="btn-order">order now</button>
                        </div>
                    </div>
                </div>

        </div>
    </div>

    <div style="height: 100vh; background-image: url(assets/imgs/pexels-mart-production-9566087.jpg); background-size: cover; background-repeat: no-repeat;">
      <div class="p text-white">
          <p style="font-size: 80px">Homey</p>
          <div class="px-5 fw-light" style="font-size: 25px;">
            <p class="mb-5">HOMEY หมายถึง ความอบอุ่น เป็นกันเอง สบายๆ ลักษณะของอาหาร ให้รสชาติที่รู้สึกอบอุ่น สบายๆรับประทานง่าย เป็นกันเองเรียบง่ายแต่ยังมีคุณภาพและรสชาติที่ดี</p>
            <p class="mt-5">การใช้คำว่า Homey กับอาหาร สื่อถึงการสร้างความผูกพันกับผู้ทานให้ความรู้สึกเหมือนเป็นคนในครอบครัวไม่ห่างเหิน สามารถทำให้ผู้ทานรู้สึกว่าสามารถมารับประทานได้ตลอดเวลาไม่จำเป็นต้องมาเนื่องในโอกาสพิเศษใดๆ</p>
          </div>
      </div>
    </div>

    <?php include './components/footer.php'; ?>
</body>

</html>