<?php session_start();
if($_SESSION["UserID"]==""){
    header("Location:login.php");}
    include("server/conadmin.php");
?>
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>อพาร์ทเม้นท์ P.A.</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/logo.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>