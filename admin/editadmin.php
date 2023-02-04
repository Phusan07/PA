<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>จัดการข้อมูล Admin</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
 
<div class="content-wrapper">
   <?php
   if($_GET["AdminID"]==''){ 
   echo "<script type='text/javascript'>"; 
   echo "alert('Error Contact Admin !!');"; 
   echo "window.location = 'admin.php'; "; 
   echo "</script>"; 
   }
   $AdminID = mysqli_real_escape_string($con,$_GET['AdminID']);
   $sql = "SELECT * FROM tbadmin WHERE AdminID='$AdminID' ";
   $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
   $row = mysqli_fetch_array($result);
   ?>
     <div class="container col-sm-9 pt-5">
            <div class="row pt-3">
                <h2 class="col-sm-9" style="text-align: center;">จัดการข้อมูล Admin</h2><br>
            </div>      
       <form action="editadmin2.php"method="post" enctype="multipart/form-data"><br>
         <div class="row">
         <div class="col-sm-2 mt-3">
               <label for="case_status" class="breadcrumb">ID.</label>
               <input style="text-align: center;" type="text" name="AdminID" id="AdminID" required class ="form-control"autocomplete="off" maxlength="10" value=<?php echo $row['AdminID'];?> readonly>
    </div>      
    <div class="col-sm-7 mt-3">
                      <label for="user_name" class="breadcrumb">ชื่อ-นามสกุล</label>
                      <textarea style="text-align: left;" textarea name="Adminname" id="Adminname" required class ="form-control"><?php echo $row['Adminname'];?></textarea>
                    </div>
         </div>
         <div class="row mt-3">                       
         <div class="col-sm-9 mt-3">
                      <label for="password" class="breadcrumb">Password</label>
                      <input  class ="form-control ms-2 "style="text-align: left;" type="password" id="password" required class ="form-control"autocomplete="off" maxlength="30" value=<?php echo $row['Password'];?> readonly > 
                    </div>  

                    <div class="col-sm-9 mt-3">
                      <label for="Email" class="breadcrumb">Email</label>
                      <textarea style="text-align: left;" textarea name="Email" id="Email" required class ="form-control"><?php echo $row['Email'];?></textarea>
                    </div>
                         
                    <div class="col-sm-9 mt-3">
                      <label for="Cusaddress" class="breadcrumb">ที่อยู๋</label>
                      <textarea style="text-align: left;" textarea name="Address" id="Address" required class ="form-control"><?php echo $row['Address'];?></textarea>
                    </div>
         </div>

                   <div class="col-sm-9 mt-3">
                      <label for="Custel" class="breadcrumb">เบอร์โทร</label>
                      <textarea style="text-align: left;" textarea name="Tel" id="Tel" required class ="form-control"><?php echo $row['Tel'];?></textarea>
                    </div>
                              
                    
             <div class="col-sm-9 mb-4 mt-4">
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="Confirm">
                    <a class="btn btn-danger" href="admin.php"> Cancel </a>
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