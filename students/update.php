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
$qry="SELECT * from `students` WHERE id='".$id."'";
$result=$con->query($qry);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$dob=$row['dob'];
$semester=$row['semester'];
$course=$row['course'];
$gpa=$row['gpa'];
$grade=$row['grade'];

if(isset($_POST['submit'])){
    $id= $_POST['id'];
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email= $_POST['email'];
    $dob= $_POST['dob'];
    $semester= $_POST['semester'];
    $course= $_POST['course'];
    $gpa= $_POST['gpa'];
    $grade= $_POST['grade'];

    //INSERT QUERY
    $qry= "UPDATE `students` set firstname='$fname', lastname='".$lname."', email='".$email."', dob='".$dob."', semester='".$semester."', course='".$course."', gpa='".$gpa."', grade='".$grade."' WHERE id='".$id."'";
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
    <title>Add a student</title>
</head>
<body>
    <div class="update">
        <div class="container">
            <>
            <div class="form d-flex flex-column container p-5">
                <h1 >STUDENT FORM</h1><br>
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
                        <input type="text" name="email" placeholder="Enter email here" id="email" value=<?php echo $email;?> required> <br><br>
                    </div>
                    <div>
                        <label for="dob">Date of Birth:</label>
                    </div>
                    <div>
                        <input type="date" name="dob" id="dob" placeholder="Date of birth" value=<?php echo $dob;?> required><br><br>
                    </div>
                    <div>
                        <label for="semester">Semester:</label>
                    </div>
                    <div>
                        <input type="number" name="semester" placeholder="Enter last semester here" id="semester" min="0" max="12" step="1" value=<?php echo $semester;?> required> <br><br>
                    </div>
                    <div>
                        <label for="course">Course Name:</label>
                    </div>
                    <div>
                        <input type="text" name="course" placeholder="Enter registered course here" id="course" value=<?php echo $course;?> required> <br><br>
                    </div>
                    <div>
                        <label for="gpa">Gpa:</label>
                    </div>
                    <div>
                        <input type="text" name="gpa" placeholder="Enter gpa here" id="gpa" value=<?php echo $gpa;?> required> <br><br>
                    </div>
                    <div>
                        <label for="grade">Grade:</label>
                    </div>
                    <div>
                        <input type="text" name="grade" placeholder="Enter grade here" id="grade" value=<?php echo $grade;?> required> <br><br>
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