<!DOCTYPE html>
<html lang="en">
<?php require('head.php');?>
<body>
<?php require('nav.php');?>

<?php
include('server/conadmin.php');
$sql="select*from tbroom";
$runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
?>

  <!-- Page Content-->
  <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/apartment.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">อพาร์ทเม้นท์ P.A.</h1>
                    <p>P.A Apartment เปิดบริการห้องพัก 2,400-4,600/รายเดือน สะอาด สงบ มีที่จอดรถกว้างขวาง บริการห้องพัก ทั้งแอร์ และ พัดลม เครื่องทำน้ำอุ่น เฟอร์นิเจอร์ครบครัน ฟรี WiFi ฟรี cable ระบบรักษาความปลอดภัย ที่จอดรถยนต์ มอเตอร์ไซค์ กล้องวงจรปิด อินเตอร์เน็ต WiFi cable. พนักงานบริการ 24 ชั่วโมง!</p>
                    <a class="btn btn-warning" href="room.php">จองเลย!!</a>
                </div>
            </div>
            <?php

            if ($rowdata=mysqli_fetch_array($runsql))
                  {
                  ?>
                  
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">ติดต่อเราได้ที่ <br>
                    เบอร์ติดต่อ : 01-4874164 โทรศัพท์: 081-487-4164</p></div>
            </div>
            
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                            <img src="assets/room/room1.1.jpg" class="card-img-top" alt="...">
                            <h2 class="card-title" style="text-align: left">ห้องพักเตียงเดี่ยว</h2>
                            <p class="card-text" >ราคา 2,400. บาท / เดือน</p>
                            <p class="card-text">สถานะ: <?php echo $rowdata['r_status']; ?></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-warning btn-sm" href="roomdetail1.php">ดูรายละเอียด / จอง</a></div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                        <img src="assets/room/room2.jpg" class="card-img-top" alt="...">
                            <h2 class="card-title" style="text-align: left">ห้องพักเตียงคู่</h2>
                            <p class="card-text" >ราคา 3,000. บาท / เดือน</p>
                            <p class="card-text">สถานะ: <?php echo $rowdata['r_status']; ?></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-warning btn-sm" href="roomdetail2.php">ดูรายละเอียด / จอง</a></div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="card-body">
                        <img src="assets/room/room3.1.jpg" class="card-img-top" alt="...">
                            <h2 class="card-title" style="text-align: left">ห้องพักเตียงคู (สิ่งอำนวยความสดวกครบ)</h2>
                            <p class="card-text" >ราคา 4,600. บาท / เดือน</p>
                            <p class="card-text">สถานะ: <?php echo $rowdata['r_status']; ?></p>
                        </div>
                        <div class="card-footer"><a class="btn btn-warning btn-sm" href="roomdetail3.php">ดูรายละเอียด / จอง</a></div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        mysqli_close($con);
        ?>
         
<?php require('footer.php');?>
</body>
</html>