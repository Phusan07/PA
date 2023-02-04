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
 <?php

if ($rowdata=mysqli_fetch_array($runsql))
      {
      ?>
  <!-- Page Content-->
  <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-top my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="assets/room/room3.1.jpg" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">รายละเอียดห้องพัก</h1>
                    <p> - เตียงมีเฟอร์นิเจอร์ ตู้, โต๊ะเครื่องแป้ง, โต๊ะวางทีวี, เตียงพร้อมที่นอนคู่<br>
                        - อินเตอร์เน็ต 24 ชั่วโมง<br>
                        - เครื่องทำน้ำอุ่น<br>
                        - พัดลม 2 ตัว<br>
                        - กล้องวงจรปิด<br>
                        - ราคา 4,600 บาท / เดือน
                </p>
                    <a class="btn btn-warning" href="reserved.php">จองเลย!!</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">ติดต่อเราได้ที่ <br>
                    เบอร์ติดต่อ : 01-4874164 โทรศัพท์: 081-487-4164 </p></div>
            </div>
            
        <?php
        }
        mysqli_close($con);
        ?>
         
<?php require('footer.php');?>
</body>
</html>