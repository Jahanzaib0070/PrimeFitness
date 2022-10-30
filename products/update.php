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


$id=$_GET['updateid'];
$qry="SELECT * from `products` WHERE id='".$id."'";
$result=$con->query($qry);
$row=mysqli_fetch_assoc($result);
$productname= $row['productname'];
$manufacturer= $row['manufacturer'];
$expiry= $row['expiry'];
$batchno= $row['batchno'];
$retail= $row['retail'];
$cost= $row['cost'];
$availability= $row['availability1'];
$size= $row['size'];

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $productname= $_POST['productname'];
    $manufacturer= $_POST['manufacturer'];
    $expiry= $_POST['expiry'];
    $batchno= $_POST['batchno'];
    $retail= $_POST['retail'];
    $cost= $_POST['cost'];
    $availability= $_POST['availability'];
    $size= $_POST['size'];

    //INSERT QUERY
    $qry= "UPDATE `products` set productname='".$productname."', manufacturer='".$manufacturer."', expiry='".$expiry."', batchno='".$batchno."', retail='".$retail."', cost='".$cost."', availability1='".$availability."', size='".$size."' WHERE id='".$id."'";
    //execute query
   
    $res= $con->query($qry);

    if($res)
    {
        header("location:display.php");
    }
    else{
        echo "Records not Inserted";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="../style.css">
    <title>Add a product</title>
</head>
<body>
    <div class="update">
        <div class="container">
            <>
            <div class="form d-flex flex-column container p-5">
                <h1 >PRODUCT FORM</h1><br>
                <form action="update.php" method="post">
                <div >
                        <label for="productname"  >Product Name:</label>
                    </div>
                    <div>
                        <input type="text"  name="productname" value=<?php echo $productname;?> id="productname" required><br><br>
                    </div>
                    <div >
                        <label for="manufacturer" >Manufacturer:</label>
                    </div>
                    <div>
                        <input type="text"  name="manufacturer" value=<?php echo $manufacturer;?> id="manufacturer" required> <br><br>
                    </div>
                    <div >
                        <label for="expiry" >Expiry date:</label>
                    </div>
                    <div>
                        <input type="date"  name="expiry" value=<?php echo $expiry;?> id="expiry" required> <br><br>
                    </div>
                    <div >
                        <label for="batchno" >Batch No:</label>
                    </div>
                    <div>
                        <input type="number"  name="batchno" value=<?php echo $batchno;?> id="batchno" value="1000" min="1000" max="9999" step="2" required> <br><br>
                    </div>
                    <div >
                        <label for="retail" >Retail price:</label>
                    </div>
                    <div>
                        <input type="text"  name="retail" value=<?php echo $retail;?> id="retail" required> <br><br>
                    </div>
                    <div >
                        <label for="cost" >Cost price:</label>
                    </div>
                    <div>
                        <input type="text"  name="cost" id="cost" value=<?php echo $cost;?> required><br><br>
                    </div>
                    
                    
                    <div>
                        <label for="availability">Availability:</label>
                        <div class="form-check" >
                            <input class="form-check-input" type="radio"  id="availability1" name="availability" value="available"  checked>
                            <label class="form-check-label" for="availability1">
                                Available
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  id="availability2" name="availability" value="sold out" >
                            <label class="form-check-label" for="availability2">
                                Sold out
                            </label>
                        </div>
                    </div>
                    <div >
                        <label for="size" >Size:</label>
                    
                    
                        <select class="form-select form-select-round form-select-sm" name="size" aria-label=".form-select-sm example">
                            <option selected>Select size</option>
                            <option value="S">Small</option>
                            <option value="M">Medium</option>
                            <option value="L">Large</option>
                        </select> <br><br>
                    </div>
                    <div >
                        <button class="btn btn-success"  name="submit">Submit</button>
                    </div>
                </form>
            </div>
            </>
        </div>
    </div>
    
</body>
</html>