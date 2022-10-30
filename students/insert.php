<?php

session_start();
if(!isset($_SESSION['id'])){
    header("location:../login.php");
}

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
    $dob= $_POST['dob'];
    $semester= $_POST['semester'];
    $course= $_POST['course'];
    $gpa= $_POST['gpa'];
    $grade= $_POST['grade'];

    //INSERT QUERY
    $qry= "INSERT into `students` (`firstname`,`lastname`,`email`,`dob`,`semester`,`course`,`gpa`,`grade`) VALUES ('$fname','$lname','$email','$dob','$semester','$course','$gpa','$grade')";

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