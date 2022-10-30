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
    <title>Add a student</title>
</head>
<body>
    <div class="user">
        <div class="container">
            <>
            <div class="form d-flex flex-column container p-5">
                <h1 >STUDENT FORM</h1><br>
                <form action="insert.php" method="post">
                    <!-- <div class="form1"> -->
                        <div >
                            <label for="firstname"  >First Name:</label>
                        </div>
                        <div>
                            <input type="text"  name="firstname" placeholder="Enter first name here" id="firstname"required><br><br>
                        </div>
                        <div >
                            <label for="lastname" >Last Name:</label>
                        </div>
                        <div>
                            <input type="text"  name="lastname" placeholder="Enter last name here" id="lastname" required> <br><br>
                        </div>
                        <div >
                            <label for="email" >Email:</label>
                        </div>
                        <div>
                            <input type="text"  name="email" placeholder="Enter email here" id="email" required> <br><br>
                        </div>
                        <div >
                            <label for="dob" >Date of Birth:</label>
                        </div>
                        <div>
                            <input type="date"  name="dob" id="dob" placeholder="Date of birth" required><br><br>
                        </div>
                        <div >
                            <label for="semester" >Semester:</label>
                        </div>
                        <div>
                            <input type="number"  name="semester" placeholder="Enter last semester here" id="semester" min="0" max="12" step="1" value="0" required> <br><br>
                        </div>
                        <div >
                            <label for="course" >Course Name:</label>
                        </div>
                        <div>
                            <input type="text"  name="course" placeholder="Enter registered course here" id="course" required> <br><br>
                        </div>
                        <div >
                            <label for="gpa" >Gpa:</label>
                        </div>
                        <div>
                            <input type="text"  name="gpa" placeholder="Enter gpa here" id="gpa" required> <br><br>
                        </div>
                        <div >
                            <label for="grade" >Grade:</label>
                        </div>
                        <div>
                            <input type="text"  name="grade" placeholder="Enter grade here" id="grade" required> <br><br>
                        </div>
                        <div >
                            <button class="btn btn-success"  name="submit">Submit</button>
                        </div>
                    <!-- </div> -->
                    
                </form>
            </div>
            </>
        </div>
    </div>
    
</body>
</html>