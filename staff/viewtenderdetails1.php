<?php
ob_start();
include 'db.php';
$tid=$_GET['id'];


 ?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN- Dashboard</title>

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
<a href="viewtender1.php">Back</a>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        
                    </div>

                   
 <!--<div class="container-fluid">

                    <!-- Page Heading -->
                   <!-- <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>

                <!-- DataTales Example -->
                    
<div   class="card shadow mb-4">
                                <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Tender Details</strong></h6>
                        </div>
  <div align="center" style="color:red; text-align: center;"><?php
    if(isset($_GET['show'])) echo $_GET['show'];
    ?></div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                   

                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                           
                <form class="form-horizontal" method ="POST" enctype="multipart/form-data">
                 
                   </div>
            <?php 
           



         //$qr="select  qutation.*, registration.* from qutation,registration where (qutation.r_id=registration.r_id) order by qutation.Id desc";

         $qr="SELECT registration.*,qutation.*,tender.* from registration,qutation,tender where registration.r_id=qutation.r_id and qutation.Tenderid=tender.Id and qutation.Id='$tid'";
         
            $qrr=  mysqli_query($con,$qr);
           // $i=1;
            while($r=mysqli_fetch_array($qrr))
            {
             

            
             
             // $qr1=  mysqli_query($con, "select * from tender where Id=$did");
              //$r1=mysqli_fetch_array($qr1);
          

             
            
          
              ?>
                    <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Tender Oder NO</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="order" id="focusedinput" value="<?php echo $r['oder_no']; ?>" >
            </div>
            <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Asset Type</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control-user form-control" readonly="" name="tender" id="focusedinput" value="<?php echo $r['Type']; ?>" >
                
              </div>
              
            </div>



            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Division</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="div" id="focusedinput" value="<?php echo $r['division']; ?>" >
            </div>
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Sub-Division</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="sub" id="focusedinput" value="<?php echo $r['sub_division']; ?>" >
            </div>
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">District</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control"readonly="" name="district" id="focusedinput" value="<?php echo $r['district']; ?>" >
            </div>   
          
         
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Tender Title</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="title" id="focusedinput" value="<?php echo $r['Title']; ?>" >
            </div>
            
          </div>
          <div class="form-group">
           <label for="Name" class="col-sm-2 control-label">Descriptions</label>
           <div class="col-sm-8">
            <textarea class="form-control-user form-control" readonly="" name="rules" id="focusedinput" value="" ><?php echo $r['Rules']; ?></textarea>
          </div>
           <div class="form-group"><br>
          <label class="Name">Tender Amount</label>
           <div class="col-sm-8">
            <input type="number" class="form-control-user form-control" readonly="" name="amount" id="focusedinput" value="<?php echo $r['t_amount']; ?>" >
          </div>
        </div>
         <div class="form-group"><br>
          <label class="Name">Period Of Completion</label>
           <div class="col-sm-8">
            <input type="text" class="form-control-user form-control" readonly="" name="period" id="focusedinput" value="<?php echo $r['period_completion']; ?>" >
          </div>
        </div>
        <div class="form-group">
       <label class="Name">Last Date To Apply</label>
         <div class="col-sm-8">
          <input type="date" class="form-control-user form-control" name="ldate" readonly="" id="focusedinput" value="<?php echo $r['Ldate']; ?>" >
        </div>
         <div class="form-group">
         <label for="Name" class="col-sm-2 control-label">Bid Opening Date</label>
         <div class="col-sm-8">
          <input type="date" class="form-control-user form-control" readonly="" name="bdate" id="focusedinput" value="<?php echo $r['bid_open']; ?>" >
        </div>
        <br>
        <div   class="card shadow mb-4">
                                <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Quotation Details</strong></h6>
                        </div>
                        <div class="form-group">
        
         <label class="Name">Quotation Amount</label>
         <div class="col-sm-8">
          <input class="form-control-user form-control" readonly="" name="bdate" id="focusedinput" value="<?php echo $r['Amount']; ?>" >
        </div>  <div class="form-group">
        
         <label class="Name">Description</label>
         <div class="col-sm-8">
          <input class="form-control-user form-control" readonly="" name="bdate" id="focusedinput" value="<?php echo $r['Description']; ?>" >
        </div><br>
        <div   class="card shadow mb-4">
                                <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Contractor Details</strong></h6>
                        </div>
      </div>  <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Application Type</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="order" id="focusedinput" value="<?php echo $r['app_type']; ?>" >
            </div>
      <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Contractor Name</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="order" id="focusedinput" value="<?php echo $r['name']; ?>" >
            </div>
            <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Address</label>
               <div class="col-sm-8">
                 <input type="text" class="form-control-user form-control" readonly="" name="tender" id="focusedinput" value="<?php echo $r['address']; ?>" >
                
              </div>
              
            </div>



            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Gender</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="div" id="focusedinput" value="<?php echo $r['gender']; ?>" >
            </div>
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">DOB</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="sub" id="focusedinput" value="<?php echo $r['dob']; ?>" >
            </div>
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Pancard</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control"readonly="" name="district" id="focusedinput" value="<?php echo $r['pan']; ?>" >
            </div>   
          
         
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Email</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" readonly="" name="title" id="focusedinput" value="<?php echo $r['email']; ?>" >
            </div>
            
          </div>
          <div class="form-group">
           <label for="Name" class="col-sm-2 control-label">Phone</label>
           <div class="col-sm-8">
            <textarea class="form-control-user form-control" readonly="" name="rules" id="focusedinput" value="" ><?php echo $r['phone']; ?></textarea>
          </div>
          
        </div>
        <div   class="card shadow mb-4">
                                <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Documents</strong></h6>
                        </div>
                       
          <div class="form-group"><br>
          <label class="Name">10 th Certificate</label>
           <div class="col-sm-8"><td><a class="btn-success info" target="_blank" href="../upload/<?php echo $r['education_proof']; ?>">view document</a></td>
            
          </div>
        </div>
        <div class="form-group">
      
      <label class="Name">Plus Two Certificate</label>
           <div class="col-sm-8"><td><a class="btn-success info" target="_blank" href="../upload/<?php echo $r['education_proof1']; ?>">view document</a></td>
        </div>
         <div class="form-group">
        
        <label class="Name">Degree/Other Certificates</label>
           <div class="col-sm-8"><td><a class="btn-success info" target="_blank" href="../upload/<?php echo $r['education_proof2']; ?>">view document</a></td>
           </div>
         
          </div>
        <div class="form-group">
      
      <label class="Name">Experience Certificate</label>
           <div class="col-sm-8"><td><a class="btn-success info" target="_blank" href="../upload/<?php echo $r['exp']; ?>">view document</a></td>
        </div> </div>
        <div class="form-group">
      
      <label class="Name">Signature</label>
           <div class="col-sm-8"><td><a class="btn-success info" target="_blank" href="../upload/<?php echo $r['sign']; ?>">view document</a></td>
        </div>
        

        <?php

    }

    ?>
       
         
       
      
    </div>
  </div>
</form>                   

    </div>
<!-- script-for sticky-nav -->
                        </table>
                            </div>
                        </div>
                        
                    </div>

                </div>




                   <br>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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