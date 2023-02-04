<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จองห้องพัก</title>
    <?php require('head.php');?>
</head>
<body>
<?php require('nav.php');?>
<div class="content-wrapper">
    <div class="container col-sm-12 text-left">
    <br>
        <div class="form-group col-md-8-center">
        <h3>จองห้องพัก</h3>
        </div>
        <?php
    include('server/conadmin.php');

   $sql="select*from tbuser where UserID='".$_SESSION['UserID']."'";
   $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้"); 
   while($row=mysqli_fetch_array($runsql))
   extract($row);
   ?>
<form action="addreserved.php" method="post">
<div class="form-row">
    <div class="form-group col-md-8-center">
      <label for="namereserved" class="breadcrumb">ชื่อผู้จอง</label>
      <input type="text" class="form-control" name="Cusname" id="Cusname" value="<?php echo $Cusname;?>" readonly>
    </div>
    <div class="form-group col-md-8-center">
      <label for="typeroom" class="breadcrumb">ประเภทห้อง</label>
      <select  name="typeroom" id="typeroom" class="form-control">
		<option value="เลือประเภทห้องพัก">เลือประเภทห้องพัก</option>
          <option value="ห้องพักเตียงเดี่ยว">ห้องพักเตียงเดี่ยว</option>
          <option value="ห้องพักเตียงคู่">ห้องพักเตียงคู่</option>
          <option value="ห้องพักเตียงคู่ (ครบ)">ห้องพักเตียงคู่ (ครบ)</option>
    </select>
    </div>
    <div class="form-group col-md-8-center">
      <label for="queudate" class="breadcrumb">วันที่จอง</label>
      <input type="date" class="form-control" name="datereserved" id="datereserved"  min="<?php echo date('Y-m-d');?>" required >
      <br>
      <label for="detail" class="breadcrumb">ประเภทห้อง</label>
     <select  name="detail" id="detail" class="form-control">
		<option value="เลือกจำนวน">เลือกจำนวน</option>
          <option value="1 คน">1 คน</option>
          <option value="2 คน">2 คน</option>
          <option value="3 คน">3 คน</option>
    </select>
    </div> <br> 
    

    <div class="form-group  col-md-1 ">
    <button  type="submit" name="submit" id="submit" class="btn btn-success  btn-lg">กดยืนยัน</button>
    </div>
  </div>
</form>
</div>
</div>
<?php require('footer.php');?>    
</body>
</html>


