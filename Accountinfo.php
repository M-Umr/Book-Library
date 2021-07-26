<?php 
    session_start();
    $email=$_SESSION['email'];
    $password=$_SESSION['pass'];
    $servername = "localhost";
    $username = "root";
    //$password = "password";
    $dbname = "test";
    //DB Connection
    $conn = new mysqli($servername, $username,"", $dbname);
    if ($conn->connect_error) {
      echo "Failed to connect to MySQL: " . $conn -> connect_error;
      exit();
    }
    $query="Select * From testing where email='$email'";
    if($result = $conn -> query($query)){
    }
    if($row=mysqli_fetch_row($result)){
    }
    
?>

<!--HTML Code-->
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


.tablee  {
  
  text-align:center;
  font-size:30px;
  color:white;
  margin-left:25%;
  margin-top:15%;
 font-family:Courier New;
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
<form>
<table class="tablee">
    <tbody class="table1">
    <tr>
    <td>Firstname:<?php  echo $row[1]; ?>;</td>
    </tr>
    <tr>
    <td>Lastname:<?php  echo $row[2]; ?>;</td>
    </tr>
    </tr>
    <td>Email:<?php  echo $email; ?>;</td>
    </tr>
    </tr>
    <td>Password:<?php  echo $password; ?>;</td>
    </tr>
    <tr>
    <td>Phone No:<?php  echo $row[5]; ?>;</td>
    </tr>

</tbody>
</table>
</form>
</body>
</html>


