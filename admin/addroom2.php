<?php include('server/conadmin.php');
if (isset($_POST['submit'])) {
    $Room = $_POST["Room"];
    $r_price = $_POST["r_price"];
    $r_status = $_POST["r_status"];
    $Room_Pic = $_FILES['Room_Pic']['name'];
    $imagespath=$_FILES['Room_Pic']['tmp_name']; 
    $typeid = $_POST["typeid"];
 
    mysqli_set_charset($con,"utf8");
    $sql = "insert into tbroom(Room,r_price,r_status,Room_Pic,typeid) values('$Room','$r_price','$r_status','$Room_Pic','$typeid')";
    $query = mysqli_query($con, $sql);
if($query)
   {
    $myfolder="pa.apartment2/admin/img/room/";
    $serverpath =$_SERVER['DOCUMENT_ROOT']."/". $myfolder;
    copy($imagespath, $serverpath.$Room_Pic);
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
    echo "window.location = 'room.php'; ";
    echo "</script>";
    }
    else{
    echo "<script type='text/javascript'>";
    echo "alert('ข้อมูลผิดพลาด');";
        echo "window.location = 'room.php'; ";
    echo "</script>";
      }
}   
mysqli_close($con);
?>
