<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:../login.php");
    }
?>

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="../style.css">
    <title>All Products</title>
</head>
<body>
    <div class="main d-flex flex-column">
    <div class="container my-5">
        <button class="btn btn-success"><a href="user.php" class="text-light text-decoration-none" >Add a product</a>
        </button>
    </div>
    <div class="container">
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <th>ID</th>
                    <th>PRODUCT NAME</th>
                    <th>MANUFACTURER</th>
                    <th>EXPIRY DATE</th>
                    <th>BATCH NO</th>
                    <th>RETAIL PRICE</th>
                    <th>COST PRICE</th>
                    <th>AVAILABILITY</th>
                    <th>SIZE</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    <?php
                    $qry= "SELECT * FROM `products`";
                    $res= $con->query($qry);
                    if($res){
                        while($row=mysqli_fetch_assoc($res)){
                            $id=$row['id'];
                            $productname=$row['productname'];
                            $manufacturer=$row['manufacturer'];
                            $expiry=$row['expiry'];
                            $batchno=$row['batchno'];
                            $retail=$row['retail'];
                            $cost=$row['cost'];
                            $availability1=$row['availability1'];
                            $size=$row['size'];

                            echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$productname.'</td>
                                <td>'.$manufacturer.'</td>
                                <td>'.$expiry.'</td>
                                <td>'.$batchno.'</td>
                                <td>'.$retail.'</td>
                                <td>'.$cost.'</td>
                                <td>'.$availability1.'</td>
                                <td>'.$size.'</td>
                                <td class="d-flex gap-3 justify-content-center">
                                <a class="" href="update.php?updateid='.$id.'" class="text-light"><img class="image2" src="../icon2.png"/></a>
                                <a class="" href="delete.php?deleteid='.$id.'" class="text-light"><img class="image1" src="../icon1.png"/></a>
                                </td>
                            </tr>';
                        }
                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        
    </div>
    </div>
    
</body>
</html>