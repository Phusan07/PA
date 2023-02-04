<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลพนักงาน</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
 
<div class="content-wrapper">
  
     <div class="container col-sm-9 pt-5">
            <div class="row pt-4">
                <h2 class="col-sm-9" style="text-align: center;">เพิ่มข้อมูลพนักงาน</h2><br>
            </div>
       <form action="addemployee2.php"method="post" enctype="multipart/form-data"><br>
         <div class="row">         
                       <div class="col-sm-9 mt-3">
                       <label for="case_status" class="breadcrumb">ชื่่อ-นามสกุล</label>
                      <input style="text-align: left;" type="text" name="Empname" id="Empname" required class ="form-control"autocomplete="off" maxlength="30">
                       </div>
         </div>
         <div class="row mt-3">                       
                    <div class="col-sm-9 ">
                    <label for="case_status" class="breadcrumb">ที่อยู่</label>
                    <textarea style="text-align: left;" textarea name="Empaddress" id="Empaddress" required class ="form-control"></textarea>
                    </div>
                           
                    <div class="col-sm-9 mt-3">
                      <label for="telephone" class="breadcrumb">เบอร์โทรติดต่อ</label>
                      <textarea style="text-align: left;" textarea  name="Tel" id="Tel" required class ="form-control"></textarea>
                    </div>
                              
                    <div class="col-sm-9 mt-3">
                   <label for="clock" class="breadcrumb">ตำแหน่งงาน</label>
              <select  name="Empposition" id="Empposition" class="form-control">
                         <option value="เลือก">เลือก</option>
                   <option value="ผู้จัดการ">ผู้จัดการ</option>
                   <option value="แม่บ้าน">แม่บ้าน</option>
                   <option value="ธุรการ">ธุรการ</option>
              </select>
                  <br>
                  <div class="col-sm-9 mt-3"> 
                  <label for="img" class="breadcrumb">รูปพนักงาน:</label>
                  <input style="text-align: center;" type="file" name="imgemployee" id="imgemployee" required class ="form-control"autocomplete="off" maxlength="30">
                 </div>
                 
             <div class="col-sm-9 mb-4 mt-3">
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="  ยืนยัน  ">
                    <a class="btn btn-danger" href="employee.php"  >  ยกเลิก  </a>
             </div>
        </div>
        </div>
       </form>
       
      </div>
   </div> 
</div>
<?php require('footer.php');?>
</body>
 
</html>