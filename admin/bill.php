<?php

include "db.php";

if(isset($_SESSION['email']))
{
   
$aid=$_SESSION['email'];
$query="SELECT * FROM login where email ='$aid'";
$res = mysqli_query($con,$query);
$r=mysqli_fetch_array($res);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO-play</title>
    <style>
        body{
            background-color: #F6F6F6; 
            margin: 0;
            padding: 0;
        }
        h1,h2,h3,h4,h5,h6{
            margin: 0;
            padding: 0;
        }
        p{
            margin: 0;
            padding: 0;
        }
        .container{
            width: 80%;
            margin-right: auto;
            margin-left: auto;
            margin-top: 1%;
        }
        .brand-section{
           background-color: rgb(11, 11, 94);
           padding: 10px 40px;
        }
        .logo{
            width: 50%;
        }

        .row{
            display: flex;
            flex-wrap: wrap;
        }
        .col-6{
            width: 50%;
            flex: 0 0 auto;
                    }
        .col-6-1{
            flex: 0 0 auto;
            margin-top: -10%;
            margin-left: 35%;
        }
        .text-white{
            color: #fff;
        }
        .company-details{
            float: right;
            text-align: right;
        }
        .body-section{
            padding: 16px;
            border: 1px solid gray;
        }
        .heading{
            font-size: 20px;
            margin-bottom: 08px;
        }
        .sub-heading{
            color: #262626;
            margin-bottom: 05px;
        }
        table{
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
        }
        table thead tr{
            border: 1px solid #111;
            background-color: #f2f2f2;
        }
        table td {
            vertical-align: middle !important;
            text-align: center;
        }
        table th, table td {
            padding-top: 08px;
            padding-bottom: 08px;
        }
        .table-bordered{
            box-shadow: 0px 0px 5px 0.5px gray;
        }
        .table-bordered td, .table-bordered th {
            border: 1px solid #dee2e6;
        }
        .text-right{
            text-align: end;
        }
        .w-20{
            width: 20%;
        }
        .float-right{
            float: right;
        }
        .prnt{
	        color: white;
	        text-align: center;
	        font-size: 18px;
	        padding: 5px;
	        width: 14%;
	        height: 6%;
	        transition: all 0.5s;
	        cursor: pointer;
	        margin-left: 85%;
	        margin-top:-800% ;

        }
        .prnt1{
            display: inline-block;
	        border-radius: 20px;
	        border: 1px solid #4B5251;
	        color: #4B5251;
	        text-align: center;
	        font-size: 18px;
	        padding: 5px;
	        width: 14%;
	        height: 6%;
	        transition: all 0.5s;
	        cursor: pointer;
	        margin-left: 70%;
	        margin-top:-5% ; 
        }
        .prnt:hover{
            background-color: black;
        }
        .body-section1{
            background-color: rgb(11, 11, 94);
            padding: 16px;
            border: 1px solid gray;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="brand-section">
            <div class="row">
                <div class="col-6">
                <link href="Images1/applogo.png" rel="icon">
                    <h1 class="text-white">SMART PWD </h1>
                </div>
                <div class="col-6">
                    <div class="company-details">
                        <p class="text-white">smartpwdcontractorportal@gmail.com</p>
                        <p class="text-white">Smart Pwd</p>
                        <p class="text-white">+999 585 2974</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-section">
            <div class="row">
            <?php
        // $u=$_SESSION['id'];
         //  $l=$_GET['id'];
          $query5 ="SELECT * FROM payment";
          $res5 = mysqli_query($con,$query5);
          $r5=mysqli_fetch_array($res5);
$r_id=$r5['r_id'];
          $query6 ="SELECT * FROM registration where r_id ='$r_id' ";
          $res6 = mysqli_query($con,$query6);
          $r6=mysqli_fetch_array($res6);
          $Id=$r5['qutation_id'];
          $query7 ="SELECT * FROM qutation where Id='$Id' ";
          $res7 = mysqli_query($con,$query7);
          $r7=mysqli_fetch_array($res7);
?>
                <div class="col-6">
                <div id="print_section">
                    <h2 class="heading" onclick="printbill('print_section')" value="Download">Invoice</h2>
    </div>
                    <p class="sub-heading" id="dash_date">Transaction Date: </p>
                        <script>
                        var today = new Date();
                        var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
                        document.getElementById("dash_date").innerHTML = "Order Date : "+date;
                        </script>
                    <p>Name :<?php echo $r6["name"]."</p>"; ?>
                    <p>Address :<?php echo $r6["address"]."</p>"; ?>
                    <p>Gender :<?php echo $r6["gender"]."</p>"; ?>
                    <p>DOB  :<?php echo $r6["dob"]."</p>"; ?>
                    
                    <p>Email Address :<?php echo $r6["email"]."</p>"; ?>
                    <p>Phone Number :<?php echo $r6["phone"]."</p>"; ?>
                    <p>District :<?php echo $r6["district"]."</p>"; ?>
                    </p>
                </div> 
                
            </div>
        </div>

        <div class="body-section">
            <h3 class="heading">Tender Details</h3>
            <br>
            <table class="table-bordered">
            <tr>
                   
                    <th style="padding-left:7px;" >Tender Oder NO</th>
                   
                    <th style="padding-left:20px;">Asset Type</th>
                    <th style="padding-left:7px;" >Division</th>
                   
                    <th style="padding-left:20px;">Sub Division</th>
                    <th style="padding-left:7px;" >District</th>
                   
                    <th style="padding-left:20px;">Tender Title</th>
                </tr>


            <tbody>
           <?php
            $sno = 1;
            $total= 0;
           
            $fecthReserve="SELECT * FROM `payment`";
   $fecthReserveResult=mysqli_query($con,$fecthReserve);
    while($fecthReserveRow=mysqli_fetch_array($fecthReserveResult)){
        $total+=$fecthReserveRow['Amount'];
             $query5 ="SELECT * FROM payment";
          $res5 = mysqli_query($con,$query5);
          $r5=mysqli_fetch_array($res5);
$r_id=$r5['r_id'];
          $query6 ="SELECT * FROM registration where r_id ='$r_id' ";
          $res6 = mysqli_query($con,$query6);
          $r6=mysqli_fetch_array($res6);
          $Id=$r5['qutation_id'];
          $query7 ="SELECT * FROM qutation where Id='$Id' ";
          $res7 = mysqli_query($con,$query7);
          $r7=mysqli_fetch_array($res7);
           $iid=$r7['Tenderid'];
          $query8 ="SELECT * FROM tender where  Id='$iid' ";
          $res8 = mysqli_query($con,$query8);
          $r8=mysqli_fetch_array($res8);
        echo "<tr>
       
        <td style=padding-left:25px;>".$r8['oder_no']."</td>
        <td style=padding-left:25px;>".$r8['Type']."</td>
        <td style=padding-left:25px;>".$r8['division']."</td>
        <td style=padding-left:25px;>".$r8['sub_division']."</td>
        <td style=padding-left:25px;>".$r8['district']."</td>
        <td style=padding-left:25px;>".$r8['Title']."</td>
        

        </tr><br>";
    }
        #$tax=50;
        #echo"<tr>
        #<td></td><td></td>
        #<td><b> Sub Total </td>
        #<td> $total</td></b></tr>";
        #echo"<tr>
        #<td></td><td></td>
        #<td><b> Tax </td>
        #<td> $tax</td></b></tr>";
        $grand_total=$total;
        echo"<tr>
        <td></td><td></td>
        <td><b> Grand Total </td>
        <td> $grand_total</td></b></tr>";
            ?>
                    
            </table>
            <br>
            <!--<h3 class="heading" style="margin-left:2%;">Payment Status: <?php //echo $r4["paystatus"]."</h3>"; ?>
            <h3 class="heading"style="margin-left:2%;">Payment Mode: Online Payment</h3>
            <h3 class="heading"style="margin-left:2%;">Payment Date:<?php //echo $r4["date_added"]."</h3>"; ?>-->
            </div>
            <!--<div>
            <a href="#" class="prnt1">Submit</a></div>-->
           <!--<div id="print_section">
             <input type="button" class="prnt"onclick="printbill('print_section')" value="Download">
        </div>-->

        <div class="body-section1">

        <a href='../page1.php'><i style="margin-left:50%;" class="text-white"> Thank You for Visiting...</i></a>
            </p>
        </div>      
    </div>      
<script>
    function printbill(section_id){
    window.print();
    }
    
</script>

</body>
</html>
<?php 



            
        }
            

?>