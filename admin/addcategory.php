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
                                <div style="align:center;" class="card-header py-3">
                            <h6 align="center" style="color:blue;"><strong>Add Category</strong></h6>
                        </div>

                       <div align="center" style="color:red; text-align: center;"><?php
    if(isset($_GET['show'])) echo $_GET['show'];
    ?></div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                   

                                   <div  class="tab-content">
                        <div class="tab-pane active" id="horizontal-form" >
                                <form style="align:center;" class="form-horizontal" method ="POST" enctype="multipart/form-data">
                                       



                                        <div class="form-outline mb-4"> <label class="form-label" style="color: black; font: bold;">Category Name</label>
            
              <select   class="form-control"  id="station" name="station" required>
                                         <option value="" >select</option>
  <option value="Road" >Road</option>
  <option value="Buldings" >Buldings</option>
  <option value="Bridges" >Bridges</option>
   


 
</select>
            </div>

            <div class="form-outline mb-4">  <label class="form-label" style="color: black; font: bold;" >Sub Category</label>
              <input type="text" id="type" name="type" class="form-control" required>
              <!--<select name = "type[]" multiple> 
                <option value = "english">ENGLISH</option>
                <option value = "maths">MATHS</option>
                <option value = "computer">COMPUTER</option>
                <option value = "physics">PHYSICS</option>
                <option value = "chemistry">CHEMISTRY</option>
                <option value = "hindi">HINDI</option>
            </select>-->
            
            </div>

              

            <button class="btn btn-primary" name="s1" type="submit">Submit</button>                
						<!--	<div style="margin-left: 20%;" class="form-group">
									<label for="Name" style="align-content: center;" class="col-sm-4 control-label">Category Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="station" id="focusedinput" value="" required="">
									</div>
									
                                    
								</div>
                                <div style="margin-left: 20%;" class="form-group">
                                    <label for="Name" style="align-content: center;" class="col-sm-4 control-label">Category Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control1" name="station" id="focusedinput" value="" required="">
                                    </div>
                                    
                                                        <div style="text-align:center ;" class="form-group">
									<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" class="btn-primary btn" name="s1" value="Add">
                                <input type="reset" class="btn-danger btn" value="Reset">
			</div>
									
								</div>-->
								
							</form>
<?php

if(isset($_POST['s1']))
{

$station=$_POST['station'];
$type=$_POST['type'];
 $dup =mysqli_query($con,"select * from category where category='$station' ");
     if(mysqli_num_rows($dup)>0)
     {
         echo "<script>location='addcategory.php?show=DATA IS ALREADY EXIST......!'</script>";
     }
     else
     {
        
 $query="insert into category(Category,type)values('$station','$type')";

 $result=mysqli_query($con,$query);
 
 if($result)
 {
    //header("location:addcategory.php?s=1");
     echo "<script>location='addcategory.php?show=DATA IS ADDED SUCCESSFULLY......!'</script>";
 }

}
}
?>
<br>
<br>
<br>
                            <div class="w3l-table-info" >
					  <h2 align="center">View category  Details</h2>
                                          
                                          <table id="table" border="1" style="width: 90%;">
						<thead>
						  <tr>
							<th>Id</th>
							<th>category Name</th>
							
                                   <th>Sub Category</th>                     
                                                        <th>Edit</th>
                                                    <th>Delete</th>    
						  </tr>
						</thead>
						<tbody>
						  <?php
                                                 
                                                  $qr="select * from category";
                                                  
                                                  
                                                  $qrr=  mysqli_query($con,$qr);
                                                  $i=1;
                                                  while($r=mysqli_fetch_array($qrr))
                                                  { 
$t=$r['type'];
$arr=explode(',',$t);





                                                    ?>
                                                    <tr>
                                                          <form name="f1" method="post" action="">
                                                        <td><?php echo $i;?></td>
                                                       
                                                         <td><?php echo $r['Category'];?></td>
                                                             <td><?php foreach($arr as $a){
                                                                     echo $a."<br>";}?></td>
                                                         <td><a href="editcategory.php?id=<?php echo $r['Id'];?>"><input type="button" class="btn-success" name="btn" value="Edit" onclick="alert('are you sure want to Edit??')"> </a>

                                                         </td>
                              <td><a href="del_category.php?id=<?php echo $r['Id'];?>"><input type="button" class="btn-danger" name="btn" value="delete" onclick="alert('are you sure want to delete??')"> </a>
                                                           
                                                         </td>
                            </td> 
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