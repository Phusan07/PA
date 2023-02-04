<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลประเภทห้องพัก</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
 
<div class="content-wrapper">
    <div class="container col-sm-9 pt-5">
           <div class="row pt-4">
                <h2 class="col-sm-9" style="text-align: center;">เพิ่มข้อมูลประเภทห้องพัก</h2><br>
            </div>
       <form action="addtype2.php"method="post" enctype="multipart/form-data"><br>
           <div class="row">         
               <div class="col-sm-9 mt-3">
                    <label for="case_status" class="breadcrumb">ประเภทห้อง</label>
                    <input style="text-align: center;" type="text" name="typeroom" id="typeproduct" required class ="form-control"autocomplete="off" maxlength="30">
                </div>
                </div>
                <div class="col-sm-9 mb-4 mt-3">
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="  ยืนยัน  ">
                    <a class="btn btn-danger" href="type.php"  >  ยกเลิก  </a>
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
