<?php 
ob_start();
include './db.php';
$uid=$_SESSION['r_id'];
$umail=$_SESSION['email'];
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
                                 <div class="form-group"><strong>Application Type:</strong>


                                    <select   class="form-control"  id="app" name="app" required>
                                         <option value="individual" >select</option>
  <option value="individual" >Individual</option>
 
</select>
                                   </div>
                             
                                <div class="form-group"><strong>Name:</strong> 
                                    <input type="name" class="form-control form-control-user"  name="name" id="nme" type="text" onchange="Validate();"    
                                        placeholder="Enter your name" required>


                                            <span id="msg1" style="color:red;"></span>
<script>        
function Validate() 
{
 var val = document.getElementById('nme').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                    document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}

</script>
                                </div>
                                  <div class="form-group">Address: 
                                   <textarea class=" form-control form-control-user" name="address" id="message" cols="59" rows="1"  placeholder=" Enter your Address" onchange="Validadd();" required></textarea>

                                   <span id="msg33" style="color:red;"></span>
<script>        
function Validadd() 
{
    var val = document.getElementById('message').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg33').innerHTML="Start with a Capital letter";
                    document.getElementById('message').value = "";
        return false;
    }
document.getElementById('msg33').innerHTML=" ";
    return true;
}
</script>
                    
                                </div>
  


                               
                                
                                         <div class="form-group">




                                       Gender      :  <input type="radio" class=" form-control-user"  name="gender"  onchange="Validate();"    value="Male" > Male.  


                                 <input type="radio" class="form-control-user"  name="gender"  onchange="Validate();"    value="female" required> Female
                                        <input type="radio" class=" form-control-user"  name="other"  onchange="Validate();"    value="other"> Others</div>
 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">Date Of Birth
                                        <input type="date" class="form-control form-control-user"
                                           name="dob" id="dob" min="1998-10-2" max="2000-10-2" required>
                                         

         </div>
                                    <div class="col-sm-6">Pancard Number
                                        <input type="text" class="form-control form-control-user"
                                           name="pan" id="pan" title="pancard number"required>

                                    
                                    </div>
                                </div>
                                       <!--  <div class="form-group">Pancard Number: 
                                    <input type="name" class="form-control form-control-user"  name="pan" id="pan" type="text" onchange="Validate();"    
                                        placeholder="Enter your name"></div>-->


 <div class="form-group">
     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">Email
                                        <input type="email" class="form-control form-control-user"
                                            id="email" name="email" onchange="Validataemail();" placeholder="Enter Your email">

                                            <span id="msg55" style="color:red;"></span>
                                             <script>        
function Validataemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        document.getElementById('msg55').innerHTML="Enter a Valid Email";
        
             document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg55').innerHTML=" ";
    return true;
}

        </script>
                                    </div>
                                    <div class="col-sm-6">Phone
                                        <input type="text" class="form-control form-control-user"
                                            id="phn"  name="phn" onchange="Validat();"  placeholder="Enter Phone Number">
                                               <span id="msg4" style="color:red;"></span>
            
<script>
function Validat() 
{
    var val = document.getElementById('phn').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
    
        
                    document.getElementById('phn').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}

</script>
                     
                                    </div>
                                </div>
                                
                                
                              
 <div class="form-group">
     <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">select district:
                                       <select name="district"  class="form-control " onchange="selstation(this.value)">
                                    <option value="">Select District</option>
                                    <?php
                                    $qr1=mysqli_query($con,"select * from district");
                                    while($r1=mysqli_fetch_array($qr1))
                                    {
                                    ?>
                                    <option value="<?php echo $r1['Id']; ?>"><?php echo $r1['District']; ?></option>
                                   <?php }
                                   ?>
                                     </select>

                                                     </div>
                                    <div class="col-sm-6">Image Upload:
                                         <input class="form-control " name="img" id="image" type="file"  placeholder="">
                                    </div>
                                </div>
                              <div class="form-group"><strong>Issue Date:</strong> 
                                    <input type="date" class="form-control form-control-user"  name="idat" id="nme"     
                                        placeholder="Enter your Date" required>

                                </div>    
                                 
     <input type="hidden" name="uid" value="<?php echo $uid;?>"/>
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