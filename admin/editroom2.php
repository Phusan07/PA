<?php ob_start();

?>
<?php include('server/conadmin.php'); 
    $RoomID = $_POST["RoomID"];
    $Room = $_POST["Room"];
    $r_price = $_POST["r_price"];
    $r_desc = $_POST["r_desc"];
    $r_status = $_POST["r_status"];
    $Room_Pic=$_FILES['Room_Pic']['name'];
    $Room_Pic1=$_FILES['Room_Pic']['tmp_name']; 
    $typeid = $_POST["typeid"]; 
 
    mysqli_set_charset($con,"utf8");
    if($Room_Pic=="")
    {//กรณีที่ไม่มีการเลือกรุปใหม่ ค่าของรุปจะเป็นค่าว่าง ไม่ต้องแก้ไขรูปภาพ
        $sql = "UPDATE tbroom SET  typeid='$typeid',Room='$Room',r_price='$r_price',r_desc='$r_desc',r_status='$r_status'
        ,Room_Pic='$Room_Pic' WHERE RoomID ='$RoomID' ";
        } 
        else // กรณีเลือกรุปใหม่
        {
        $sql = "UPDATE tbroom SET  typeid='$typeid',Room='$Room',r_price='$r_price',r_desc='$r_desc',r_status='$r_status'
        ,Room_Pic='$Room_Pic' WHERE RoomID ='$RoomID' ";
    }
    $query = mysqli_query($con, $sql);
    if($query)
    {
    $path="pa.apartment2/admin/img/room/";
    $path1=$_SERVER['DOCUMENT_ROOT']."/".$path;
    copy($Room_Pic1,$path1.$Room_Pic);
    echo "<script type='text/javascript'>";
    echo "alert('แก้ไขข้อมูลเรียยบร้อย');";
    echo "window.location = 'room.php';";
    echo "</script>";
    }
    mysqli_close($con);
?>
