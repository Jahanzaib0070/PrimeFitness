<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location:../login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <link rel="stylesheet" href="../style.css">
    <title>PRODUCT</title>
</head>
<body>
    <div class="user">
        <div class="container">
            <>
            <div class="form d-flex flex-column container p-5">
                <h1>PRODUCT FORM</h1><br>
                <form action="insert.php" method="post">
                    <div >
                        <label for="productname"  >Product Name:</label>
                    </div>
                    <div>
                        <input type="text"  name="productname" placeholder="Enter product name here" id="productname"required><br><br>
                    </div>
                    <div >
                        <label for="manufacturer" >Manufacturer:</label>
                    </div>
                    <div>
                        <input type="text"  name="manufacturer" placeholder="Enter manufacturer here" id="manufacturer" required> <br><br>
                    </div>
                    <div >
                        <label for="expiry" >Expiry date:</label>
                    </div>
                    <div>
                        <input type="date"  name="expiry" placeholder="Enter expiry date here" id="expiry" required> <br><br>
                    </div>
                    <div >
                        <label for="batchno" >Batch No:</label>
                    </div>
                    <div>
                        <input type="number"  name="batchno" placeholder="Enter batch no here" id="batchno" value="1000" min="1000" max="9999" step="2" required> <br><br>
                    </div>
                    <div >
                        <label for="retail" >Retail price:</label>
                    </div>
                    <div>
                        <input type="text"  name="retail" placeholder="Enter retail here" id="retail" required> <br><br>
                    </div>
                    <div >
                        <label for="cost" >Cost price:</label>
                    </div>
                    <div>
                        <input type="text"  name="cost" id="cost" placeholder="Enter cost here" required><br><br>
                    </div>
                    
                    
                    <div>
                        <label for="availability1">Availability:</label>
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