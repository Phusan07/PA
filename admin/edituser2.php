<?php include('server/conadmin.php');
 
    if (isset($_POST['submit'])) {
      $UserID = $_POST["UserID"];
      $Cusname = $_POST["Cusname"];
      $Email= $_POST["Email"];
      $Cusaddress= $_POST["Cusaddress"];
      $Custel= $_POST["Custel"];
    mysqli_set_charset($con,"utf8"); 
      $sql = "UPDATE tbuser SET  Cusname='$Cusname',Email='$Email',Cusaddress='$Cusaddress',Custel='$Custel' WHERE UserID='$UserID' ";   
    $query = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 
mysqli_close($con);
if($query){
	echo "<script type='text/javascript'>";
	echo "alert('แก้ไขข้อมูลเรียยบร้อย');";
	echo "window.location = 'customer.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ข้อมูลผิดพลาด');";
        echo "window.location = 'customer.php'; ";
	echo "</script>";
    }
    }	
?>
