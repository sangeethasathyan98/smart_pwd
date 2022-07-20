<?php
ob_start();
include 'db.php';
if(isset($_SESSION['r_id']))
  {
    $id=$_SESSION['r_id'];
   
    $qr=mysqli_query($con,"select * from registration where r_id=$id");
    $r=mysqli_fetch_array($qr);
   
              $qr1=  mysqli_query($con, "select * from district");
              $r2=mysqli_fetch_array($qr1);
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contractor- Dashboard</title>

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
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Renewal Request</strong></h6>
                        </div>

                       
                        <div class="card-body">
                            <div class="table-responsive">
                              
                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                           
                            <form   method="post" action="renewal_action.php" id="contactForm" enctype="multipart/form-data">

    <div > <div align="center" style="color:red;"><?php
    if(isset($_GET['alert'])) echo $_GET['alert'];
    ?></div>
                                <div class="form-group row">

                        
                                </div>
                                                                       
 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">Application Type:
                                       <input type="name" class="form-control form-control-user" readonly=""  name="app" id="app" type="text" value="<?php echo $r['app_type']; ?>" >
                                        
         </div>
                                   
                                    <div class="col-sm-6">Name
                                        <input type="name" class="form-control form-control-user"  name="name" id="nme" type="text"  readonly=""  value="<?php echo $r['name']; ?>"  
                                       >

                                    
                                    </div>
                                </div>
                             
                                                                   
 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">Address
                                        <input type="name" class="form-control form-control-user"  name="address" id="nme" type="text"   readonly="" value="<?php echo $r['address']; ?>"  
                                       >
                                        
         </div>
                                   
                                    <div class="col-sm-6">Gender
                                        <input type="name" class="form-control form-control-user"  name="gender" id="nme" type="text"  readonly=""  value="<?php echo $r['gender']; ?>"  
                                       >

                                    
                                    </div>
                                </div>
                                     
                                
                                      
                                         
 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">Date Of Birth
                                        <input type="name" class="form-control form-control-user"  name="dob" id="nme" type="text"   readonly="" value="<?php echo $r['dob']; ?>"  
                                       >
                                        
         </div>
                                    <div class="col-sm-6">Pancard Number
                                        <input type="name" class="form-control form-control-user"  name="pan" id="nme" type="text"  readonly=""  value="<?php echo $r['pan']; ?>"  
                                       >

                                    
                                    </div>
                                </div>
                                     
 <div class="form-group">
     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">Email
                                         <input type="name" class="form-control form-control-user"  name="email" id="nme" type="text"  readonly=""  value="<?php echo $r['email']; ?>"  
                                       >
                                           
                                    </div>
                                    <div class="col-sm-6">Phone
                                        <input type="name" class="form-control form-control-user"  name="phn" id="nme" type="text"  readonly=""  value="<?php echo $r['phone']; ?>"  
                                       >
                     
                                    </div>
                                </div>
                                
                                
                              
 <div class="form-group">
     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">select district:
                                       <input type="name" class="form-control form-control-user"  name="district" id="nme" type="text"  readonly=""  value="<?php echo $r2['District']; ?>"  
                                       >
                                  
                                </div>
                              <div class="form-group"><strong>Issue Date:</strong> 
                                    <input type="date" class="form-control form-control-user"  name="idat" id="nme"  readonly=""   
                                        value="<?php echo $r['issue_date']; ?>" >

                                </div>  

                                  <div class="form-group"><strong>  Expiration Date:</strong> 
                                    <input type="date" class="form-control form-control-user"  name="eedat" id="nme"  readonly=""   
                                        value="<?php echo $r['exp_date']; ?>" >

                                </div>      
                                 <div class="form-group"><strong>Updated Renewal Date:</strong> 
                                    <input type="date" class="form-control form-control-user"  name="edat" id="nme"    
                                       min="<?=date('Y-m-d');?>"  >

                                </div>    
                                  
                                 
     <input type="hidden" name="id" value="<?php echo $Id;?>"/>
                    <button type="submit" onclick="validate()" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
                        SUBMIT
                    </button>
                     
                            
                            </form> 
                        </div>
                    </div>



</div>



                                                
                      </table>
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
<?php
      }
 ?>