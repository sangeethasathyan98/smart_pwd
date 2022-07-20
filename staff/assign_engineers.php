<?php
ob_start();
include 'db.php';
if(isset($_SESSION['r_id']))
  {
    $id=$_SESSION['r_id'];
   
    $qr=mysqli_query($con,"select * from registration where r_id=$id");
    $r=mysqli_fetch_array($qr);
 
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
               
                   
 
                 
                  
                           
                       <section class="vh-100" >
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" >
          <div class="card-body p-5 text-center">

            <h3 class="mb-5" style="color:blue;">Assign Engineers to tender</h3>

 <form   method="post" action="assign_engineer_action.php" id="contactForm" enctype="multipart/form-data">

    <div > <div align="center" style="color:red;"><?php
    if(isset($_GET['alert'])) echo $_GET['alert'];
    ?></div>
   <div class="form-outline mb-4"> <label class="form-label"  style="color: black; font: bold;">Tender Category</label>
            
              <select class="form-control" name="category" id="focusedinput"  required>
                      <option>Select Category</option>
    <?php 
          $qj=  mysqli_query($con, "select *from category order by Id desc");
          while($r1=  mysqli_fetch_array($qj))
                                            {
          ?>
    <option value="<?php echo $r1['Category'];?>"><?php echo $r1['Category'];?></option>
                
            
                                      <?php 
                                            }
                                            ?>
            </select>
            </div>
            <div class="form-outline mb-4"> <label class="form-label" style="color: black; font: bold;">Tender</label>
            
             <select class="form-control" name="tender" id="focusedinput"  required>
                      <option>Select Tender</option>
    <?php 
          $qj=  mysqli_query($con, "select * from tender where Ldate>=CURDATE() and Status='1' order by Id desc");
          while($r1=  mysqli_fetch_array($qj))
                                            {
          ?>
    <option value="<?php echo $r1['Title'];?>"><?php echo $r1['Title'];?></option> 
               
            
                                      <?php 
                                            }
                                          ?>

           </select> 

           <div>
  <?php 
          $qjt=  mysqli_query($con, "select * from tender where Ldate>=CURDATE() and Status='1' order by Id desc");
          while($r12=  mysqli_fetch_array($qjt))
                                            {
          ?>
 <input type="hidden" name="ttidd" value="<?php echo $r12['Id'];?>">
               
            
                                      <?php 
                                            }
                                            ?>
            

              
             <div class="form-outline mb-4"> <label class="form-label" style="color: black; font: bold;" >Assign Engineers</label>
             <select class="form-control" name="engineer" id="focusedinput"  required>
                      <option>Select Engineer</option>
    <?php 
          $qj=  mysqli_query($con, "select *from registration where status='engineer' and r_status='Approved' ");
          while($r2=  mysqli_fetch_array($qj))
                                            {
          ?>
    <option value="<?php echo $r2['r_id'];?>" ><?php echo $r2['name'];?></option>
                
            
                                      <?php 
                                            }
                                            ?>
            </select>
             
            </div>
               <input type="hidden" name="id" value="<?php echo $r2['r_id'];?>">
            <button class="btn btn-primary btn-lg btn-block" name="s1" type="submit">Submit To verify</button>

           </form> 

          </div>
        </div>
      </div>
    </div>


    
  </div>
</section>


<h1 align="center" style="color:blue;">View list</h1>
                            
         
                         <table width="70%" align="center" id="table" border="1" >
            <thead>
              <tr>
                <th>Id</th>
              
                <th>Tender Name</th>
                  
                <th>Engineer Name</th>
                  <th>Email</th>
               <th>Phone</th>
                                      
              </tr>
            </thead>
            <tbody>
            
             <?php 
           $qr="select  *from tbl_assignengineer where status='1'   order by r_id desc";
        
            $qrr=  mysqli_query($con,$qr);
            $i=1;
            while($r=mysqli_fetch_array($qrr))
            {
                 $qr1=  mysqli_query($con, "select * from registration where r_id='$id' ");
              $r1=mysqli_fetch_array($qr1);         

              ?>
              <tr>
                <form name="f1" method="post" action="">
                  <td><?php echo $i;?></td>
                 
                  
                     
                </td>
                <td><?php echo $r['tender']; ?></td> 
                 
                <td><?php echo $r['engineer'];?></td>
  <td><?php echo $r1['email'];?></td>
   <td><?php echo $r1['phone'];?></td>
   
              <!-- <td><a href="editcategory.php?id=<?php echo $r['Id'];?>"><input type="button" class="btn-success" name="btn" value="Edit" onclick="alert('are you sure want to Edit??')"> </a>

                                                         </td>
                              <td><a href="del_category.php?id=<?php echo $r['Id'];?>"><input type="button" class="btn-danger" name="btn" value="block" onclick="alert('are you sure want to delete??')"> </a>-->
                 
                

               
                    </form>  
                  </tr>
                   <?php

                  $i++;
                }
                ?>

              </tbody>  

            </table>

    </div>
 
    </div>
 
</div>



                       
    </div>
<!-- script-for sticky-nav -->
                        </table>
                            </div>
                        </div>
                    </div>

                </div>




                   <br>
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
<?php
      }
 ?>