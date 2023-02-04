<?php include('server/conadmin.php');
if (isset($_POST['submit'])) {
    $Empname = $_POST["Empname"];
    $Empaddress = $_POST["Empaddress"];
    $Tel = $_POST["Tel"];
    $Empposition = $_POST["Empposition"];
    $imgemployee=$_FILES['imgemployee']['name']; 
    $imagespath=$_FILES['imgemployee']['tmp_name']; 
 
    mysqli_set_charset($con,"utf8");
    $sql = "insert into tbemployee(Empname,Empaddress,Tel,Empposition,imgemployee)
    values('$Empname','$Empaddress','$Tel','$Empposition','$imgemployee')";
    $query = mysqli_query($con, $sql);
if($query)
   {
    $myfolder="pa.apartment2/admin/img/employee/";
    $serverpath =$_SERVER['DOCUMENT_ROOT']."/". $myfolder;
    copy($imagespath, $serverpath.$imgemployee);
   echo "<script type='text/javascript'>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location = 'employee.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('ข้อมูลผิดพลาด');";
        echo "window.location = 'employee.php'; ";
    echo "</script>";
      }
}   
mysqli_close($con);
?>
