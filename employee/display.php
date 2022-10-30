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
    <title>All Employees Data</title>
</head>
<body>
    <div class="main d-flex flex-column">
    <div class="container my-5">
        <button class="btn btn-success"><a href="user.php" class="text-light text-decoration-none" >Add a employee</a>
        </button>
    </div>
    <div class="container">
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <th>ID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>EMAIL</th>
                    <th>HIRE DATE</th>
                    <th>DEPARTMENT</th>
                    <th>SALES</th>
                    <th>SALARY</th>
                    <th>COMMISSION</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    <?php
                    $qry= "SELECT * FROM `employee`";
                    $res= $con->query($qry);
                    if($res){
                        while($row=mysqli_fetch_assoc($res)){
                            $id=$row['id'];
                            $firstname=$row['firstname'];
                            $lastname=$row['lastname'];
                            $email=$row['email'];
                            $hiredate=$row['hiredate'];
                            $department=$row['department'];
                            $sales=$row['sales'];
                            $salary=$row['salary'];
                            $commission=$row['commission'];

                            echo '<tr>
                                <td>'.$id.'</td>
                                <td>'.$firstname.'</td>
                                <td>'.$lastname.'</td>
                                <td>'.$email.'</td>
                                <td>'.$hiredate.'</td>
                                <td>'.$department.'</td>
                                <td>'.$sales.'</td>
                                <td>'.$salary.'</td>
                                <td>'.$commission.'</td>
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