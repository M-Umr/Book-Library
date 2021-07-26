<?php
        $email="";
        $passwor="";
        if(isset($_POST['signin'])){
            //echo "hello world";
            $email=$_POST["inputEmail"];
            $passwor=$_POST["inputPassword"];
            //echo $email;
        }
        //$email=$_POST['email'];
        //$passwor=$_POST['password'];
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "test";
      
        $conn = new mysqli($servername, $username,"", $dbname);
        if($conn->connect_error)
        {
            echo "Not Connected";
            exit();
        }
        else
        {
        if(isset($_POST['signin']))
        {
            $query="Select * From testing where email='$email' and pass='$passwor'";
            if($result=mysqli_query($conn,$query))
            {
                session_start();
                $_SESSION['email']=$email;
                $_SESSION['pass']=$passwor;
                      
                header("Location:userpanel.html");
            }

        else{
            echo "Wrong Email";
        }
    }
}


?>