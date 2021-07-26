<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <style>
    body {
      height: 100vh;
      width: 100%;
      background: linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);
    }

    .form-container {
      border: 1px solid #fff;
      padding: 50px 40px;
      margin-top: 8vh;
    }
  </style>
  <title>Upload Books</title>
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
            <a class="nav-link" href="view_file.php" style="color:white;">View</a>
          </li>
        </ul>
        
      </div>
  </nav>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  <div class="container-fluid bg">
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12"></div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="form-container">
          <form action="upload_Software.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-center mb-4">UPLOAD BOOKS</h1>
            <div class="input-group mb-3">
                <span class="input-group-text">Book Code</span>
                <input type="text" aria-label="First name" name = "Code"class="form-control">
            </div>
            <h6 class=" mb-3">Select Cover picture</h6>
            <div class="input-group mb-3">
              <input type="file" class="form-control" name="Cover" id="inputGroupFile02">
            </div>
            <h6 class=" mb-3">Select Book</h6>
            <div class="input-group mb-4">
              <input type="file" class="form-control" name="file" id="inputGroupFile02">
            </div>
            <div class="d-grid gap-2 mb-3">
              <button class="btn btn-primary" type="submit" name="Upload">Upload</button>
            </div>
            <div class="d-grid gap-2 mb-3">
              <button class="btn btn-primary" type="submit" name="Back"><a href="userpanel.html" style="color:white;">Back</a></button>
            </div>
          </form>
          <?php
              $servername = "localhost";
              $username = "root";
              $password = "password";
              $dbname = "test";
              $con = mysqli_connect($server,$username,"",$dbname);
              if(!$con){
                  die("connection to this database ".mysqli_connect_error());
              }
              else{
              if(isset($_POST['Upload'])){
                  $file =$_FILES['file'];//Book information
                  $type=$_POST['Code'];//Book Name
                  $count1=0;
                  $count2=0;
                  $count3=0;
                  $fileName= $_FILES['file']['name'];
                  $fileTmpName= $_FILES['file']['tmp_name'];
                  $fileSize= $_FILES['file']['size'];
                  $fileError= $_FILES['file']['error'];
                  $fileType= $_FILES['file']['type'];
          
                  $CoverName= $_FILES['Cover']['name'];
                  $CoverTmpName= $_FILES['Cover']['tmp_name'];//complete file
                  $CoverSize= $_FILES['Cover']['size'];
                  $CoverError= $_FILES['Cover']['error'];
                  $CoverType= $_FILES['Cover']['type'];
                  
                  $fileExt = explode('.',$fileName);
                  $fileActualExt = strtolower(end($fileExt));
          
                  $CoverExt = explode('.',$CoverName);
                  $CoverActualExt = strtolower(end($CoverExt));
          
                  $allowed = array('exe','zip','iso','rar','pdf');
                  if (in_array($fileActualExt,$allowed)) {
                      if($fileError === 0){
                          if($fileSize < 20000000){
                              
                              //$sql = "INSERT INTO `file_upload`.`f_upload` (`id`, `File_name`, `size`) VALUES (NULL, '$fileName', $fileSize);";
                              //$result= mysqli_query($con,$sql);
                              //$fileNameNew =uniqid('',true).".".$fileActualExt;
                              $fileDestinstion = 'Book/'.$fileName;
                              move_uploaded_file($fileTmpName,$fileDestinstion);
                              //header("location: index.php?uploadsuccess");
                          }
                          else{
                            $count=1;
                            if($count == 1){
                              echo '<div class="alert alert-danger text-center">';
                              echo "Book Size is geater than 20GB</div>";
                            } 
                          }
                      }
                      else{
                          $count2=1;
                      }
                  }
                  else{
                      $count3=1;
                      //echo '<div class="alert alert-success text-center">';
                      //echo "you11 cannot upload";
                  }
          
                  $allowed1 = array('png' ,'jpg','jpeg');
                  if (in_array($CoverActualExt,$allowed1) && $count3==0) {
                      if($CoverError === 0){
                          if($CoverSize < 5000000){
                              
                              $sql = "insert into file_upload (file_name, size, cover_page, name) VALUES ('$fileName', $fileSize,'$CoverName','$type')";
                              $result= mysqli_query($con,$sql);
                              //$fileNameNew =uniqid('',true).".".$fileActualExt;
                              $fileDestinstion1 = 'Book/'.$CoverName;
                              move_uploaded_file($CoverTmpName,$fileDestinstion1);
                              echo '<div class="alert alert-success text-center">';
                              echo "congratulation! Successfully Upload </div>";
                              header("home.html");
                              if($count1==1){
                                echo '<div class="alert alert-danger text-center">';
                                echo "Software Size geater than 20GB</div>";
                              }
                              $count1=1;
                          }
                          else{
                            
                            if($count1==1){
                              echo '<div class="alert alert-danger text-center">';
                              echo "Software and Cover Pic Size geater than 20GB</div>";
                            }
                            else{
                            echo '<div class="alert alert-danger text-center">';
                            echo "Cover Pic Size geater than 5GB</div>";
                            }
                          }
                          if($count2==1){
                            echo '<div class="alert alert-danger text-center">';
                            echo "Error! Your Software not Upload</div> Check again";
                          }
                      }
                      else{
                        if($count2==1){
                          echo '<div class="alert alert-danger text-center">';
                          echo "Error! Your Software and Cover Pic not Upload Check again</div>";
                        }
                        else{
                        echo '<div class="alert alert-danger text-center">';
                        echo "Error! Your Cover Pic not Upload Check again</div>";
                        }
                      }
                      if($count3==1){
                        echo '<div class="alert alert-danger text-center">';
                        echo "Error! Only 'exe', 'rar', 'Zip' and 'iso' Extension file Accept from Book</div>";
                      }
                  }
                  else{
                      if($count3==1 && $count1==1){
                        echo '<div class="alert alert-danger text-center">';
                        echo "Error! Only 'exe', 'rar', 'Zip' and 'iso' Extension file Accept from Software";
                        echo "'PNG','jpg' and 'jpeg' Extension file Accept in Cover Pic</div>";
                      }
                      else if($count1==0 && $count3==1){
                        echo '<div class="alert alert-danger text-center">';
                        echo "Error! Only 'exe', 'rar', 'Zip' and 'iso' Extension file Accept from Software";
                      }
                      else{
                      echo '<div class="alert alert-danger text-center">';
                      echo "Error! Only 'PNG','jpg' and 'jpeg' Extension file Accept in Cover Pic</div>";
                      }
                  }
              }
            }
            $con->close();
?>
        </div>
      </div>
    </div>
  </div>
</body>

</html>