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
<div class="content-wrapper">
           
       
         <!-- Page Content-->
         <div class="content-wrapper">
            <br>
            <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">ห้องพัก</h1>
            <br>
        </div>
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
                        <h2 class="card-title" style="text-align: left">ห้องพักเตียงคู่ (สิ่งอำนวยความสดวกครบ)</h2>
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