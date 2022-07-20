<?php
ob_start();
include 'db.php';
if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $qr=mysqli_query($con,"select * from category where Id=$id");
    $r=mysqli_fetch_array($qr);
  }
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

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                  <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        
                    </div>

   
                    
<div   class="card shadow mb-4">
                                <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Edit Tender</strong></h6>
                        </div>
  <div align="center" style="color:red; text-align: center;"><?php
    if(isset($_GET['show'])) echo $_GET['show'];
    ?></div>
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                   

                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                <!--  <?php
        if(isset($_GET['s']))
        {
          ?>
          <b><font color="red">Successfully added</font></b>
          <?php
        }
        if(isset($_GET['d']))
        {
          ?>
          <b><font color="red">Deleted Successfully</font></b>
          <?php
        }
        if(isset($_GET['e']))
        {
          ?>
          <b><font color="red">Edited Successfully</font></b>
          <?php
        }
        ?> -->            
                <form class="form-horizontal" method ="POST" enctype="multipart/form-data">
          <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Category Name</label>
               <div class="col-sm-8">
                <input type="text" class="form-control-user form-control" name="station" id="focusedinput" value="<?php echo $r['Category']; ?>" >
                
              </div>
              
            </div>
            <div class="form-group">
             <label for="Name" class="col-sm-2 control-label">Category Type</label>
             <div class="col-sm-8">
              <input type="text" class="form-control-user form-control" name="type" id="focusedinput" value="<?php echo $r['type']; ?>" >
            </div>
            
          </div>
         
          
        
        
        
      
      
    
    <input type="hidden" name="id" value="<?php echo $id?>">
    <div class="panel-footer">
      <div class="row">
       <div class="col-sm-8 col-sm-offset-2">
        <input type="submit" class="btn-primary btn" name="s1" value="Update">
        <button class="btn-default btn">Reset</button>
      </div>
    </div>
  </div>
</form>
                          <?php

if(isset($_POST['s1']))
{
  $id=$_POST['id'];
  $station=$_POST['station'];
$type=$_POST['type'];


  $query="update Category set Category='$station',type='$type' where Id=$id";

  $result=mysqli_query($con,$query);
  
  if($result)
  {

   // header("location:addtender.php?e=1");
 echo "<script>location='addcategory.php?show=UPDATED  SUCCESSFULLY......!'</script>";
  }
}
?>

                        

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