<?php
include('server/conadmin.php');
$RoomID = $_REQUEST["RoomID"];

$sql = "DELETE FROM tbroom WHERE RoomID = '$RoomID'";
$result = mysqli_query($con,$sql) or die("Eror in query: $sql" . mysqli_error());

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('data has been deleted.');";
    echo "window.location = 'room.php';";
    echo "</script>";
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('wrong information');";
    echo "window.location = 'room.php';";
    echo "</script>";
}
mysqli_close($con);
?>