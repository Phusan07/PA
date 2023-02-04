<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ข้อมูลการจอง</title>
    <?php require('head.php');?>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>
    <div class="content-wrapper">
    <br>
    
                <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">สถานะการจอง</h1>
              <br>
              <?php
              include('server/conadmin.php');
              $sql="select*from tbreserved";
              $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลผลได้");
              ?>
              <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                 
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">NO.</th>
                    <th class="th-sm">ชื่อ-นามสกุล</th>
                    <th class="th-sm">รายละเอียด</th>
                    <th class="th-sm">วันที่จอง</th>
                    <th class="th-sm">ประเภทห้องพัก</th>
                    <th class="th-sm">สถานะ</th>
                    <th class="th-sm">จัดการข้อมูล</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <?php
                      while($rowdata=mysqli_fetch_array($runsql))
                      {
                          ?>
                          <td><?php echo $rowdata['ReservedID'];?></td>
                          <td><?php echo $rowdata['Cusname'];?></td>
                          <td><?php echo $rowdata['detail'];?></td>
                          <td><?php echo $rowdata['datereserved'];?></td>
                          <td><?php echo $rowdata['typeroom'];?></td>
                          <td><?php echo $rowdata['case_status'];?></td>
                          <td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="editreserved.php?ReservedID=<?php echo $rowdata['ReservedID'];?>"> <i class='bx bxs-edit-alt' ></i></a>
                          <a onClick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip" href="delreserved.php?ReservedID=<?php echo $rowdata['ReservedID'];?>" type='button' class='btn btn-danger'><i class='bx bxs-trash-alt' ></i></a></td></td>
                
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