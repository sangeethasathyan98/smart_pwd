
<?php  
   
ab_start();
//if($_SESSION['r_id'])  
//session_destroy(); 
unset($_SESSION['login_id']); 
header("Location:/smart_pwd/login.php");