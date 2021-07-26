<?php
// define variables and set to empty values
$n_error= $n1_error = $n2_error= $n3_error= $n4_error ="";
$name = $lname= $email= $password= $phone=$success=$loginn=$hash="";

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";

if(isset($_POST['register']))
{
    //echo "hello world";
    if(empty($_POST['fname']))
    {
        $n_error="First Name Required";
    }
    else
    {
        $name = test_input($_POST["fname"]);
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
    if(empty($_POST['inputEmailid']))
    {
        $n2_error="Email Required";
    }
    else
    {
        $email=test_input($_POST["inputEmailid"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $n2_error="Invalid Email Format";
        }
    }
    if(empty($_POST['inputPass']))
    {
        $n3_error="Password Required";
    }
    else
    {
        $password=test_input($_POST["inputPass"]);
        $passwor=md5($password); 
    }
    if(empty($_POST['inputPhone']))
    {
        $n4_error="Phone NO Required";
    }
    else
    {
        $phone=test_input($_POST["inputPhone"]);
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

        else
        {
            $query= "insert into testing (fname,lname,email,pass,phone) values('$name','$lname','$email','$passwor','$phone')";
            if ($conn->query($query) === TRUE)
            {
                echo '<div class="alert alert-success text-center">';
                echo "congratulations! Successfully Registered </div>";
            }
            else
            {
                echo "Error: " . $query . "<br>" . $conn->error;
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