<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ออกใบเสร็จ
        
    </title>
    <?php require('head.php');?>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>

    <div class="content-wrapper" style="background-color:">
    <br>
                <h1 class="h3 mb-2 mx-5 text-gray-800 text-bold">ออกบิล</h1>
              <br>
              <?php
              include('server/conadmin.php');
              $sql="select*from tb_order_head";
              $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลผลได้");
              ?>
              <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                  <div class="card-header">
                                      <h2 class="card-title">ใบเสร็จรับเงิน</h2>
                                   </div>
                                   <div class="card-header">
                                       <a class="btn btn-success mx-3" href="addreceipt.php">สร้างเอกสารใบเสร็จรับเงิน</a>
                                   </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="th-sm">เลขที่</th>
                    <th class="th-sm">วันที่บ</th>
                    <th class="th-sm">ชื่อลูกค้า</th>
                    <th class="th-sm">เบอร์โทรติดต่อ</th>
                    <th class="th-sm">ยอดรวม</th>
                    <th class="th-sm">ใบเสร็จรับเงิน</th>
                    <th class="th-sm">ลบข้อมูล</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>

                        <?php
                        while($rowdata=mysqli_fetch_array($runsql))
                        {
                            ?>
                            <td><?php echo $rowdata['or_ID'];?></td>
                            <td><?php echo $rowdata['or_Date'];?></td>
                            <?php
                            $query2 = "SELECT * FROM tbuser WHERE UserID = '".$rowdata["UserID"]."'" or die("Error:"  . mysqli_error());
                            $result2 = mysqli_query($con, $query2);
                            while($row2 = mysqli_fetch_array($result2)) {
                                echo "<td>" .$row2["Cusname"] . "</td>";
                            }
                            ?>
                            <?php
                            $query2 = "SELECT * FROM tbuser WHERE UserID = '".$rowdata["UserID"]."'" or die("Error:"  . mysqli_error());
                            $result2 = mysqli_query($con, $query2);
                            while($row2 = mysqli_fetch_array($result2)) {
                                echo "<td>" .$row2["Custel"] . "</td>";
                            }
                            ?>
                          <td><?php echo number_format($rowdata['or_total'],2) ?></td>

        <td align='center'><a class='btn btn-warning' href="printreceipt.php?or_ID=<?php echo $rowdata['or_ID'];?>"> <i class="fas fa-print" ></i> ใบเสร็จรับเงิน </a> </td>
                        
        <td align='center'><a class='btn btn-danger' href="delreceipt.php?or_ID=<?php echo $rowdata['or_ID'];?>"><i class='bx bxs-trash-alt' ></i> Delete </a> </td>
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