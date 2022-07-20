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

    <title> Register</title>

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
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Contractor Registration</h1>
                            </div>
                            <form   method="post" action="register_action.php" id="contactForm" enctype="multipart/form-data">

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
                                           name="dob" id="dob" onchange="myFunction;" required>
                                          <span id="demo" style="color:red;"></span>
                    <script>
                        function myFunction() 
                    {
                        var x = document.getElementById("dob").max;
                        document.getElementById("dob").innerHTML = "Invalid Date!!";
                    }
</script>

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
                                    <option value="<?php echo $r1['id']; ?>"><?php echo $r1['district']; ?></option>
                                   <?php }
                                   ?>
                                     </select>

                                                     </div>
                                    <div class="col-sm-6">Image Upload:
                                         <input class="form-control " name="img" id="image" type="file"  placeholder="">
                                    </div>
                                </div>
                                
                                 

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">password:
                                        <input type="password" class="form-control form-control-user"
                                          name="pwd" type="password" class="input-box" id="pwd" title="Password" onchange="return Validp();" placeholder="Enter Password"required>




                                            <span id="msg6" style="color:red;"></span>
<script>        
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^[A-Za-z0-9!-*]{6,15}$/)) 
    {
        document.getElementById('msg6').innerHTML="Password should contain atleast 6 characters";
        
             document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
                                    </div>
                                    <div class="col-sm-6">Repeat Password:
                                        <input type="password" class="form-control form-control-user"
                                           name="confirm" type="password" class="input-box" id="confirm" title="Confirm Password" onchange="return check();" placeholder="Repeat Password" required>

                                            <span id="msg7" style="color:red;"></span>
                    <script>
    function check()
{
var pas1=document.getElementById("pwd");
                              var pas2=document.getElementById("confirm");
                            
                              if(pas1.value=="")
    {
        document.getElementById('msg7').innerHTML="Password can't be null!!";
        pas1.focus();
        return false;
    }
    if(pas2.value=="")
    {
        document.getElementById('msg7').innerHTML="Please confirm password!!";
        pass2.focus();
        return false;
    }
    if(pas1.value!=pas2.value)
    {
        document.getElementById('msg7').innerHTML="Passwords does not match!!";
        pas1.focus();
        return false;
    }
     document.getElementById('msg7').innerHTML=" "; 
    return true;
    
}
    </script>
                                    </div>
<br>
                   <br>
                   <br>
                   <hr>     </div>        
                    <button type="submit" onclick="validate()" name="submit" value="submit" class="btn btn-primary btn-user btn-block">
                        SUBMIT
                    </button>
                     
                               <!-- <a href="lo class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </a>-->
                                <!--<hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>-->
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
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