<?php
error_reporting( error_reporting() & ~E_NOTICE );
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>DashBoard</title>
<?php require('head.php');?>
</head>
<body>
<?php require('menu.php');?>
<?php
    $RoomID = @$_GET['RoomID'];
    $act = $_GET['act'];

    if($act=='add' && !empty($RoomID))
    {
        if(isset($_SESSION['sell'][$RoomID]))
        {
            $_SESSION['sell'][$RoomID]++;
        }
        else
        {
            $_SESSION['sell'][$RoomID]=1;
        }
    }
 
    if($act=='remove' && !empty($RoomID))
    {
        unset($_SESSION['sell'][$RoomID]);
    }
 
    if($act=='update')
    {
        $amount_array = $_POST['amount'];
        foreach($amount_array as $RoomID=>$amount)
        {
            $_SESSION['sell'][$RoomID]=$amount;
        }
    }
?>
<div class="content-wrapper">
 <div class="container-lg">
     <br>
     <h1 class="h3 mb-2 mx-5 text-gray-800">ออกบิล</h1>
     <br>
    <form id="frmcart" name="frmcart" method="post" action="?act=update" class="form-inline" >
      <table class="table table-bordered">
       <thead class="table-primary">
       <tr>
        <th scope="col">รายการ</th>
        <th scope="col">ราคา</th>
        <th scope="col">จำนวนเดือน </th>
        <th scope="col">ราคารวม</th>
        <th scope="col">ลบข้อมูล</th>
        </tr>
       </thead>
       <tbody>
  <?php
        $total=0;
        if(!empty($_SESSION['sell']))
    {
        include('server/conadmin.php');
        foreach($_SESSION['sell'] as $RoomID=>$qty)  
    { 
        $sql = "select * from tbroom where RoomID=$RoomID";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);
        $sum = $row['r_price'] * $qty;
        $total += $sum;
         echo "<tr>";
        echo "<td align='left'>" . $row["Room"] . "</td>";
        echo "<td align='left'>" .number_format($row["r_price"],2) . "</td>"; 
        echo "<td align='left'><input type='number' name='amount[$RoomID]' value='$qty' size='4' min='1' class='form-control pl-1 mb-2 pr-0'></td>";
        echo "<td align='left'>".number_format($sum,2)."</td>";     
        echo "<td align='left' ><a href='cartreceipt.php?RoomID=$RoomID &act=remove'class='btn btn-danger''>ลบ</a></td>";
        echo "</tr>";
    }
        echo "<tr>";
        echo "<td colspan='4' class='p-3 mb-2 bg-info text-white' align='right'><h4>ราคารวมทั้งสิ้น</h4></td>";
        echo "<td align='center' class='p-3 mb-2 bg-info text-white'>"."<h5>".number_format($total,2)."</h5>"."</td>";
        echo "</tr>";   
    }
  ?>                 
      <tr>
        <td><a class="btn btn-dark" href="addreceipt.php">กลับหน้ารายการ</a></td>
        <td colspan="4" align="right">
            <input type="button" name="button" id="button" class="btn btn-danger mt-1" value="ลบทั้งหมด" onclick="window.location='unsetservice.php';">
            <input type="submit" name="button" id="button" class="btn btn-warning mt-1" value="ปรับปรุงราคารวม">
            <input type="button" name="Submit2" class="btn btn-success mt-1" value="ตกลง" onclick="window.location='receiptconfirm.php';">
        </td>
      </tr>        
    </tbody>
   </table>
  </form>
 </div>      
</div>
<?php require('footer.php');?>
</body>
</html>