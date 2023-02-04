<?php include('server/conadmin.php');
 
    if (isset($_POST['submit'])) {
      $AdminID = $_POST["AdminID"];
      $Adminname = $_POST["Adminname"];
      $Email= $_POST["Email"];
      $Address= $_POST["Address"];
      $Tel= $_POST["Tel"];
    mysqli_set_charset($con,"utf8"); 
      $sql = "UPDATE tbadmin SET  Adminname='$Adminname',Email='$Email', Address='$Address',Tel='$Tel' WHERE AdminID='$AdminID' ";   
    $query = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error()); 
mysqli_close($con);
if($query){
	echo "<script type='text/javascript'>";
	echo "alert('information has been updated');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('wrong information');";
        echo "window.location = 'admin.php'; ";
	echo "</script>";
    }
    }	
?>
