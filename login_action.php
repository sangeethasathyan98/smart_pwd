<?php
include "db.php";

  $email=$_POST['email'];
    $pass=$_POST['pass'];

    $a=mysqli_query($con,"select * from `login` where `email`='$email' and `pass`='$pass'");
    
    $row=mysqli_fetch_array($a);
    if(!empty($row))
    {
            $_SESSION['id'] = $row['r_id'];
            if($row['role_id']==staff)
        {
            if($row['status']==1)
            {

            session_start();
            $_SESSION['email']=$row['email'];
            
            $_SESSION['r_id']=$row['r_id'];
            header("Location:staff/index.php?login_id=$row[login_id]");
            }
            else
            {
                
                header("Location:login.php?error=Blocked!"); 
            }
        }   
        else if($row['role_id']==contractor)
        {
            if($row['status']==1)
            {
            session_start();
            $_SESSION['email']=$row['email'];
            
            $_SESSION['r_id']=$row['r_id'];
            header("Location:contractor/index.php?login_id=$row[r_id]");
            }
            else
            {
                header("Location:Login.php?error=Blocked");
            }
            
        }   
        
 else if($row['role_id']==engineer)
        {
            if($row['status']==1)
            {
            session_start();
            $_SESSION['email']=$row['email'];
            
            $_SESSION['r_id']=$row['r_id'];
            header("Location:engineer/index.php?login_id=$row[login_id]");
            }
            else
            {
                header("Location:Login.php?error=Blocked");
            }
            
        }   
        

        else 
        {   
            session_start();
            $_SESSION['email']=$row['email'];
            //$_SESSION['password']=$row['Password'];
            $_SESSION['r_id']=$row['r_id'];
            if($email==$_SESSION['email'])
            {
            header("Location:admin/index.php");
        }
        
    else
            {
                header("Location:login.php?error=Invalid Username/Password!!"); 
    
            }
        }
    }
    else
        header("Location:login.php?error=Invalid Username/Password!!"); 
    

    ?>          














