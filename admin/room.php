<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>ข้อมูลห้องพัก</title>
<?php require('head.php');?>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>

    <div class="content-wrapper">
    <br>
        <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">ข้อมูลห้องพัก</h1>
        <br>
        <?php
        include('server/conadmin.php');
        $sql="select*from tbroom";
        $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
        ?>
      
    
            <section class="content">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-12">
                              <div class="card">
                                       <a class="btn btn-warning mx5" href="addroom.php">เพิ่มข้อมูลห้องพัก</a>
                                   </div>

              <!-- Table -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                  
                    <th class="th-sm">รูป</th>
                    <th class="th-sm">Room</th> 
                    <th class="th-sm">ประเภทห้อง</th> 
                    <th class="th-sm">รายละเอียด</th>
                    <th class="th-sm">ราคา</th> 
                    <th class="th-sm">สถานะ</th>             
                    <th class="th-sm">จัดการ</th>                                              
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                  <?php

                  while($rowdata=mysqli_fetch_array($runsql))
                  {
                ?>
                
                <td><img src='img/room/<?php echo $rowdata['Room_Pic']; ?>'width="150" height="100"></td>
                <td><?php echo $rowdata['Room'];?></td>
                <?php
                $query2 = "SELECT * FROM tbtype WHERE typeid ='".$rowdata["typeid"]."'" or die("Error:" . mysqli_error());
                $result2 = mysqli_query($con, $query2);
                while($row2 = mysqli_fetch_array($result2)){
                echo "<td>" .$row2["typeroom"] . "</td>";
                }
                ?>
                  <td><?php echo $rowdata['r_desc'];?></td>
                  <td><?php echo $rowdata['r_price'];?></td>
                  <td><?php echo $rowdata['r_status'];?></td>
                <td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="editroom.php?RoomID=<?php echo $rowdata['RoomID'];?>"> <i class='bx bxs-edit-alt' ></i></a>
                <a onClick="return confirm('Are you sure you want to delete?')" title="Delete" data-toggle="tooltip" href="delroom.php?RoomID=<?php echo $rowdata['RoomID'];?>" type='button' class='btn btn-danger'><i class='bx bxs-trash-alt' ></i></a></td></td>
                
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