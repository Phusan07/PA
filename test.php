<?php

$pay_per_day = 1;//ค่าปรับต่อวัน (บาท)

$return_date     = '2014-06-22';        //วันที่กำหนดส่งคืน
$today            = date('Y-m-d');    //วันที่ส่งคืนจริง

//หาจำนวนวัน กรณีที่วันส่งคืนจริง เลยวันกำหนดส่ง
$pay = 0;
$day_late_qty = 0;
if($today > $return_date){
    $time_today = strtotime($today);        //แปลงวันที่ส่งคืนจริง เป็นตัวเลข timestamp
    $time_return = strtotime($return_date);    //แปลงวันที่กำหนดส่งคืน เป็นตัวเลข timestamp

    $day_late_qty = ($time_today - $time_return) / ( 60 * 60 * 24 );
    $pay = ceil($day_late_qty) * $pay_per_day;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>คำนวณค่าปรับส่งคืนเลยกำหนดส่ง</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  </head>
  <body>
    <h1>คำนวณค่าปรับ! (ส่งคืนหนังสือ)</h1>
    <p>วันที่กำหนดส่ง : <?php echo $return_date;?></p>
    <p>วันที่ส่งจริง : <?php echo $today;?></p>
    <p>ส่งช้ากว่ากำหนด : <?php echo $day_late_qty;?> วัน</p>
    <p>ค่าปรับต่อวัน : <?php echo $pay_per_day;?> บาท</p>
    <h3>รวมค่าปรับ  : <?php echo $pay;?> บาท</h3>
  </body>
</html>
