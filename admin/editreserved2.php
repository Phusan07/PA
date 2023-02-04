<?php include('server/conadmin.php');
 
    if (isset($_POST['submit'])) {
      $ReservedID = $_POST["ReservedID"];
    
      $case_status = $_POST["case_status"]; 
    
    mysqli_set_charset($con,"utf8"); 
      $sql = "UPDATE tbreserved SET  case_status='$case_status' WHERE ReservedID='$ReservedID' ";   
    $query = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 
mysqli_close($con);
if($query){
	echo "<script type='text/javascript'>";
	echo "alert('ปรับปรุงข้อมูลเรียบร้อยแล้ว');";
	echo "window.location = 'reserved.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('ข้อมูลผิดพลาด');";
        echo "window.location = 'reserved.php'; ";
	echo "</script>";
    }
    }	
?>
