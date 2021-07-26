<?php include('register.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" media="screen" type="text/css">
    <script type="text/javascript" src="ajaxfile.js"></script>
    <title>Registeration</title>
   
  </head>
  <body class="Registerr">
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0d0d0e;">
        <a class="navbar-brand" href="index.html">Books Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login1.php">Login</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="registerr.php">Register</a>
            </li>
            
          </ul>
         
        </div>
   </nav>
    
    <div class="container-fluid">
        <div class="py-5 text-center">
         
          <h2>Registration Form</h2>
          <p class="lead">Enter Your Information For Registration</p>
        </div>
      
        <div class="row">
       
          </div>
          <div class="RegisterForm">
          <div class="col-md-8 order-md-1">
              <span class="Success">
                  <?= $success ?>
                </span>
              <span class="Success"><?= $loginn ?>
                 
                </span>
         <form id="form" class="needs-validation" novalidate="" method="POST" >
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name">First name</label>
                  <input type="text" class="form-control" tabindex="1" id="fname" placeholder="First Name" name="fname" >
                  
                  <span class="error"> <?= $n_error ?> </span>
                  
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname" >
                  <span class="error"> <?= $n1_error ?> </span>
                </div>
              </div>
           <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="inputEmailid" name="inputEmailid" placeholder="you@example.com" >
                <span class="error"><?= $n2_error ?> </span>
              </div>
      
              <div class="mb-3">
                <label for="password">Password</label>
                 <div class="form-label-group">
                <input type="password" id="pass" class="form-control" name="inputPass" placeholder="Passowrd" >
                <span class="error"><?= $n3_error ?> </span>
        </div>
              </div>
      
              <div class="mb-3">
                <label for="phone">Phone </label>
                <input type="phone" class="form-control" id="phone" name="inputPhone" value="<?= $phone ?>" placeholder="Phone Number" >
                <span class="error"><?= $n4_error ?> </span>
              </div>
      
             <hr class="mb-4">
              <button id="register_button" class="btn btn-primary btn-lg btn-block" name="register" type="submit">Register</button>
              </br>
              <span style="color:black;"><h6>If already have an account then you can move to Login Page:</h6></span>
              <button class="btn btn-primary btn-lg btn-block" name="login" type="submit"><a href="login1.php" style="color:white;">Login</a></button>
            </form>
          </div>
        </div>
        </div>
    
      
        <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">© 2017-2021 Books Store</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </footer>
      

   
  </body>
</html>