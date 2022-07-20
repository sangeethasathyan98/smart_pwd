<?php
ob_start();
include 'db.php';

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

                   
 <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                    <p class="mb-4"> <a target="_blank"
                            href="https://datatables.net"></a>.</p>

                    <!-- DataTales Example -->
                    
<div   class="card shadow mb-4">
                                <div class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Add Executive Officer</strong></h6>
                        </div>

                       
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                   

                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                  <form class="form-horizontal" method ="POST" enctype="multipart/form-data">

                                    <div align="center" style="color:red; text-align: center;"><strong><?php
    if(isset($_GET['show'])) echo $_GET['show'];
    ?></strong></div>
                                                       
							<div class="form-group">
									 <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>Name</strong></label>
									<div class="col-sm-8">
										
 <input  type="text" class="form-control form-control-user" name="station" id="station" value="" onchange="Validate();"  required>


                                            <span id="msg1" style="color:red;"></span>
<script>        
function Validate() 
{
 var val = document.getElementById('station').value;

    if (!val.match(/^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                    document.getElementById('station').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}

</script>

									</div>
									
								</div>
								<div class="form-group">
									 <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>Address</strong></label>
									<div class="col-sm-8">
										<textarea class="form-control form-control-user" name="address" id="focusedinput" value="" required></textarea>



									</div>
									
								</div>
                                                              <div class="form-group">
									 <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>DOB</strong></label>
									<div class="col-sm-8">
										<input type="date"  min="1980-01-01" max="2000-12-30" class="form-control form-control-user" name="phone" id="focusedinput"  value="" required>
									</div>
									
								</div>
                                    <div class="form-group">
                                     <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>Gender</strong></label>
                                    <div class="col-sm-8">
                                         <input type="radio" class=" form-control-user"  name="gender" value="Male" required> Male.  

                         <input type="radio" class="form-control-user"  name="gender"      value="female" required> Female
                                        <input type="radio" class=" form-control-user"  name="other" value="other"> Others</div>
                                    
                                </div>
                                       <div class="form-group">
                                    <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>District</strong></label>
                                    <div class="col-sm-8">
                                        <select class="form-control form-control-user" name="district" required>
                                                                                    <option value="">Select District</option>
                                                                                    <?php
                                                                                    $qr=mysqli_query($con,"select * from district");
                                                                                    while($r=mysqli_fetch_array($qr))
                                                                                    {
                                                                                        
                                                                                    
                                                                                    ?>
                                                                                    <option value="<?php echo $r['Id']; ?>"><?php echo $r['District']; ?></option>
                                                                                    <?php  } ?>
                                                                                </select>
                        
                                    </div>
                                    
                                </div>
                                      
                                      
                                                   
                                                           <div class="form-group">
									 <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>Email</strong></label>
									<div class="col-sm-8">
									


        <input type="email" class="form-control "
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
                                      
                                      
                                                         <div class="form-group">
									 <label for="Name" class="col-sm-2 control-label" style="color: blue; font: bold;"><strong>Password</strong></label>				
                                     	<div class="col-sm-8">
										<input type="password" class="form-control "
                                          name="password" type="password" class="input-box" id="password" title="Password" onchange="return Validp();" placeholder="Enter Password"required>




                                            <span id="msg6" style="color:red;"></span>
<script>        
function Validp() 
{
    var val = document.getElementById('Password').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg6').innerHTML="Password should contain atleast 6 characters";
        
             document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
                         
									</div>
									
								</div>
								<div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" class="btn-primary btn" name="s1" value="Add">
				<button class="btn-default btn">Reset</button>
			</div>
		</div>
	 </div>
							</form>
<?php

if(isset($_POST['s1']))
{
$district=$_POST['district'];
$address=$_POST['address'];
$station=$_POST['station'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$password=$_POST['password'];
$dup =mysqli_query($con,"select * from staff where email='$email' ");
     if(mysqli_num_rows($dup)>0)
     {
         echo "<script>location='addstaff.php?show=DATA IS ALREADY EXIST......!'</script>";
     }
     else
     {



 $query="insert into staff(login_id,name,address,gender,dob,district,email,pass,status)values('2','$station','$address','$gender','$phone','$district','$email','$password','1')";

 $result=mysqli_query($con,$query);
 $qm=mysqli_query($con,"insert into login(email,Pass,role_id,status) values('$email','$password','staff','1')");
 if($result)
 {
   // header("location:addstaff.php?s=1");
     echo "<script>location='addstaff.php?show=DATA IS ADDED SUCCESSFULLY......!'</script>";
 }

}
}
?>
                         <div class="w3l-table-info" style="overflow-x: auto;">
					  <h2>View Executive officer Details</h2>
                                          
                                          <table id="table" border="1">
						<thead>
						  <tr>
							<th>Id</th>
							<th>District</th>
							<th>Name</th>
							<th>Address</th>
                                                        <th>Email</th>
                                                        <th>Gender</th>
                                                         <th>DOB</th>
                                                        <th>Actions</th>
                                                        
                                                        
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                 
                                                  $qr="select * from staff where status='1'";
                                                  
                                                  
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  {
                                                      $did=$r['district'];
                                                      $qr1=  mysqli_query($con, "select * from district where Id=$did");
                                                      $r1=mysqli_fetch_array($qr1);
                                                  ?>
                                                    <tr>
                                                          <form name="f1" method="post" action="">
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $r1['District'];?></td>
                                                         <td><?php echo $r['name'];?></td>
                                                         <td><?php echo $r['address']; ?></td> 
                                                           <td><?php echo $r['email'];?></td>
                                                           <td><?php echo $r['gender'];?></td>
                                                            <td><?php echo $r['dob'];?></td>
                                                            <td><a href="delstaff.php?id=<?php echo $r['staff_id'];?>"><input type="button" class="btn-info" name="btn" value="Block" onclick="alert('are you sure want to block??')"> </a></td>
                             
                            
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