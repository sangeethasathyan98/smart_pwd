
<?php
include './db.php';
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];


$qy="update tbl_plan set status='Rejected' where plan_id='$iid'";

    $qyy=mysqli_query($con,$qy);
    //$qh=  mysqli_query($con, "update tbl_plan set status='Verifed' where plan_id='$id");
  //header("location:viewtender1.php");
     echo "<script>location='viewplan.php?show=Quotation is Approved Successfully......!'</script>";

    } 
ob_flush();
?>






















<?php
include 'db.php';
if(isset($_GET['id']))
    {
    
    $iid=$_GET['id'];
$j=$_GET['j'];
 
if($j=='0')
{
$qy="update tbl_plan set status='Verifed' where plan_id='$id'";

    $qyy=mysqli_query($con,$qy);
  header("location:viewplan.php");
}
if ($j=='1')
{
    $qy1="update tbl_plan set status='Reject' where plan_id='$id'";
    $qyy1=mysqli_query($con,$qy1);
   
    header("location:viewplan.php");
 }
    } 
ob_flush();
?>
