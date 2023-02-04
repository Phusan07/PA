<?php ob_start();?>
<?php
session_start();
unset($_SESSION['sell']);
header("Location: receipt.php");
?>