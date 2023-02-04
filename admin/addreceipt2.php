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
    <div class="container-sm">
  <br>
  <h1 class="h3 mb-2 mx-5 text-gray-800">การออกบิล</h1>
  <br>  
   <table class="table table-bordered">
       <thead class="table-secondary">
           <tr>
               <th scope="col">รายการ</th>
               <th scope="col">Picture</th>
               <th scope="col">รายละเอียด</th>
               <th scope="col">ราคาห้อง</th>
               <th scope="col">เลือก</th>
           </tr>
       </thead>
       <tbody>
           <?php
           include("server/conadmin.php");
           $RoomID=$_GET['RoomID'];
           $sql = "select * from tbroom where RoomID=$RoomID";
           $result = mysqli_query($con, $sql);
           $row = mysqli_fetch_array($result);
           echo "<tr>";
           echo "<td>" . $row["Room"] . "</td>";
           echo "<td><img src=img/room/" . $row["Room_Pic"] . " ' width='100'></td>";
           echo "<td>" . $row["Room"] . "</td>";
           echo "<td>" .number_format($row["r_price"],2) . "</td>";
           echo "<td> <a class='btn btn-warning' href='cartreceipt.php?RoomID=$row[RoomID]&act=add'>เลือกรายการนี้</a></td>";
           echo "</tr>";
           ?>
       </tbody>
   </table>
   <a class="btn btn-dark ml-5" href="addreceipt.php"><lift>กลับไปหน้ารายการ</lift></a>
</div>
</div>
<?php require('footer.php');?>
</body>
</html>