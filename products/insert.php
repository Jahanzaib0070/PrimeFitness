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
    $productname= $_POST['productname'];
    $manufacturer= $_POST['manufacturer'];
    $expiry= $_POST['expiry'];
    $batchno= $_POST['batchno'];
    $retail= $_POST['retail'];
    $cost= $_POST['cost'];
    $availability= $_POST['availability'];
    $size= $_POST['size'];

    //INSERT QUERY
    $qry= "INSERT into `products` (`productname`,`manufacturer`,`expiry`,`batchno`,`retail`,`cost`,`availability1`,`size`) VALUES ('$productname','$manufacturer','$expiry','$batchno','$retail','$cost','$availability','$size')";

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