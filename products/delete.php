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



if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $qry="DELETE from `products` WHERE id=$id";
    $res=$con->query($qry);
    if($res){
        header("location:display.php");
    }else{
        echo "Record doesn't deleted successfully!";
    }
}

?>