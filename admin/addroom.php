<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูลห้องพัก</title>
<?php require('head.php');
$sql2 = "SELECT * FROM tbtype ";
$result3 = mysqli_query($con,$sql2) or die ("Error in query:$sql" . mysqli_error());?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
<?php require('menu.php');?>
<div class="content-wrapper">
  <br>
     <div class="container">
            <div class="row mt-5 mb-3">
                <h2 class="col-sm-12" style="text-align: center;">เพิ่มข้อมูลห้องพัก</h2>
            </div>
       <form action="addroom2.php"method="post" enctype="multipart/form-data">
         <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">ห้อง:</label>
                    <div class="col-7 col-lg-5">
                    <input style="text-align: center;" type="text" name="Room" id="Room" required class ="form-control"autocomplete="off">
                    </div>
                </div>
                <br>    

                <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">รายละเอียด :</label>
                    <div class="col-7 col-lg-5">
                    <textarea style="text-left ;" textarea name="ani_desc" id="ani_desc" required class ="form-control"></textarea>
                    </div>
                </div>
                <br>  


                <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">ราคา:</label>
                    <div class="col-7 col-lg-5">
                    <input style="text-align: center;" type="number" name="r_price" id="r_price" required class ="form-control"autocomplete="off" maxlength="100">
                    </div>
                </div>
                <br>  
                
                 <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">สถานะ :</label>
                    <div class="col-7 col-lg-5">
                    <select  name="r_status" id="r_status" class="form-control">
                         <option value="Select"> --Select-- </option>
                   <option value="ว่าง"> ว่าง </option>
                   <option value="ไม่ว่าง "> ไม่ว่าง </option>
              </select>
                    </div>
                </div> <br>
                
         <div class="row">         
                       <label class="col-4" style="text-align: right;"> ประเภทห้อง :</label>
                       <div class="col-7 col-lg-5">
                      <select required class ="form-control" id="typeid" name="typeid" >
                          <option value="" disable selected>เลือกหมวดหมู่</option>
                          <?php foreach ($result3 as $key => $value){?>
                            <option value="<?php echo $value['typeid']?>">
                            <?php echo $value['typeroom']?>
                        </option>
                        <?php }?>
                      </select>
                      </div>
        
                </div>   <br>
                    <div class="row">                       
                    <label class="col-4" style="text-align: right;fpnt-weight: 300">รูปห้อง :</label>
                    <div class="col-7 col-lg-5">

                    <input type="file" name="Room_Pic" id="Room_Pic" multipart="multiple">
                    </div>
                </div>  <br>        
                    <div class="row justify-content-center pb-3">
                   <input type="submit" name="submit" id="submit" class="btn btn-success" value="Confirm">&nbsp;
                    <a class="btn btn-danger" href="room.php">Cancel</a>                
             </div>
        </div>
        </div>
       </form>
      </div>
   </div> 
</div>
</div>
<?php require('footer.php');?>
</body>