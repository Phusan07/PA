<?php
session_start();
unset($_SESSION["CusID"]);
unset($_SESSION["Cusname"]);
header("Location:index.html");
?>