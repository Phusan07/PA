<?php include('server/conadmin.php');
 
$typeroom = $_POST["typeroom"];
$sql = "INSERT INTO tbtype(typeroom)
VALUES('$typeroom')"; 
$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
mysqli_close($con);
    if($result){
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location = 'type.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('ข้อมูลผิดพลาด');";
    echo "window.location = 'type.php'; ";
    echo "</script>";
}
?>
