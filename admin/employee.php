<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ข้อมูลพนักงาน</title>
<?php require('head.php');?>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>

    <div class="content-wrapper">
        <br>
        <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">ข้อมูลพนักงาน</h1>
        <br>
        <?php
        include('server/conadmin.php');
        $sql="select*from tbemployee";
        $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
        ?>
       <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                       <a class="btn btn-warning mx5" href="addemployee.php">เพิ่มข้อมูลพนักงาน</a>
                                   </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">NO.</th>
                    <th class="th-sm">รูป</th>
                    <th class="th-sm">ชื่อ-นามสกุล</th>                                
                    <th class="th-sm">ที่อยู่</th>                               
                    <th class="th-sm">เบอร์โทรติดต่อ</th>
                    <th class="th-sm">ตำแหน่งงาน</th>                               
                    <th class="th-sm">จัดการข้อมูล</th>                             
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                  while($rowdata=mysqli_fetch_array($runsql))
                  {
                ?>
                <td><?php echo $rowdata['EmpID'];?></td>
                <td><img src='img/employee/<?php echo $rowdata['imgemployee']; ?>'width="150" height="100"></td>
                <td><?php echo $rowdata['Empname'];?></td>
                <td><?php echo $rowdata['Empaddress'];?></td>
                <td><?php echo $rowdata['Tel'];?></td>
                <td><?php echo $rowdata['Empposition'];?></td>
                <td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="editemployee.php?EmpID=<?php echo $rowdata['EmpID'];?>"> <i class='bx bxs-edit-alt' ></i></a>
                <a onClick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip" href="deladmin.php?EmpID=<?php echo $rowdata['EmpID'];?>" type='button' class='btn btn-danger'><i class='bx bxs-trash-alt' ></i></a></td></td>
                
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