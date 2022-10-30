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
    <title>EMPLOYEE</title>
</head>
<body>
    <div class="user">
        <div class="container">
            <>
            <div class="form d-flex flex-column container p-5">
                <h1>EMPLOYEE FORM</h1><br>
                <form action="insert.php" method="post">
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
                            <input type="email"  name="email" placeholder="Enter email here" id="email" required> <br><br>
                        </div>
                        <div >
                            <label for="hiredate" >Hire Date:</label>
                        </div>
                        <div>
                            <input type="date"  name="hiredate" id="hiredate" placeholder="Enter the date joined:" required><br><br>
                        </div>
                        <div >
                            <label for="department" >Department:</label>
                        </div>
                        <div>
                            <input type="text"  name="department" placeholder="Enter department here" id="department" required> <br><br>
                        </div>
                        <div >
                            <label for="sales" >Sales:</label>
                        </div>
                        <div>
                            <input type="number"  name="sales" placeholder="Enter sales here" id="sales" min="0" max="1000" step="1" value="0" required> <br><br>
                        </div>
                        <div >
                            <label for="salary" >Salary:</label>
                        </div>
                        <div>
                            <input type="text"  name="salary" placeholder="Enter employee salary here" id="salary" required> <br><br>
                        </div>
                        <div >
                            <label for="commission" >commission:</label>
                        </div>
                        <div>
                            <input type="text"  name="commission" placeholder="Enter commission here" id="commission" required> <br><br>
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