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

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<script type="text/javascript">
  window.history.forward();
  function noBack() {
      window.history.forward();
  }
</script>
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
<body class="bg-gradient-primary">

   <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/logo.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1"></h4>
                </div>

                <form class="user" method="POST" action="login_action.php" id="" >



                  <h2 style="text-align: center; color: #d8363a;">Login</h2>
<div align="center" style="color:red;"><?php
    if(isset($_GET['error'])) echo $_GET['error'];
    ?></div>
                  <div class="form-outline mb-4"> 
                   <label class="form-label" for="form2Example11">Username</label>
                    <input type="email" class="form-control "
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." onchange="return Validataemail();" name="email" required> 

                                        </div>

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

                  <div class="form-outline mb-4"> <label class="form-label" for="form2Example22">Password</label>
                    <input type="password" id="form2Example22"  name="pass" class="form-control"  placeholder="Enter your Password" required >
                   
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" name="submit" value="LOGIN" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                   
                   <a class="small" href="index.php">Back To Home Page</a>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-danger"> <a class="small" href="register.php">Create New</a></button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Welcome to Login Page</h4>
                <img src="img/icon3.jpg"
                    style="width: 300px;" alt="logo">
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