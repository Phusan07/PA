 <!-- Responsive navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-withe">
            <div class="container px-5">
            <a class="navbar-brand" href="index.php" style="color: #212121">
                    <img src="assets/logo.png" alt="" width="50" height="50" class="d-inline-round align-text-center">
                   PA apartment
                  </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown no-arrow "><a class="nav-link active" aria-current="page" href="" style="color: #212121">Welcome: <?php print_r($_SESSION["Cusname"]);?></a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php" style="color: #212121">หน้าหลัก</a></li>
                        <li class="nav-item"><a class="nav-link" href="room.php" style="color: #212121">ห้องพัก</a></li>
                        <li class="nav-item"><a class="nav-link" href="about_us.php" style="color: #212121">เกี่ยวกับเรา</a></li>
                        <li class="nav-item d-none d-sm-inline-block ">     
                        <a onClick="return confirm('คุณต้องการออกจากระบบหรือไม่?')" href="checklogout.php" class="nav-link" style="color: #212121"></i>ออกจากระบบ <i class="fas fa-sign-out-alt"></i> </a>
                       </li>
                    </ul>
                </div>
            </div>
        </nav>
        