<?php
include('server/conadmin.php');
$UserID = $_REQUEST["UserID"];

$sql = "DELETE FROM tbuser WHERE UserID = '$UserID' ";
$result = mysqli_query($con,$sql) or die("Error in query: $sql" . mysqli_error());

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('data has been deleted.');";
    echo "window.location = 'customer.php';";
    echo "</script>";
}
else{
    echo "<script type='text/javascript'>";
    echo "alert('wrong information');";
    echo "window.location = 'customer.php';";
    echo "</script>";
}
mysqli_close($con);
?>