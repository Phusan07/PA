<?php
session_start();
unset($_SESSION["AdminID"]);
unset($_SESSION["Adminname"]);
header("Location:loginadmin.php");
?>