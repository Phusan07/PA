<?php
include('server/conadmin.php');
$ReservedID = $_REQUEST["ReservedID"];

$sql = "DELETE FROM tbreserved WHERE ReservedID = '$ReservedID' ";
$result = mysqli_query($con,$sql) or die("Eror in query: $sql" . mysqli_error());

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
    echo "window.location = 'reserved.php';";
    echo "</script>";
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('ข้อมูลผิดพลาด');";
    echo "window.location = 'reserved.php';";
    echo "</script>";
}
mysqli_close($con);
?>