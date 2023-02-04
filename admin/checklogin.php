<?php ob_start();?>
<?php
session_start();
    if(isset($_POST['submit2'])){
                include("server/conadmin.php");
                $Email = $_POST ['Email'];
                $Password = $_POST ['Password'];
                $sql="SELECT * FROM tbadmin where Email='".$Email."'and Password='".$Password."' ";
                $result = mysqli_query($con,$sql);

                if(mysqli_num_rows($result)==1){
                    
                    $row = mysqli_fetch_array($result);

                    $_SESSION["AdminID"] = $row["AdminID"];
                    $_SESSION["Adminname"] = $row["Adminname"];
                    $_SESSION["Level"] = $row["Level"];

                    if($_SESSION["Level"]=="admin"){
                        Header("Location:index.php");}
                    }    
                    else{
                        echo "<script>";
                        echo "alert(\"user or password is incorrect\");";
                        echo "window.history.back()";
                        echo "</script>";
                }
        }else{
            Header("Location: login.php");}
       
?>
