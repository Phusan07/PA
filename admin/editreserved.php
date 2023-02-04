<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>จัดการข้อมูลการจอง</title>
    <?php require('head.php');?>
</head>
<body>
    <?php require('menu.php');?>
    
<div class="content-wrapper">
<?php
if($_GET["ReservedID"]==''){
echo "<script type='text/javascript'>";
echo "alert('Error Conract Admin !!');";
echo "window.location = 'admin.php';";
echo "</script>";
}
$ReservedID = mysqli_real_escape_string($con,$_GET['ReservedID']);
$sql = "SELECT * FROM tbreserved WHERE ReservedID = '$ReservedID' ";
$result = mysqli_query($con,$sql) or die ("Eror in query: $sql" . mysqli_error());
$row = mysqli_fetch_array($result);
?>
         <div class="container col-sm-9 pt-5">
            <div class="row">
                <h2 class="col-sm-9" style="text-align: center;"> รายละเอียดการจองคิว <h2><br>
    </div>

    <form action="editreserved2.php"method="post" enctype="multipart/form-data"><br>
      <div class="row">
               <div class="col-sm-2 mt-3">
               <label for="case_status" class="breadcrumb">รหัสจอง</label>
               <input style="text-align: center;" type="text" name="ReservedID" id="ReservedID" required class ="form-control"autocomplete="off" maxlength="10" value=<?php echo $row['ReservedID'];?> readonly>
    </div>
               <div class="col-sm-7 mt-3">
                   <label for="case_status" class="breadcrumb">ชื่อผู้ติดต่อ</label>
                   <input style="text-align: center;" type="text" name="Cusname" id="Cusname" required class ="form-control"autocomplete="off" maxlength="10" value=<?php echo $row['Cusname'];?> readonly>
    </div>
    </div>
    <div class="row mt-3">
              <div class="col-sm-9 ">
              <label for="case_status" class="breadcrumb"> รายละเอียดการติดต่อ </label>
              <textarea style="text-align: left;" textarea name="detail" id="detail" require class ="form-control" readonly><?php echo $row['detail'];?></textarea>
    </div>

    <div class="col-sm-9 mt-3">
                   <label for="case_status" class="breadcrumb">วันจอง</label>
                   <input type="date" class="form-control" name="datereserved" id="datereserved" value=<?php echo $row['datereserved'];?> readonly>
    </div>
    
    <div class="col-sm-9 mt-3">
        <label for=typeroom" class="breadcrumb">ประเภทห้องพัก</label>
    <select name="typeroom" id="typeroom" class="form-control" >
    <option value="เลือกเวลา">-- Select --</option>
          <option value="ห้องพักเตียงเดี่ยว"<?php if($row['typeroom']=='ห้องพักเตียงเดี่ยว'){?>selected <?php }?>>ห้องพักเตียงเดี่ยว</option>
          <option value="ห้องพักเตียงคู่"<?php if($row['typeroom']=='ห้องพักเตียงคู่'){?>selected <?php }?>>ห้องพักเตียงคู่</option>
          <option value="ห้องพักเตียงคู่ (ครบ)"<?php if($row['typeroom']=='ห้องพักเตียงคู่ (ครบ)'){?>selected <?php }?>>ห้องพักเตียงคู่ (ครบ)</option>
    </select>
          <br>
          <label for="case_status" class="breadcrumb">สถานะ</label>
    <select name="case_status" id="case_status" class="form-control">
        <option value="">-- Select --</option>
        <option value="จองแล้ว" <?php if($row['case_status']=='จองแล้ว'){?>selected <?php }?>>จองแล้ว</option>
        <option value="ออกแล้ว" <?php if($row['case_status']=='ออกแล้ว'){?>selected <?php }?>>ออกแล้ว</option>
        
    </select>
          <br>
    </div>
    <div class="col-sm-9 mb-4">
        <input type="submit" class="btn btn-success" name="submit" id="submit" value="ยืนยันการแก้ไข">
        <a class="btn btn-danger" href="reserved.php"  > ยกเลิก </a>
    </div>
    <?php
          mysqli_close($con);
     ?>
     </div>
    </div>
    </form>
    </div>
    </div>
    <?php require('footer.php');?>         
</body>
</html>