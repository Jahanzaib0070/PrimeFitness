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

if(isset($_POST['submit'])){
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $hiredate= $_POST['hiredate'];
    $department= $_POST['department'];
    $sales= $_POST['sales'];
    $salary= $_POST['salary'];
    $commission= $_POST['commission'];

    //INSERT QUERY
    $qry= "INSERT into `employee` (`firstname`,`lastname`,`email`,`hiredate`,`department`,`sales`,`salary`,`commission`) VALUES ('$fname','$lname','$email','$hiredate','$department','$sales','$salary','$commission')";

    //execute query
    $exe= $con->query($qry);
    if($exe)
    {
        header("location:display.php");
    }
    else{
        echo "Records not Inserted";
    }
}

$con->close();

?>