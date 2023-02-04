<?php include('server/conadmin.php');
 
    if (isset($_POST['submit'])) {
      $EmpID = $_POST["EmpID"];
      $Empaddress = $_POST["Empaddress"];
      $Tel = $_POST["Tel"];
      $Empposition = $_POST["Empposition"];
      $imgemployee = $_FILES["imgemployee"]['name'];
      $imagespath = $_FILES["imgemployee"]['tmp_name']; 
    
    mysqli_set_charset($con,"utf8"); 
      $sql = "UPDATE tbemployee SET  Empaddress='$Empaddress', Tel='$Tel',Empposition='$Empposition',imgemployee='$imgemployee' WHERE EmpID='$EmpID' ";   
    $query = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 
mysqli_close($con);
if($query){
    $myfolder="pa.apartment2/admin/img/employee/";
    $serverpath=$_SERVER['DOCUMENT_ROOT']."/".$myfolder;
    copy($imagespath, $serverpath.$imgemployee);
	echo "<script type='text/javascript'>";
	echo "alert('ปรับปรุงข้อมูลเรียบร้อยแล้ว');";
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
?>
