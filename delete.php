<?php 

session_start();

    $email=$_SESSION['email'];
    $password=$_SESSION['pass'];
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "test";  
    $conn = new mysqli($servername, $username,"", $dbname);
    
    if(isset($_POST['yes']))
    {
    $query="DELETE FROM testing WHERE email='$email'";
    $query_run=mysqli_query($conn,$query);
    if($query_run==true)
    {
        //echo ("<a href="login.html">login</a>");
    }
    }
    
?>
<html>
<head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
<style>
body{
    background: linear-gradient(120deg,#2980b9,#8e44ad);
    }
    body h1{
        padding-top:15%;
        text-align:center;
    }
    .btn{
        padding-left:5%;
        padding-right:5%;
        color:white;
    }
    .btn a{
        color:white;
    }
    .Button{
        padding-left:40%;
    }

</style>
</head>
<body>
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
    <h1>Do You Want To Delete Your Account</h1>
    <br>
    <div class="Button">
        <form method="POST">
    <button class="btn btn-primary" type="submit" name="yes">YES</button>
     <button  class="btn btn-primary" type="submit" name="no" ><a href="userpanel.html">NO</a></button>
     </form>
</div>
</body>
</html>


