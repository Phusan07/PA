<?php include('server/conadmin.php');

if (isset($_POST['submit'])){
    $typeid = $_POST["typeid"];
    $typeroom = $_POST["typeroom"];


    mysqli_set_charset($con,"utf8");
    $sql = "UPDATE tbtype SET typeroom = '$typeroom' WHERE typeid='$typeid' ";
    $query = mysqli_query($con,$sql) or die ("Error in query: $sql". mysqli_error());
    mysqli_close($con);
    if($query){
        echo "<script type='text/javascript'>";
        echo "alert('information has been corrected.');";
        echo "window.location = 'type.php';";
        echo "</script>";
    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert('wrong information');";
        echo "window.location = 'type.php';";
        echo "</script>";
    }
}
?>