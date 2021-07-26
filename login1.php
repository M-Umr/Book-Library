<?php include('login.php') ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="main.css" rel="stylesheet" media="screen" type="text/css">
    <script type="text/javascript" src="ajaxfile2.js"></script>
    <title>Login Page</title>
  </head>
  <body class="loginnpage">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #070707;">
        <a class="navbar-brand" href="index.html">Books Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span> </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login1.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registerr.php">Register</a>
            </li>
            
          </ul>
         
        </div>
      </nav>
     <div class="loginpadd">
    <form class="form-signin" novalidate="" method="POST">
        <div class="loginbackground">
        <div class="text-center mb-4">
      
          <h1 class="h3 mb-3 font-weight-normal">Login</h1>
       
        </div>
    
        <div class="form-label-group">
          <input type="email" id="inputEmail" class="form-control" name="inputEmail" placeholder="Email address" required="">
          </div>
      <br>
        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" name="inputPassword" placeholder="Password" required="">
          
        </div>
      
        <div class="checkbox mb-3">
          <label>
            
            <input type="checkbox" value="remember-me"> Remember me
             
          </label>
        </div>
        <button id="loginid" name="signin" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
        </br>
        <span style="color:black;"><h6>If you have no account then Register First:</h6></span>
        <button class="btn btn-primary btn-lg btn-block" name="register" type="submit"><a href="registerr.php" style="color:white;">Register</a></button>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">© 2017-2021</p>
        
      </form>
     </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  
  </body>
</html>