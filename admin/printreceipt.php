<?php ob_start();?>
<?php
  session_start();
  include("set_number.php");
?>
<?php
     $or_ID=$_GET['or_ID'];
?>  
<?php
    include("server/conadmin.php");
    $sql = "Select * from tborder_detail where or_ID='$or_ID' ";
    $result = mysqli_query($con,$sql);
    $datas = array();
    if(mysqli_num_rows($result)){
    while($row = mysqli_fetch_assoc($result)){
      $datas[]= $row;
    }
    }
    $_SESSION['cart'] = array_column($datas,'oor_qty','RoomID');
    mysqli_set_charset($con,"utf8");
    $sql88="select * from tb_order_head where or_ID='$or_ID'";
    $sql99="select * from tbcompany";
    $sql77="select * from tborder_detail where or_ID='$or_ID'";
 
    $runsql88=mysqli_query($con,$sql88);
    $runsql99=mysqli_query($con,$sql99);
    $runsql77=mysqli_query($con,$sql77);
 
    $rowdata88=mysqli_fetch_array($runsql88);
    $rowdata99=mysqli_fetch_array($runsql99);
    $rowdata77=mysqli_fetch_array($runsql77);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<head>
<style>
#rcorners2 {
    border-radius: 30px;
    border: 2px solid #000000;
    padding: 20px; 
    width: 80%;
    height: 120px;    
}
#rcorners3 {
    border-radius: 30px;
    border: 2px solid #000000;
    padding: 10px; 
    width: 70%;
    height: 120px;    
}
table {
    border-radius:80px;
    border: 2px solid #000000;
    padding: 20px;     
}table.roundedCorners { 
 border-radius: 40px;
    border: 2px solid #000000;
    padding: 20px; 
    width: 100%;
    height: 150px;
    }
table.roundedCorners td{
  
   padding: 10px; 
  border-right: 1px solid #000;  
}
table.roundedCorners th { 
  border-bottom: 1px solid #000;
  padding: 10px; 
  border-right: 1px solid #000;
  border-width:1px solid #000; 
  }
table.roundedCorners tr:last-child > td {
  border-bottom: none;
}
</style>
 
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ใบเสร็จรับเงิน</title>
</head>
<body>
<div class="form-row" align="left">
  <div class="form-group col-md-12">
    <img src="img/<?php echo $rowdata99['Picturelogo']; ?>" width=100 height=100>
     <p>
     <?php echo $rowdata99['Name'];?>
     <p>
     ที่อยู่:<?php echo $rowdata99['Address'];?>
     <p>
     โทร: <?php echo $rowdata99['Tel'];?>
     <p>
          เลขประจำตัวผู้ที่เสียภาษี : <?php echo $rowdata99['Vat'];?> 
     <p>
        <h4 align ="center">ใบเสร็จ </h4>
    <br/>
  </div>
  <div class="form-group col-md-5">
        <p id="rcorners2" align="left">
            รหัส / ชื่อลูกค้า:  (<?php echo $rowdata88["UserID"]; ?>) &nbsp;
                     <?php
                      $query2 = "SELECT * FROM tbuser WHERE UserID = '".$rowdata88["UserID"]."'" or die("Error:" . mysqli_error()); 
                      $result2 = mysqli_query($con, $query2); 
                      while($row2 = mysqli_fetch_array($result2)) { echo $row2["Cusname"];}
                     ?>                    
                      </br>           
          ที่อยู่/Address: <?php
                      $query2 = "SELECT * FROM tbuser WHERE UserID = '".$rowdata88["UserID"]."'" or die("Error:" . mysqli_error()); 
                      $result2 = mysqli_query($con, $query2); 
                      while($row2 = mysqli_fetch_array($result2)) { echo $row2["Cusaddress"];}
                      ?>
                       </br>
             เบอร์โทร: <?php
                      $query2 = "SELECT * FROM tbuser WHERE UserID = '".$rowdata88["UserID"]."'" or die("Error:" . mysqli_error()); 
                      $result2 = mysqli_query($con, $query2); 
                      while($row2 = mysqli_fetch_array($result2)) { echo $row2["Custel"];}
                      ?>
                      </p>
     </div>
     <div class="form-group col-md-5 position-absolute top-0 end-0">
       <p id="rcorners3" align="right">
                เลขที่: <?php echo $rowdata88["or_ID"]; ?>
         </br>
         </br>
                วันที่: <?php echo $rowdata88["or_Date"]; ?>
       </p>
    </div>
</div>     
<table class="roundedCorners" align"center" 100%>
  <tr>
   <td width="7%" align="center">ลำดับ</td>
   <td width="40%" align="center">รายการ</td>
   <td width="11%" align="center">หน่วยละ</td>
   <td width="13%" align="center">จำนวนเดือน</td>
   <td width="29%" align="center">จำนวนเงิน</td>
 </tr>
<?php
  $total=0;
  $i=0;
  foreach($_SESSION['cart'] as $RoomID=>$qty)
  { 
    $sql  = "select * from tbroom where RoomID=$RoomID";
    $query  = mysqli_query($con, $sql);
    $row  = mysqli_fetch_array($query);
    $sum  = $row['r_price']*$qty;
    $total  += $sum;
    echo "<tr>";
  
    echo "<td align='center'>" . ++$i ."</td>";
    echo "<td >" . $row["Room"] . "</td>";
    echo "<td align='center'>" .number_format($row['r_price'],2) ."</td>";
    echo "<td align='center'>$qty</td>";
    echo "<td align='right' >".number_format($sum,2)."</td>";
    echo "</tr>";
  }
    echo "<tr>";
    $total= number_format($total,2)."";
    echo "<td align='center' colspan='3' bgcolor='#F9D5E3'>" .convert($total)."</td>";
    echo "<td  align='right'bgcolor='#F9D5E3'  ><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#F9D5E3'>"."<b>".$total."</b>"."</td>";
    echo "</tr>";
?>
</table >
<br/>
<br/>
<table align="center" width="100%" border="1"  >
  <tr>
    <td scope="col" align="center" width="30%">พนักงานรับเรื่อง</td>
    <td scope="col" align="center" width="30%">ผู้ตรวจสอบ</td>
    <td scope="col" align="center" width="40%">ลูกค้า</td> 
  </tr>
  <tr>
    <td height="50"> </td>
    <td height="50"> </td>
    <td></td>
  </tr>
   <tr> 
  <td align="center">____/____/____</td>
  <td align="center">____/____/____</td>
  <td align="center">____/____/____</td>
  </tr>
</table>
  <br/>
    <h6 align="center" >******ขอบคุณที่ใช้บริการ******</h6>
  <script>
     window.print ();
  </script>
 </body>
</html>