<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<?php require('head.php');?>
<body>
<?php require('menu.php');?>
<div class="content-wrapper" >
<section class="content">
<br>
<div class="container-fluid">
<!-- Small boxes (Stat box) -->
<div class="row">
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-danger">
<div class="inner">
<h3><?php
$query = "SELECT COUNT(*) tbemployee FROM tbemployee;";
$result = mysqli_query( $con, $query );
$tbemployee = mysqli_fetch_assoc( $result );
echo $tbemployee['tbemployee'];?>
</h3>

<p>พนักงานทั้งหมด</p>
</div>
<div class="icon">
<i class="fas fa-user-tie"></i></div>
<a href="employee.php" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<!-- ./col -->
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-danger">
<div class="inner">
<h3><?php
$query = "SELECT COUNT(*) totaluser FROM tbuser;";
$result = mysqli_query( $con, $query );
$totaluser = mysqli_fetch_assoc( $result );
echo $totaluser['totaluser'];?>
</h3>

<p>ลูกค้าทั้งหมด</p>
</div>
<div class="icon">
<i class="fas fa-user-alt"></i>
</div>
<a href="customer.php" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
<div class="col-lg-3 col-6">
<!-- small box -->
<div class="small-box bg-danger">
<div class="inner">
<h3><?php
$query = "SELECT COUNT(*) totalroom FROM tbroom;";
$result = mysqli_query( $con, $query );
$totalroom = mysqli_fetch_assoc( $result );
echo $totalroom['totalroom'];?>
</h3>

<p>ข้อมูลห้องพัก</p>
</div>
<div class="icon">
<i class="fas fa-hotel"></i>
</div>
<a href="room.php" class="small-box-footer">ข้อมูลเพิ่มเติม <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>
</section>
</div>

<?php require('footer.php');?>
</body>
</html>
