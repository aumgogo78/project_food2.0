<link rel="stylesheet" href="../assets/css/style.css">

<nav class="bg-light p-3" style="width: 100%; height: 280px; box-shadow: 0px 5px 25px rgba(0, 0, 0, 0.25);">
    <div>
        <div class="d-flex container" style="justify-content: space-between; padding: 25px;">
            <a href="signin.php" class="nav-link text-dark"><i class="bi bi-person-fill"></i> <?= htmlspecialchars($_SESSION['name']); ?></a>
            <!-- <a href="./backend/setting.php" class="nav-link text-dark"><i class="bi bi-gear-fill"></i> Setting</a> -->
            <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-gear-fill"></i> Setting
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php if(isset($_SESSION['role']) && $_SESSION ['role'] === 'admin' ) : ?>
                            <li><a href="/project_food2.0/backend/Menulist.php" class="dropdown-item" >จัดการข้อมูล</a></li>
                            <?php endif; ?>
                            <li><a href="profile.php" class="dropdown-item">โปรไฟล์</a></li>
                            <li><a href="controls/signout.php" class="dropdown-item">ออกจากระบบ</a></li>   
                        </ul>
                    </div>
        </div>

        <h4 class="text-center mb-4 taviraj-thin color-text" style="font-size: 90px;">HOMEY</h4>
        <div class="line">
            <ul class="nav nav-link d-flex py-3" style="justify-content: center; gap: 90px;">
                <li><a class="color-menu nav nav-link px-2 py-0" href="Home.php">Home</a></li>
                <li><a class="color-menu nav nav-link px-2 py-0" href="Menu.php">Menu</a></li>
                <li><a class="color-menu nav nav-link px-2 py-0" href="order.php">Order</a></li>
                <li><a class="color-menu nav nav-link px-2 py-0" href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>