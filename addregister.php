<?php
error_reporting( error_reporting() & ~E_NOTICE );
?>
<?php ob_start();?>
<?php
$Cusname=$_POST['Cusname']; 
$Cusaddress=$_POST['Cusaddress']; 
$Custel=$_POST['Custel']; 
$Email=$_POST['Email']; 
$Password=$_POST['Password']; 
$Level=$_POST['Level']; 

if (strlen($Cusname) < 6) {
    echo "ระบุชื่อ-นามสกุลใหม่";
    $error = true;
}
if (strlen($Cusaddress) < 5) {
    echo "ระบุทีอยู่ใหม่";
    $error = true;
}
if (strlen($Password) < 6) {
    echo "<script>";
    echo "alert(\" password ไม่ต่ำกว่า6 ตัว\");"; 
    echo "window.history.back()";
    echo "</script>";
 
    $error = true;
}
if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    echo 'Invalide E-Mail';
    $error = true;
}
if ($Password != $Password) {
    echo 'Password an comfirm password are different';
    $error = true;
}

if (!@$error)
{ 
    // your database information
    $db_host = 'localhost';
    $db_name = 'apartment';
    $db_user = 'root';
    $db_pass = '';

    // connect
    try {
        // You must change this if you use different database system
        $conn = new PDO("mysql:host=$db_host; dbname=$db_name", $db_user, $db_pass);

        $conn->exec("SET CHARACTER SET utf8");

        // prepare sql for checking username
        $result = $conn->prepare("SELECT COUNT(*) FROM tbuser WHERE Email='" . $Email . "'");

        $result->execute();

        if ($result !== false) {
            if ($result->fetchColumn() > 0) {
                echo "<script>";
                        echo "alert(\" Email นี้มีคนใช้แล้ว\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                $error = true;
            }
        }
        if (!@$error) {
            // Everything fine, add register info into database
            // TODO: write insert statement
            include("server/config.php");
$conn = mysqli_connect(_SERVERNAME, _USERNAME, _PASSWORD, _DBNAME);
if (!$conn) {
	die("Connection failed: " .mysqli_connect_error());
	}       
            mysqli_set_charset($conn,"utf8");

$sql = "insert into tbuser(Cusname,Cusaddress,Custel,Email,Password,Level)
values('$Cusname','$Cusaddress','$Custel','$Email','$Password','$Level')";

$query = mysqli_query($conn,$sql);

if($query)
{

{ 
    echo "<script type='text/javascript'>";
	echo "alert('สมัครสมาชิกสำเร็จ');";
	echo "window.location = 'login.php'; ";
	echo "</script>";
exit();
}
}
mysqli_close($conn);
        }

        $conn = null;
    }
    catch (PDOException $e) {
        echo $e->getMessage();
    }
}

?>