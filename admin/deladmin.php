<?php
include('server/conadmin.php');
$AdminID = $_REQUEST["AdminID"];

$sql = "DELETE FROM tbadmin WHERE AdminID = '$AdminID' ";
$result = mysqli_query($con,$sql) or die("Eror in query: $sql" . mysqli_error());

if($result){    
    echo "<script type='text/javascript'>";
    echo "alert('data has been deleted.');";
    echo "window.location = 'admin.php';";
    echo "</script>";
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('wrong information');";
    echo "window.location = 'admin.php';";
    echo "</script>";
}
mysqli_close($con);
?>