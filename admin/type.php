<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ประเภทห้องพัก</title>
    <?php require('head.php');?>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>
<div class="content-wrapper">
<br>
<h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">ประเภทห้องพัก</h1>
<br>
    <?php
              include('server/conadmin.php');
              $sql="select*from tbtype";
              $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลผลได้");
              ?>
              <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                       <a class="btn btn-warning mx5" href="addtype.php">เพิ่มข้อมูลประเภทห้องพัก</a>
                                   </div>
                <div class="card-body">
                <table id="example1" class="table table-bordered table-striped"  style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">ID.</th>
                    <th class="th-sm">ชื่อประเภท</th>
                    <th class="th-sm">จัดการ</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php
                      while($rowdata=mysqli_fetch_array($runsql))
                      {
                          ?>
                          <td><?php echo $rowdata['typeid'];?></td>
                          <td><?php echo $rowdata['typeroom'];?></td>
						  <td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="edittype.php?typeid=<?php echo $rowdata['typeid'];?>"> <i class='bx bxs-edit-alt' ></i></a>
                          <a onClick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip" href="deladmin.php?typeid=<?php echo $rowdata['typeid'];?>" type='button' class='btn btn-danger'><i class='bx bxs-trash-alt' ></i></a></td></td>
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
                  </div>
              </section>
              </div>
    <?php require('footer.php');?>
</body>
</html>