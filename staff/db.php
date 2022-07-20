<?php
 ob_start();
session_start();
$con = mysqli_connect("localhost", "root","","smart")
or  die("connection not established:". mysqli_error());

ob_flush();



?>