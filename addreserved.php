<?php ob_start();?>
<?php session_start();
if (!$_SESSION["UserID"]){
	  Header("Location: login.php");}
else{?>
<?php
include("server/config.php");
date_default_timezone_set('Asia/Bangkok');
$Cusname=$_POST['Cusname']; 
$detail=$_POST['detail']; 
$datereserved=$_POST['datereserved']; 
$typeroom=$_POST['typeroom'];
$dateservice = date('Y-m-d H:i:s');
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
    if (!$conn) {
	die("Connection failed: " .mysqli_connect_error());
	}       
    $check = "SELECT * FROM tbreserved Where datereserved='".$datereserved."' and typeroom='".$typeroom."' ";
    $result1 = mysqli_query($conn, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {   
   echo "<script>";
   echo "alert(\" วันและเวลานี้มีผู้จองแล้ว\");"; 
   echo "window.history.back()";
   echo "</script>";
   }else{
   $sql = "insert into tbreserved(Cusname,detail,datereserved,typeroom,dateservice,UserID)
   values('$Cusname','$detail','$datereserved','$typeroom','$dateservice','{$_SESSION['UserID']}')";
   mysqli_set_charset($conn,"utf8");
   $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
        }
	mysqli_close($conn);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('จองห้องเรียบร้อย');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'index.php'; ";
	echo "</script>";
    }
?>
<?php }?>

