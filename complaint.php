<?php 
ob_start();
include './db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Complaint</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="">
        
        function validate() {
  //get all inputs of the form in array
  var inputs = $('#contactForm :input');
  var k = 0;
  inputs.each(function() {
    if ($(this).val() == '') {
      k = 1;
    }
  });
  if (k == 1) {
    alert('please fill all fields');
  } else {
    alert('submitted successfully');
  }
}
function postvalue(id) {
  $('#value').val(id);
}
    </script>
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div >
                    
                    <div >
                        <div class="p-5"> <a href="index.php">Back</a>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Complaint</h1>
                            </div>
                            <form   method="post" action="" id="contactForm" enctype="multipart/form-data">

    <div > <div align="center" style="color:red;"><?php
    if(isset($_GET['alert'])) echo $_GET['alert'];
    ?></div>
                                <div class="form-group row">

                                   
                                   <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Last Name">
                                    </div>-->
                                </div>
              
                             
                                <div class="form-group"><strong>Enter Your Name:</strong> 
                                    <input type="name" class="form-control form-control-user"  name="name" id="nme" type="text" onchange="Validate();"    
                                        placeholder="Enter your name" required>


                                            <span id="msg1" style="color:red;"></span>
<script>        
function Validate() 
{
 var val = document.getElementById('nme').value;

    if (!val.match(/^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                    document.getElementById('nme').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}

</script>
                                </div> <div class="form-group"><strong>Email Address:</strong> 
                                    <input type="name" class="form-control form-control-user"  name="email" id="email" type="text" onchange="Validataemail();"    
                                        placeholder="Enter your name" required>


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
                                 
                                 <div  class="form-outline mb-4"><strong>Problem With</strong>


                                    <select   class="form-control"  id="app" name="app" required>
                                         <option value="Road" >Road</option>
  <option value="Bridge" >Bridge</option>
  <option value="Bulding" >Building</option>
  <option value="Drain" >Drain</option>
</select>
                                   </div>

 <div  class="form-outline mb-4"><strong>Problem Type:</strong>


                                    <select   class="form-control"  id="app1" name="app1" required>
                                         <option value="individual" >select</option>
  <option value="pothole" >Pothole</option>
  <option value="Cracks" >cracks</option>
  <option value="Edoe break" >Edoe break</option>
</select>
                                   </div>


                                  <div class="form-group">Complaint: 
                                   <textarea class=" form-control form-control-user" name="Complaint" id="message" cols="59" rows="1"  placeholder=" Enter your complaint" onchange="Validadd();" required></textarea>

                                   <span id="msg33" style="color:red;"></span>
<script>        
function Validadd() 
{
    var val = document.getElementById('message').value;

    if (!val.match(/^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/)) 
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
  
                                </div>
                               <div class="form-outline mb-4">Image Upload:
                                        
                                         <input type="file" name="img" class="form-control" id="img" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp();"/></td>
</tr>
<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("img").value = "";
      document.getElementById("file").focus();
      
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script> 
             
                    <button type="submit" onclick="validate()" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
                        SUBMIT
                    </button>
                     
                           
                                
                            </form>
                            <?php 
                            if(isset($_POST['submit']))
                            {
                                 $name=$_POST['name'];
                                  $email=$_POST['email'];
                        $app=$_POST['app']; $name=$_POST['name'];
                        $app1=$_POST['app1'];
                        $complaint=$_POST['Complaint'];
                         $img=$_FILES["img"]["name"];
                          $date=date("d-m-y");
                           move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
                   $qr=  mysqli_query($con,"INSERT INTO `complaint`(`name`, `email`, `problem_with`, `problem_type`, `date`, `description`, `img`, `status`) VALUES ('$name','$email','$app','$app1','$date','$complaint','$img','1')");    
                   echo '<script>alert("Successfully sent complaint");</script>';
                            }
                            ?>
                            <hr>
                         
                         
                            
                        </div>
                    </div>





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

</body>

</html>