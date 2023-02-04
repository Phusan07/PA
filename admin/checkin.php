<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Check In</title>
<?php require('head.php');?>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php require('menu.php');?>

    <div class="content-wrapper">
    <br>
        <h1 class="h3 mb-2 mx-5 text-gray-800" style="text-align: center">Check-IN</h1>
        <br>
        <?php
        include('server/conadmin.php');
        $sql="select*from tbroom";
        $runsql=mysqli_query($con,$sql)or die("ไม่สามารถประมวลได้");
        ?>
      
    
           

              <!-- Table -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped" style="text-align: center">
                  <thead>
                  <tr>
                    <th class="th-sm">ID.</th>
                    <th class="th-sm">ประเภทห้อง</th> 
                    <th class="th-sm">Room</th> 
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
                <td><?php echo $rowdata['RoomID'];?></td>
                <?php
                $query2 = "SELECT * FROM tbtype WHERE typeid ='".$rowdata["typeid"]."'" or die("Error:" . mysqli_error());
                $result2 = mysqli_query($con, $query2);
                while($row2 = mysqli_fetch_array($result2)){
                echo "<td>" .$row2["typeroom"] . "</td>";
                }
                ?>
                <td><?php echo $rowdata['Room'];?></td>
                

                <?php if($rowdata['status'] == 0): ?>
										<td class="text-center"><span class="badge badge-success">ว่าง</span></td>
									<?php else: ?>
										<td class="text-center"><span class="badge badge-default">ว่าง</span></td>
									<?php endif; ?>
									<td align='center'><a class='btn btn-warning' title="Edit" data-toggle="tooltip" href="managecheckin.php?RoomID=<?php echo $rowdata['RoomID'];?>">Check-In <i class='bx bxs-edit-alt' ></i></a>
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
        
        
        </div>
<?php require('footer.php');?>
</body>
</html>