<?php
ob_start();
include 'db.php';
if(isset($_SESSION['user']))
{
unset($_SESSION['user']);
header("location:index.php");
}
ob_start();

?>
