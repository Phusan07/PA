<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ข้อมูล admin</title>
<?php require('head.php');?>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>

    <div class="content-wrapper">
        <br>
        <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">ข้อมูลadmin</h1>
        <br>
        <?php
        include('server/conadmin.php');
        $sql="select*from tbadmin";
        $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
        ?>
        <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
              <!-- Table -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">NO.</th>
                    <th class="th-sm">ชื่อ-นามสกุล</th> 
                    <th class="th-sm">ที่อยู่</th>    
                    <th class="th-sm">เบอร์โทร</th>  
                    <th class="th-sm">Email</th>
                    <th class="th-sm">Password</th>                                 
                    <th class="th-sm">ตำแหน่ง</th>          
                    <th class="th-sm">จัดการ</th>                                              
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                  while($rowdata=mysqli_fetch_array($runsql))
                  {
                ?>
                <td><?php echo $rowdata['AdminID'];?></td>
                <td><?php echo $rowdata['Adminname'];?></td>
                <td><?php echo $rowdata['Address'];?></td>
                <td><?php echo $rowdata['Tel'];?></td>
                <td><?php echo $rowdata['Email'];?></td>
                <td><?php echo $rowdata['Password'];?></td>
                <td><?php echo $rowdata['Position'];?></td>
                <td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="editadmin.php?AdminID=<?php echo $rowdata['AdminID'];?>"> <i class='bx bxs-edit-alt' ></i></a>
                <a onClick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip" href="deladmin.php?AdminID=<?php echo $rowdata['AdminID'];?>" type='button' class='btn btn-danger'><i class='bx bxs-trash-alt' ></i></a></td>
                
                </tr>
                <?php
                  }
                   mysqli_close($con);
                ?>
                <script language="javascript">
                function confirmdel(object) 
                {
                  if(confirm("ยืนยันการลบ?")==true){
                  return true;}
                  return false;
                }
                </script>
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