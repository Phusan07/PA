<?php ob_start();?>
<?php
    session_start();
    include('server/conadmin.php');
    date_default_timezone_set('Asia/Bangkok');
    $UserID =@$_POST["UserID"];
    $total = $_POST["total"];
    $Date = date("Y-m-d H:i:s");
    mysqli_query($con, "BEGIN");
    $sql1 = "insert into tb_order_head values(null,'$Date','$UserID','$total')";
    $query1 = mysqli_query($con, $sql1);
    $sql2 = "select max(or_ID) as or_ID from tb_order_head where UserID='$UserID' and or_Date='$Date' ";
    $query2 = mysqli_query($con, $sql2);
    $row = mysqli_fetch_array($query2);
    $or_ID = $row["or_ID"];
    foreach($_SESSION['sell'] as $RoomID=>$qty)
    {
        $sql3   = "select * from tbroom where RoomID=$RoomID";
        $query3 = mysqli_query($con, $sql3);
        $row3   = mysqli_fetch_array($query3);
        $total  = $row3['r_price']*$qty;
        $count = mysqli_num_rows($query3);
        $sql4   = "insert into tborder_detail values(null, '$or_ID', '$RoomID', '$qty', '$total')";
        $query4 = mysqli_query($con, $sql4);
        for($i=0; $i<$qty; $i++){
        $have =  $row3['RoomID'];
        $stc = $have ;
         $sql9 = "UPDATE tbroom SET RoomID=$stc WHERE  RoomID=$RoomID";
        $query9 = mysqli_query($con, $sql9);  
        }
    }   
    if($query1 && $query4){
        mysqli_query($con, "COMMIT");
        $msg = "บันทึกข้อมูลเรียบร้อยแล้ว ";
        foreach($_SESSION['sell'] as $RoomID)
        {   
            unset($_SESSION['sell']);
        }
    }
    else{
        mysqli_query($con, "ROLLBACK");  
        $msg = "บันทึกข้อมูลไม่สำเร็จ"; 
    }
?>
        <script type="text/javascript">
        alert("<?php echo $msg;?>");
        window.location ='receipt.php';
        </script>