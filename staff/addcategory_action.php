<?php
include "db.php";

if(isset($_POST["s1"]))
{
    // echo "sam";
    $category=$_POST['category'];
    //echo $category;
    
     $dup =mysqli_query($con,"select * from category where category='$category' ");
     if(mysqli_num_rows($dup)>0)
     {
         echo "<script>location='addcategory.php?show=DATA IS ALREADY EXIST......!'</script>";
     }
     else
     {
         
    $sql="INSERT INTO category (category) VALUES ('$category')";

    $res=mysqli_query($con,$sql);
     echo "<script>location='addcategory.php?show=DATA IS ADDED SUCCESSFULLY......!'</script>";
}
}
?>
