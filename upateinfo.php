<?php
// define variables and set to empty values
//user update info
$n_error= $n1_error = $n2_error= $n3_error= $n4_error ="";
$name = $lname= $email= $password= $phone=$success=$hash="";
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";

if(isset($_POST['register']))
{
    session_start();
    $emaill=$_SESSION['email'];

    if(empty($_POST['name']))
    {
        $n_error="First Name Required";
    }
    else
    {
  $name = test_input($_POST["name"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
      $n_error="Name Should Be letters or Space";
  }
    }
    if(empty($_POST['lname']))
    {
        $n1_error="Last Name Required";
    }
    else
    {
  $lname = test_input($_POST["lname"]);
  if(!preg_match("/^[a-zA-Z ]*$/",$name))
  {
      $n_error="Name Should Be letters or Space";
  }
    }
    if(empty($_POST['email']))
    {
        $n2_error="Email Required";
    }
    else
    {
        $email=test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $n2_error="Invalid Email Format";
        }
    }
    if(empty($_POST['password']))
    {
        $n3_error="Password Required";
    }
    else
    {
        $password=test_input($_POST["password"]);
        $passwor=md5($password);
        
          
       
    }
    if(empty($_POST['phone']))
    {
        $n4_error="Phone NO Required";
    }
    else
    {
        $phone=test_input($_POST["phone"]);
       # if(!preg_match("	
#(^1300\d{6}$)|(^1800|1900|1902\d{6}$)|(^0[2|3|7|8]{1}[0-9]{8}$)|(^13\d{4}$)|(^04\d{2,3}\d{6}$)",$phone))
      #  {
         #   $n4_error="Invalid Phone Format";
        #}
    }
    if($n_error=='' and $n1_error=='' and $n2_error==''  and $n3_error=='' and $n4_error=='')
    {
        $conn = new mysqli($servername, $username,"", $dbname);

        if(!$conn)
        {
            echo "Connection To The Database Failed";
        }

        else{
            $query="UPDATE testing SET fname='$name',lname='$lname',email='$email',pass='$passwor',phone='$phone' WHERE email='$emaill' ";
            $result=mysqli_query($conn,$query);
            if($result==true)
            {  
                $_SESSION['email']=$email;
                $success="Data Updated Successfully";   
            }
            $conn->close();
        }
    }
 
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>