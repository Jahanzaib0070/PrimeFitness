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
$qry="SELECT * from `employee` WHERE id='".$id."'";
$result=$con->query($qry);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$hiredate=$row['hiredate'];
$department=$row['department'];
$sales=$row['sales'];
$salary=$row['salary'];
$commission=$row['commission'];

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $hiredate= $_POST['hiredate'];
    $department= $_POST['department'];
    $sales= $_POST['sales'];
    $salary= $_POST['salary'];
    $commission= $_POST['commission'];

    //INSERT QUERY
    $qry= "UPDATE `employee` set firstname='$fname', lastname='".$lname."', email='".$email."', hiredate='".$hiredate."', department='".$department."', sales='".$sales."', salary='".$salary."', commission='".$commission."' WHERE id='".$id."'";
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
    <title>EMPLOYEE</title>
</head>
<body>
    <div class="update">
        <div class="container">
            <>
            <div class="form d-flex flex-column container p-5">
                <h1>EMPLOYEE FORM</h1><br>
                <form action="update.php" method="post">
                    <div>
                        <label for="firstname" >First Name:</label>
                    </div>
                    <div>
                        <input type="text" name="firstname" placeholder="Enter first name here" id="firstname" value=<?php echo $firstname;?>  required><br><br>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                    </div>
                    <div>
                        <label for="lastname">Last Name:</label>
                    </div>
                    <div>
                        <input type="text" name="lastname" placeholder="Enter last name here" id="lastname" value=<?php echo $lastname;?> required> <br><br>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Enter email here" id="email" value=<?php echo $email;?> required> <br><br>
                    </div>
                    <div>
                        <label for="hiredate">Hire Date:</label>
                    </div>
                    <div>
                        <input type="date" name="hiredate" id="hiredate" placeholder="Enter the date joined" value=<?php echo $hiredate;?> required><br><br>
                    </div>
                    <div>
                        <label for="department">Department:</label>
                    </div>
                    <div>
                        <input type="text" name="department" placeholder="Enter department here" id="department" value=<?php echo $department;?> required> <br><br>
                    </div>
                    <div>
                        <label for="sales">Sales:</label>
                    </div>
                    <div>
                        <input type="number" name="sales" placeholder="Enter registered sales here" id="sales" min="0" max="12" step="1" value=<?php echo $sales;?> required> <br><br>
                    </div>
                    <div>
                        <label for="salary">Salary:</label>
                    </div>
                    <div>
                        <input type="text" name="salary" placeholder="Enter salary here" id="salary" value=<?php echo $salary;?> required> <br><br>
                    </div>
                    <div>
                        <label for="commission">Commission:</label>
                    </div>
                    <div>
                        <input type="text" name="commission" placeholder="Enter commission here" id="commission" value=<?php echo $commission;?> required> <br><br>
                    </div>
                    <div>
                        <button class="btn btn-success" name="submit">Update</button>
                    </div>
                </form>
            </div>
            </>
        </div>
    </div>
    
</body>
</html>