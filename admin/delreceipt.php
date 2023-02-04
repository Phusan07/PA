<?php ob_start();?>
<?php session_start();?>
<?php
$or_ID = $_REQUEST["or_ID"];
include('server/conadmin.php');
mysqli_set_charset($con, "utf8");
$sql22 = "select *  from tbservicehead WHERE or_ID = '$or_ID' ";
$runsql = mysqli_query($con,$sql22);
while($rowdata=mysqli_fetch_array($runsql))
{
    "<td>".$rowdata['or_ID']. "</td>";
    "<td>".$rowdata['RoomID']. "</td>";
    "<td>".$rowdata['oor_qty']. "</td>";
        $product_ID=$rowdata['product_ID'];
    $d_qty=$rowdata['oor_qty'];
    $sql9 = "UPDATE tbroom SET Room=Room+$oor_qty WHERE RoomID=$RoomID";
    $query9 = mysqli_query($con, $sql9);
}
$sql44="delete from tborder_detail where or_ID='$or_ID'";
$sql33="delete from tb_order_head where or_ID='$or_ID'";
$runsql=mysqli_query($con,$sql33) or die ("ไม่สามารถประมวลผลได้");
$runsql=mysqli_query($con,$sql44) or die ("ไม่สามารถประมวลผลได้");

if($runsql)
{
    
    header("location:receipt.php");
}
mysqli_close($con);
?>