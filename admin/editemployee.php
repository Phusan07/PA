<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DashBoard</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
 
<div class="content-wrapper">
   <?php
   if($_GET["EmpID"]==''){ 
   echo "<script type='text/javascript'>"; 
   echo "alert('Error Contact Admin !!');"; 
   echo "window.location = 'admin.php'; "; 
   echo "</script>"; 
   }
   $EmpID = mysqli_real_escape_string($con,$_GET['EmpID']);
   $sql = "SELECT * FROM tbemployee WHERE EmpID='$EmpID' ";
   $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
   $row = mysqli_fetch_array($result);
   ?>
     <div class="container col-sm-9 pt-5">
            <div class="row pt-3">
                <h2 class="col-sm-9" style="text-align: center;">รายละเอียดพนักงาน</h2><br>
            </div>      
       <form action="editemployee2.php"method="post" enctype="multipart/form-data"><br>
         <div class="row">
         <div class="col-sm-2 mt-3">
               <label for="case_status" class="breadcrumb"> รหัส</label>
               <input style="text-align: center;" type="text" name="EmpID" id="EmpID" required class ="form-control"autocomplete="off" maxlength="10" value=<?php echo $row['EmpID'];?> readonly>
    </div>      
                       <div class="col-sm-7 mt-3">
                       <label for="case_status" class="breadcrumb">ชื่่อผู้ติดต่อ</label>
                      <input style="text-align: left;" type="text" name="Empname" id="Empname" required class ="form-control"autocomplete="off" maxlength="30" value=<?php echo $row['Empname'];?> readonly>
                       </div>
         </div>
         <div class="row mt-3">                       
                    <div class="col-sm-9 ">
                    <label for="Empaddress" class="breadcrumb">ที่อยู่</label>
                    <textarea style="text-align: left;" textarea name="Empaddress" id="Empaddress" required class ="form-control"><?php echo $row['Empaddress'];?></textarea>
                    </div>
                           
                    <div class="col-sm-9 mt-3">
                      <label for="tel" class="breadcrumb">เบอร์โทรติดต่อ</label>
                      <textarea style="text-align: left;" textarea name="Tel" id="Tel" required class ="form-control"><?php echo $row['Tel'];?></textarea>
                    </div>
                              
                    <div class="col-sm-9 mt-3">
                   <label for="clock" class="breadcrumb">ตำแหน่ง</label>
                   
         <select   name="Empposition" id="Empposition"  class="form-control">
           <option value="เลือกคำแหน่งงาน">เลือกตำแหน่งงาน</option>
           <option value="ผู้จัดการ" <?php if($row['Empposition']=='ผู้จัดการ'){?>selected <?php }?>>ผู้จัดการ</option>
           <option value="แม่บ้าน" <?php if($row['Empposition']=='แม่บ้าน'){?>selected <?php }?>>แม่บ้าน</option>
           <option value="ธุรการ" <?php if($row['Empposition']=='ธุรการ'){?>selected <?php }?>>ธุรการ</option>
           
         </select>
                  </div>
                  <div class="col-sm-9 mt-3">
                      <label for="tel" class="breadcrumb">รูปพนักงาน</label>
 
                  <img src="img/employee/<?php echo $row['imgemployee'];?>"  width="400" height="300"class="img-fluid col-xs-6 mb-3 rounded">         
                    
                  <input style="text-align: center;" type="file" name="imgemployee" id="imgemployee" required class ="form-control" autocomplete="off" ><br>
                   </div>
             <div class="col-sm-9 mb-4 mt-4">
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="ยืนยันการแก้ไข">
                    <a class="btn btn-danger" href="employee.php"  > ยกเลิก </a>
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