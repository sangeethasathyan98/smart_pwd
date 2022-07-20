<?php
ob_start();
include 'db.php';

  $id= $_SESSION['r_id'];

  $qkl=  mysqli_query($con, "select *from registration where r_id='$id'");
  $rm=  mysqli_fetch_array($qkl);
  $st_name=$rm['name'];

 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Executive OfficerDashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
    <?php 
    include './sidebar.php';
    ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
              <?php 
    include './header.php';
              ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        
                    </div>

                   
 <div class="container-fluid">

                    <!-- Page Heading -->
                    
                            <h2 align="center" style="color:blue;"><strong>Search Submitted Quotations</strong></h2>
                      

                   <br>
                    <form class="form-horizontal" method ="POST" enctype="multipart/form-data">
                                                       
                                                       
                            <div class="form-group">
                                   <!-- <label for="Name" class="col-sm-2 control-label">Tender</label>-->
                                    <div style="text-align: center; margin-left: 132px;" class="col-sm-8">
                                                                            <select class="form-control" name="tenders" id="focusedinput"  required="">
                                                                                 <option>Select Tender</option>
    <?php 
          $qj=  mysqli_query($con, "select *from tender where Ldate>=CURDATE() and Status='1' order by Id desc");
          while($r1=  mysqli_fetch_array($qj))
                                            {
          ?>
                                                                                 <option value="<?php echo $r1['Id'];?>"><?php echo $r1['Title'];?></option>
                
            
                                      <?php 
                                            }
                                            ?>
                                                                                </select>
                                                                        </div>
                                    
                                </div>
                                                        <div class="form-group" style="margin-left:140px;">
                                                          <div class="col-sm-8 col-sm-offset-2" style="text-align:center;">
                <input  type="submit" class="btn-primary btn"  class="fas fa-search fa-sm" name="s1" value="search">
                                <input type="reset" class="btn-danger btn" value="Reset"/>
            </div>  
                                                        </div>
                    
                            </form>
                           
                   
          </div>
          <!-- script-for sticky-nav -->
          <script>
            $(document).ready(function() {
             var navoffeset=$(".header-main").offset().top;
             $(window).scroll(function(){
              var scrollpos=$(window).scrollTop(); 
              if(scrollpos >=navoffeset){
                $(".header-main").addClass("fixed");
              }else{
                $(".header-main").removeClass("fixed");
              }
            });





           });



            function selectstation(val)
            {
              alert(val);
              $("#a1").load('station.php?q='+encodeURI(val));
            }
          </script>
          <!-- /script-for sticky-nav -->
          <!--inner block start here-->
          <div class="inner-block">

          </div>
          <!--inner block end here-->
          <!--copy rights start here-->
        </br>
          <center>

  <?php 
  if(isset($_POST['s1']))
             {
      $tenders=$_POST['tenders'];
  ?>

      <div style="margin-left: 320px;">
        <div class="w3l-table-info" style="margin-left: -320px; overflow-x: auto;">
          <h2>View Bided Tender Details</h2>
          <br>
          
          <table id="table" border="1">
            <thead>
              <tr>
                <th>Id</th>
                   <th>Tender Oder No</th>
                  <th>Application Type</th>
                <th>Contractor Name</th>
              
               <th>Contractor Email </th> 
   <th>Phone </th>
                <th>Tender Title</th>
                
                 
                <th>Quotation Amount</th>
                <th>Quotation Description</th>
            
           
                
               
                                        
              </tr>
            </thead>
            <tbody>
            
             <?php 
             
          // $qr="select  *from qutation where Tenderid='$tenders' and Tender='Approved'  order by Id desc";
             $qr="SELECT registration.*,qutation.* from registration,qutation where registration.r_id=qutation.r_id and qutation.Tenderid='$tenders' ORDER by qutation.Amount LIMIT 1";
         
            $qrr=  mysqli_query($con,$qr);
            $i=1;
            while($r=mysqli_fetch_array($qrr))
            {
              $did=$r['Tenderid'];
             
              $qr1=  mysqli_query($con, "select * from tender where Id=$did");
              $r1=mysqli_fetch_array($qr1);
             $ldate=$r1['Ldate'];
 $today = date("Y-m-d");

 //$uma=$r['Userid'];

$qss=  mysqli_query($con, "select * from registration where r_id='$id'");
              $r55=mysqli_fetch_array($qss);
           
  
              ?>
              <tr>
                <form name="f1" method="post" action="">
                  <td><?php echo $i;?></td>
                   <td><?php echo $r1['oder_no']; ?> </td>
                  
                <td><?php echo $r['app_type']; ?> </td>
                    <td><?php echo $r['name']; ?> </td>
                  
                  <td><?php echo $r['Userid']; ?> </td>
                  
                  <td><?php echo $r['email']; ?> </td>
                
                <td><?php echo $r1['Title'];?></td>
                
                <td><?php echo $r['Amount'];?></td>
                  <td><?php echo $r['Description'];?></td>
              <td>   <a class="btn-info btn" href="viewtenderdetails1.php?id=<?php echo $r1['Id'];?>">View Details</a>
             
                    </form>  
                  </tr>
                  <?php

                  $i++;
                }
                ?>


              </tbody>  

            </table>
       <!--COPY rights end here-->
     </div>
         <?php 
             }
         ?>
</center>
    </div>
           
            
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>