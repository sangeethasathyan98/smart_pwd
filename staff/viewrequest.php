<?php
include 'db.php'; 

  $um= $_SESSION['email'];
  $qkl=  mysqli_query($con, "select *from staff where email='$um'");
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

    <title>Executive Officer Dashboard</title>

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
                            <h6 align="center" style="color:blue;"><strong>View Renewal Request</strong></h6>
                        </div>

                       
                        <div class="card-body">
                            <div class="table-responsive">
                          <table id="table" border="1">
            <thead>
              <tr>
                <th width="2%">Id</th>
                <th>Type</th>
                <th width="12%">Name</th>
                <th width="9%">Address</th>
                <th>Email</th>
                <th>Phone</th>
                 <th>PAN</th>
                   <th>Gender</th>
                  <th>Phone</th> 
                  <th width="10%">Issue Date</th>
                  <th width="10%">Updated Renewal Date</th>
                <th>District</th>
                 
               <th>Status</th>
                <th>Actions</th>
            
                                        
              </tr>
            </thead>
            <tbody>
            
             <?php 
           $qr="select  *from renewal order by renew_id desc";
         
            $qrr=  mysqli_query($con,$qr);
            $i=1;
            while($r=mysqli_fetch_array($qrr))
            {
              //$did=$r['district'];
             
              $qr1=  mysqli_query($con, "select * from district");
              $r1=mysqli_fetch_array($qr1);
             

              ?>
              <tr>
                <form name="f1" method="post" action="">
                  <td><?php echo $i;?></td>
                  <td><?php echo $r['app_type']; ?></td>
                  <td><?php echo $r['name']; ?></td>
                <td><?php echo $r['address']; ?></td> 
                <td><?php echo $r['email'];?></td>
                <td><?php echo $r['phone'];?></td>
                 <td><?php echo $r['pancard'];?></td>
                  <td><?php echo $r['gender'];?></td>
                   <td><?php echo $r['phone'];?></td>
                   <td><?php echo $r['issue_date'];?>
                        <td><?php echo $r['renewal_date'];?>
                <td><?php echo $r1['District']; ?></td>
               <!-- <td><a class="btn-light btn" target="_blank" href="../contractor/upload/<?php echo $r['image']; ?>">view</a></td>-->
                  <td><?php echo $r['status']; ?></td>
                  <td>   <a class="btn-success btn" href="licence.php?id=<?php echo $r['renew_id'];?>&j=0">Approve</a>&nbsp;  <a class="btn-danger btn" href="licence.php?id=<?php echo $r['renew_id'];?>&j=1">Reject</a>          </td>

               
                    </form>  
                  </tr>
                  <?php

                  $i++;
                }
                ?>


              </tbody>  

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