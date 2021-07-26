<?php include('upateinfo.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" media="screen" type="text/css">
    <title>UpdateInfo</title>
    <style>
        body{
              background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
        }
    </style>
   
  </head>
  <body class="Update">
 <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: black;">
      <a class="navbar-brand col-md-10" href="userpanel.html">Books Store</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="userpanel.html">Home <span class="sr-only">(current)</span></a>
          </li>
          </div>
    </nav>
 <div class="container-fluid">
        <div class="py-5 text-center">
         
          <h2>Update Info</h2>
       
        </div>
      
        <div class="row">
       
          </div>
          <div class="RegisterForm">
          <div class="col-md-8 order-md-1">
              <span class="Success"><?= $success ?></span>
         <form id="form" class="needs-validation" novalidate="" method="POST" action="<?= $_SERVER['PHP_SELF']; ?>" >
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="name">First name</label>
                  <input type="text" class="form-control" tabindex="1" id="name" placeholder="First Name" value="<?= $name ?>" name="name" >
                  
                  <span class="error"> <?= $n_error ?> </span>
                  
                </div>
                <div class="col-md-6 mb-3">
                  <label for="lname">Last name</label>
                  <input type="text" class="form-control" id="lname" placeholder="Last Name" value="<?= $lname ?>" name="lname">
                  <span class="error"> <?= $n1_error ?> </span>
                </div>
              </div>
           <div class="mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $email ?>" placeholder="you@example.com">
                <span class="error"><?= $n2_error ?> </span>
              </div>
      
              <div class="mb-3">
                <label for="password">Password</label>
                 <div class="form-label-group">
                <input type="password" id="password" class="form-control" name="password" value="<?= $password ?>" placeholder="Password">
                <span class="error"><?= $n3_error ?> </span>
        </div>
              </div>
      
              <div class="mb-3">
                <label for="phone">Phone </label>
                <input type="phone" class="form-control" id="phone" name="phone" value="<?= $phone ?>" placeholder="Phone Number">
                <span class="error"><?= $n4_error ?> </span>
              </div>
      
             <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" name="register" type="submit">Update</button>
            </form>
          </div>
        </div>
        </div>
    
      
        <footer class="my-5 pt-5 text-muted text-center text-small">
          <p class="mb-1">© 2017-2020 Books&Softwares</p>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
          </ul>
        </footer>
      

   
  </body>
</html>