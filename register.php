<?php
    $localhost= "localhost";
    $dbuser= "root";
    $dbpassword= "";
    $dbname= "crud_operations";
    //CONNECTION ESTABLISH
    $con= new mysqli($localhost, $dbuser, $dbpassword, $dbname);
    
    if($con->connect_error){
        die ("Connection Failed".$con->connect_error);
    }

    $username= $_POST['username'];
    $email= $_POST['email'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    
    $qry= "INSERT INTO `login` (`username`,`email`, `password`, `re-password`) VALUES ('$username','$email','$password','$repassword')";
    $result=$con->query($qry);
    if($result){
        echo "You have registered successfully!";
        echo "<br>";
        header("location:login.php");
    }else{
        echo "Not registered!";
        echo "<br>";
        echo "Please <a href='./register.html' >Sign up again</a>";
    }

?>