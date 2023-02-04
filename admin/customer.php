<html>
<head>
    <meta charset="utf-8">
    <title>ข้อมูลลูกค้า</title>
    <?php require('head.php');?>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>

    <div class="content-wrapper">
    <br>
                <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">ข้อมูลลูกค้า</h1>
              <br>
              <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
              <?php
              include('server/conadmin.php');
              $sql="select*from tbuser";
              $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลผลได้");
              ?>
              
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">ID</th>
                    <th class="th-sm">ชื่อ-นามสกุล</th>
                    <th class="th-sm">ที่อยู่</th>
                    <th class="th-sm">เบอร์โทรศัพท์</th>
                    <th class="th-sm">รหัสผ่าน</th>
                    <th class="th-sm">Email</th>
                    <th class="th-sm">จัดการ</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <?php
                      while($rowdata=mysqli_fetch_array($runsql))
                      {
                          ?>
                          <td><?php echo $rowdata['UserID'];?></td>
                          <td><?php echo $rowdata['Cusname'];?></td>
                          <td><?php echo $rowdata['Cusaddress'];?></td>
                          <td><?php echo $rowdata['Custel'];?></td>
                          <td><input class="from-control-mb-2" type="Password" value=<?php echo $rowdata['Password'];?> disabled>
                          <td><?php echo $rowdata['Email'];?></td>

                <td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="edituser.php?UserID=<?php echo $rowdata['UserID'];?>"><i class='bx bxs-edit-alt' ></i></a> 
                <a class='btn btn-danger' title="Delete" data-toggle="tooltip" href="delcustomer.php?UserID=<?php echo $rowdata['UserID'];?>"><i class='bx bxs-trash-alt' ></td>
               
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