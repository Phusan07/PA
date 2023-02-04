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
        $cat = $conn->query("SELECT * FROM room_categories");
$cat_arr = array();
while($row = $cat->fetch_assoc()){
	$cat_arr[$row['id']] = $row;
}
$room = $conn->query("SELECT * FROM rooms");
$room_arr = array();
while($row = $room->fetch_assoc()){
	$room_arr[$row['id']] = $row;
}
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
                $i = 1;
                $check = $con->query("SELECT * FROM check where status != 0 order by status desc, id asc ");
                  while($rowdata=mysqli_fetch_array($runsql))
                  {
                ?>
               td class="text-center"><?php echo $i++ ?></td>
									<td class="text-center"><?php echo $cat_arr[$room_arr[$row['room_id']]['category_id']]['name'] ?></td>
									<td class="text-center"><?php echo $room_arr[$row['room_id']]['room'] ?></td>
									<td class="text-center"><?php echo $row['ref_no'] ?></td>
									<?php if($row['status'] == 1): ?>
										<td class="text-center"><span class="badge badge-warning">Checked-IN</span></td>
									<?php else: ?>
										<td class="text-center"><span class="badge badge-success">Checked-Out</span></td>
									<?php endif; ?>
									<td class="text-center">
											<button class="btn btn-sm btn-primary check_out" type="button" data-id="<?php echo $row['id'] ?>">View</button>
									</td>
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