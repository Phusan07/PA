<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>แก้ไขข้อมูลสินค้า</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
 <body class="hold-transition sidevarmini layout-fixed">
<div class="wrapper">
   <?php
   if($_GET["RoomID"]==''){ 
   echo "<script type='text/javascript'>"; 
   echo "alert('Error Contact Admin !!');"; 
   echo "window.location = 'admin.php'; "; 
   echo "</script>"; 
   }
   $RoomID = mysqli_real_escape_string($con,$_GET['RoomID']);
   $sql = "SELECT * FROM tbroom WHERE RoomID='$RoomID' ";
   $result = mysqli_query($con, $sql) or die ("Error in query: $sql" . mysqli_error());
   $row = mysqli_fetch_array($result);
   ?>

<div class="content-wrapper">
  <br>
     <div class="container">
            <div class="row mt-5 mb-3">
                <h2 class="col-sm-12" style="text-align: center;">แก้ไขข้อมูลห้องพัก</h2>
            </div>
       <form action="editroom2.php"method="post" enctype="multipart/form-data">
         <div class="row">         
                       <label class="col-4" style="text-align: right;">ประเภทห้อง :</label>
                       <div class="col-7 col-lg-5">
                      <input style="text-align: center;" type="text" name="typeid" id="typeid" value=<?php echo $row['typeid'];?> required class ="form-control" readonly>
                       </div>
         </div>
         <br>
         <div class="row">         
                       <label class="col-4" style="text-align: right;">รหัสห้อง :</label>
                       <div class="col-7 col-lg-5">
                      <input style="text-align: center;" type="text" name="RoomID" id="RoomID" value=<?php echo $row['RoomID'];?> required class ="form-control" readonly>
                       </div>
         </div>
         <br>
         <div class="row">         
                       <label class="col-4" style="text-align: right;">Room :</label>
                       <div class="col-7 col-lg-5">
                      <input style="text-align: center;" type="text" name="Room" id="Room" value=<?php echo $row['Room'];?> required class ="form-control">
                       </div>
         </div>
                </div>  <br> 

                <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">รายละเอียด :</label>
                    <div class="col-7 col-lg-5">
                    <textarea style="text-align: left;" textarea name="r_desc" id="r_desc" required class ="form-control"><?php echo $row['r_desc']?></textarea>
                    </div>
                </div>
                <br>
               
                    <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">ราคา :</label>
                    <div class="col-7 col-lg-5">
                    <input style="text-align: center;" type="text" name="r_price" id="r_price" class ="form-control" value=<?php echo $row['r_price']?>>
                    </div>
                </div>   <br>
                <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">สถานะ :</label>
                    <div class="col-7 col-lg-5">
                    <select  type="checkbox" name="r_status" id="r_status" class="form-control">
                         <option value="Select"> --Select-- </option>
                   <option value="ว่าง"<?php if($row['r_status']=='ว่าง'){?>selected <?php }?>
                   > ว่าง </option>
                   <option value="ไม่ว่าง"<?php if($row['r_status']=='ไม่ว่าง'){?>selected <?php }?>
                   > ไม่ว่าง </option>
              </select>
                    </div>
                </div> <br>    
                    <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">รูปห้อง :</label>
                    <div class="col-7 col-lg-5">
                        <img src="img/room/<?php echo $row['Room_Pic'];?>" width="400" heigh="300" class="img-fluid col-xs-6 mb-3 rounded">
                    <input type="file" name="Room_Pic" id="Room_Pic" multipart="multiple">
                    </div>
                </div>  <br>        
                    <div class="row justify-content-center pb-3">
                   <input type="submit" name="submit" id="submit" class="btn btn-success" value="ยืนยัน">&nbsp;
                    <a class="btn btn-danger" href="room.php">ยกเลิก</a>                
        </div>
       </form>
      </div>
   </div> 
</div>
</div>
</div>
<?php require('footer.php');?>
</body>