<?php 
ob_start();
include './db.php';
?>


<!DOCTYPE html>
<html lang="en">
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
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<style >
  .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}  



</style>
<body>

   <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
   
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo.png"
                    style="width: 198px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1"></h4>
                </div>

                <form class="user" method="POST" action="staff_register_action.php" id="contactForm" enctype="multipart/form-data" >



                  <h4 style="text-align: center; color: #d8363a;">Executive Officer Registration</h4>

 <div align="center" style="color:red;"><?php
    if(isset($_GET['alert'])) echo $_GET['alert'];
    ?></div>
             
                 

                                   
                             
                                <div class="form-outline mb-4"><strong>Name:</strong> 
                                    <input type="name" class="form-control"  name="name" id="nme" type="text" onchange="Validate();"    
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
                                </div>
                                  
  
  <div class="form-outline mb-4">




                                       Gender      :  <input type="radio" class=" form-control-user"  name="gender"  onchange="Validate();"    value="Male" > Male.  


                                 <input type="radio" class="form-control-user"  name="gender"  onchange="Validate();"    value="female" required> Female
                                        <input type="radio" class=" form-control-user"  name="other"  onchange="Validate();"    value="other"> Others</div>
                                        <div class="form-outline mb-4">Address: 
                                   <textarea class=" form-control" name="address" id="message" cols="59" rows="1"  placeholder=" Enter your Address" onchange="Validadd();" required></textarea>

                                   <span id="msg33" style="color:red;"></span>
<script>        
function Validadd() 
{
    var val = document.getElementById('message').value;

    if (!val.match(/^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/)) 
    {
        document.getElementById('msg33').innerHTML="Enter a valid Address";
                    document.getElementById('message').value = "";
        return false;
    }
document.getElementById('msg33').innerHTML=" ";
    return true;
}
</script>
                    
                                </div>
                                  <div class="form-outline mb-4">select district:
                                       <select name="district"  class="form-control " onchange="selstation(this.value)">
                                    <option value="">Select District</option>
                                    <?php
                                    $qr1=mysqli_query($con,"select * from district");
                                    while($r1=mysqli_fetch_array($qr1))
                                    {
                                    ?>
                                    <option value="<?php echo $r1['District']; ?>"><?php echo $r1['District']; ?></option>
                                   <?php }
                                   ?>
                                     </select>

                                    </div>


                                    <div class="form-outline mb-4">Date Of Birth
                                        <input type="date" class="form-control "
                                           name="dob" id="dob" onchange="myFunction;" min="1970-01-01" max="1996-12-30" required>
                                          <span id="demo" style="color:red;"></span>
                    <script>
                        function myFunction() 
                    {
                        var x = document.getElementById("dob").max;
                        document.getElementById("dob").innerHTML = "Invalid Date!!";
                    }
</script>

         </div>
                                    <div class="form-outline mb-4">Pancard Number
                                        <input type="text" class="form-control "
                                           name="pan" onchange="Validataepan();" id="pan" title="pancard number"
                                           placeholder="Enter Pancard" required>
 <span id="msg60" style="color:red;"></span>





                                             <script>        
function Validataepan() 
{
    var val = document.getElementById('pan').value;

    if (!val.match(/[A-Z]{5}[0-9]{4}[A-Z]{1}$/)) 
    {
        document.getElementById('msg60').innerHTML="Invalid PAN Card Number";
        
             document.getElementById('pan').value = "";
        return false;
    }
document.getElementById('msg60').innerHTML=" ";
    return true;
}

        </script>
                                  
                                    </div>
                                
                                     <div class="form-outline mb-4">Email
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
                                    <div class="form-outline mb-4">Phone
                                        <input type="text" class="form-control "
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
                                 <div  class="form-outline mb-4"><strong>Education Qualification:</strong>


                                    <select   class="form-control"  id="app" name="app" required>
                                         <option value="" >select</option>
  <option value="Degree" >Degree</option>
  <option value="Diploma" >Diploma</option>
</select>
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
                                    </div>

                                     <div class="form-outline mb-4">PAN Card proof Upload:
                                        
                                         <input type="file" name="proof" class="form-control" id="proof" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return Validp6();"/></td>
</tr>
<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("proof").value = "";
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
                                    </div>
                                
                                        <div class="form-outline mb-4">10th Certificate:
                                        
                                         <input type="file" name="edu1" class="form-control" id="edu1" required onchange="return filevalids();"/></td>
</tr> 
 <span id="msg14" style="color:red;"></span>
            
<script>
function filevalids() 
{
    var val = document.getElementById('edu1').value;

    if (!val.match(/([a-zA-Z0-9\s_\\.\-:])+(.doc|.docx|.pdf)$/)) 
    {
        document.getElementById('msg14').innerHTML="Please Upload pdf format only";
    
        
                    document.getElementById('edu1').value = "";
        return false;
    }
document.getElementById('msg14').innerHTML=" ";
    return true;
}

</script>
                                    </div>
                                 

                                     <div class="form-outline mb-4">12th Certifiacte Upload:
                                        
                                         <input type="file" name="edu2" class="form-control" id="edu2"  required onchange="return filevalidss();"/></td>
</tr>
  <span id="msg15" style="color:red;"></span>
            
<script>
function filevalidss() 
{
    var val = document.getElementById('edu2').value;

    if (!val.match(/([a-zA-Z0-9\s_\\.\-:])+(.doc|.docx|.pdf)$/)) 
    {
        document.getElementById('msg15').innerHTML="Please Upload pdf format only";
    
        
                    document.getElementById('edu2').value = "";
        return false;
    }
document.getElementById('msg15').innerHTML=" ";
    return true;
}

</script>
               
                                    </div>
                                     <div class="form-outline mb-4">Degree Certificate/other:
                                        
                                         <input type="file" name="edu3" class="form-control" id="edu3" required onchange="return filevalidsss();"/></td>
</tr>
  <span id="msg16" style="color:red;"></span>
            
<script>
function filevalidsss() 
{
    var val = document.getElementById('edu3').value;

    if (!val.match(/([a-zA-Z0-9\s_\\.\-:])+(.doc|.docx|.pdf)$/)) 
    {
        document.getElementById('msg16').innerHTML="Please Upload pdf format only";
    
        
                    document.getElementById('edu3').value = "";
        return false;
    }
document.getElementById('msg16').innerHTML=" ";
    return true;
}

</script>
               
               
                                    </div>  
                                                                     <div class="form-outline mb-4">Experience Certificate Upload:
                                        
                                         <input type="file" name="exp" class="form-control" id="exp" required onchange="return filevalidssss();"/></td>
</tr>
  <span id="msg17" style="color:red;"></span>
            
<script>
function filevalidssss() 
{
    var val = document.getElementById('exp').value;

    if (!val.match(/([a-zA-Z0-9\s_\\.\-:])+(.doc|.docx|.pdf)$/)) 
    {
        document.getElementById('msg17').innerHTML="Please Upload pdf format only";
    
        
                    document.getElementById('exp').value = "";
        return false;
    }
document.getElementById('msg17').innerHTML=" ";
    return true;
}

</script>
               
                                    </div>
                                                                 <div class="form-outline mb-4">Upload Scan Copy Of Signature:
                                        
                                         <input type="file" name="sign" class="form-control" id="sign" accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required onchange="return filevalidsssss();"/></td>
</tr>
  <span id="msg18" style="color:red;"></span>
            
<script>
function filevalidsssss() 
{
    var val = document.getElementById('sign').value;

    if (!val.match(/([a-zA-Z0-9\s_\\.\-:])+(.png|.jpg|.gif)$/)) 
    {
        document.getElementById('msg18').innerHTML="Please Upload pdf format only";
    
        
                    document.getElementById('sign').value = "";
        return false;
    }
document.getElementById('msg18').innerHTML=" ";
    return true;
}

</script>
               
                                    </div>
                                                 
                                   
                                    
                                    

                                
                                
                                 

                                
                                    <div class="form-outline mb-4" >password:
                                        <input type="password" class="form-control "
                                          name="pwd" type="password" class="input-box" id="pwd" title="Password" onchange="return Validp();" placeholder="Enter Password"required>




                                            <span id="msg6" style="color:red;"></span>
<script>        
function Validp() 
{
    var val = document.getElementById('pwd').value;

    if (!val.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)) 
    {
        document.getElementById('msg6').innerHTML="password should contain 6 to 16 valid characters  at least one number and one Special Character";
        
             document.getElementById('pwd').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}

</script>
                                    </div>
                                   


 <div class="form-outline mb-4">Repeat Password:
                                        <input type="password" class="form-control "
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

                               

                                    
<div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" name="submit" value="Register" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                   
                    <a class="small" href="index.php">Back To Home Page</a> <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2" style="color:black;">Here to Login</p>
                    <button type="button" class="btn btn-outline-danger"> <a class="small" href="login.php">LOGIN</a></button>
                  </div>
                  </div>




                                
 
                                  





                                

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">


               
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">

                 <strong><h4 class="mb-4">Welcome to Executive Officer Registration</h4></strong>
                <img src="img/icon3.jpg"
                    style="width: 300px;" alt="logo">
               
               

                
               
              </div>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>

</html>