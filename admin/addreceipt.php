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
  <br>
  <h1 class="h3 mb-2 mx-5 text-gray-800">ออกบิล</h1>
  <br>  
    <?php
    include('server/conadmin.php');
   $sql="select*from tbroom";
   $sql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
   ?>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h2 class="card-title">ข้อมูลการออกบิล</h2>
              </div>         
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th class="th-sm">รหัส
                        </th>
                        <th class="th-sm">รูป
                        </th>
                        <th class="th-sm">รายการ
                        </th>
                        <th class="th-sm">ราคาห้อง
                        </th>
                        <th class="th-sm">เลือกรายการ
                        </th>
                      </tr>
                  </thead>
                  <tbody>
                     <tr>
                      <?php
                      while($rowdata=mysqli_fetch_array($sql))
                      {
                      ?>
                      <td><?php echo $rowdata['RoomID']; ?></td>
                      <td><img src='img/room/<?php echo $rowdata['Room_Pic'];?>'width="250" height="150"></td>
                      <td> <?php echo $rowdata['Room']; ?></td> 
                      <td><?php echo number_format($rowdata["r_price"],2) ?></td>
                      <td ><a class="btn btn-warning" href="addreceipt2.php?RoomID=<?php echo $rowdata['RoomID'];?>"> CLICK </td>
                    </tr>
                    <?php
                      }
                    mysqli_close($con);
                    ?>
                  </tbody>
              </table>              
             </div>
          </div>    
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php require('footer.php');?>
</body>
</html>