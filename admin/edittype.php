<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
 
<div class="content-wrapper">
   <?php
   if($_GET["typeid"]==''){ 
   echo "<script type='text/javascript'>"; 
   echo "alert('Error Contact Admin !!');"; 
   echo "window.location = 'admin.php'; "; 
   echo "</script>"; 
   }
   $typeid = mysqli_real_escape_string($con,$_GET['typeid']);
   $sql = "SELECT * FROM tbtype WHERE typeid='$typeid' ";
   $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
   $row = mysqli_fetch_array($result);
   ?>
     <div class="container col-sm-9 pt-5">
          <div class="row pt-4">
                <h2 class="col-sm-9" style="text-align: center;">Edit</h2><br>
          </div>
       <form action="edittype2.php"method="post" enctype="multipart/form-data"><br>
         <div class="row">   
             <div class="col-sm-9 mt-3">
                       <label for="case_status" class="breadcrumb">ID</label>
                      <input style="text-align: center;" type="text" name="typeid" id="typeid" required class ="form-control" value=<?php echo $row['typeid'];?> autocomplete="off" maxlength="30"readonly>
                       </div>      
                       <div class="col-sm-9 mt-3">
                       <label for="case_status" class="breadcrumb">ประเภท</label>
                      <input style="text-align: center;" type="text" name="typeroom" id="typeroom" required class ="form-control" value=<?php echo $row['typeroom'];?> autocomplete="off" maxlength="30">
                       </div>
             </div>
             <div class="col-sm-9 mb-4 mt-3">
                    <input type="submit" class="btn btn-success" name="submit" id="submit" value="  Confirm ">
                    <a class="btn btn-danger" href="type.php">  Cancel  </a>
             </div>
          </div>
        <?php       
                mysqli_close($con);
              ?>
        </div>
       </form>  
      </div>
   </div> 
</div>
<?php require('footer.php');?>
</body>
</html>