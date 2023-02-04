<?php ob_start();?>
<?php
session_start();
    if(isset($_POST['submit'])){
                include("server/conadmin.php");
                $Email = $_POST ['Email'];
                $Password = $_POST ['Password'];
                $sql="SELECT * FROM tbuser where Email='".$Email."'and Password='".$Password."' ";
                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)==1){
                    
                    $row = mysqli_fetch_array($result);

                    $_SESSION["UserID"] = $row["UserID"];
                    $_SESSION["Cusname"] = $row["Cusname"];
                    $_SESSION["Cusaddress"] = $row["Cusaddress"];
                    $_SESSION["Level"] = $row["Level"];

                    if($_SESSION["Level"]=="M"){
                        Header("Location:index.php");
                    }
                }else{
                    echo "<script>";
                    echo "alert(\" user หรีอ password ไม่ถูกต้อง\");";
                    echo "window.history.back()";
                    echo "</script>";
                }
        }else{
            Header("Location:login.php");
        }
?>