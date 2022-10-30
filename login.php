<?php

    session_start();
    // if(isset($_SESSION['id'])){
    //     // header("location:display.php");
    //     echo "succ";
    // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Audiowide|Sofia|Poppins|Aldrich">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./style2.css">
    <title>Login page</title>
</head>

<body>
   
    <div class="main">

        <div class="login">
            <div class="form-1">
                <h1>PRIME FITNESS</h1>
                <form action="login.php" method="POST">
                    <div class="form-floating  mb-3 mt-3">
                        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="form-floating  mb-3 mt-3">
                        <input type="password" class="form-control" minlength="6" maxlength="15" id="password" placeholder="must have at least 6 characters" name="password">
                        <label for="password">Password</label>
                    </div>
                    <a href="#">Forget password?</a>
                    <button class="btn btn-primary" name="submit" >Login</button>
                    <hr>
                    <p>New Here? 
                        <a href="register.html"> Signup now </a>
                    </p>
                </form>
  
          
            </div>
            
            <div class="form-2">
                <fieldset>
                    <legend>OR</legend>
                    <div class="linkwithgoogle">
                        <img src="./images/google pic.png" alt="">
                        <a href="#">Sign in with google</a>
                    </div><br>
                    <div class="linkwithfb">
                        <img src="./images/fb.webp" alt="">
                        <a href="#">Sign in with facebook</a>
                    </div>
                </fieldset>
            </div>


        
        </div>
        
    </div>
</body>

</html>




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

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
        $qry="SELECT * FROM `login` WHERE email='$email' and password='$password' ";
        
        $result=$con->query($qry);
        $row = mysqli_fetch_assoc($result);
        if($result!=NULL){
            $_SESSION['id']=$row['id'];
            header("location:home.php");
            echo "SUCCESSFUL LOGIN";
        }else{
            echo "Invalid credentials";
            echo "<br>";
            echo "Please <a href='./registration.html' >Sign up</a>";
        }
    }


?>