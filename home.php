<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome Code -->
    <script src="https://kit.fontawesome.com/483e10ca4c.js" crossorigin="anonymous"></script>
    <!-- animation link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Google Fonts Link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong|Audiowide|Sofia|Poppins|Aldrich">
    <!-- external css link -->
    <link rel="stylesheet" href="./homestyle.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Prime Fitness | Dare to be great</title>
   
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark  fixed-top">
        <a href="home.php" 
        class="navbar-brand">
        <i class="fa-solid fa-dumbbell"></i>
        <strong>PRIME FITNESS</strong>
        </a>
        
        <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <!-- <a class="nav-link" href="login.php"><img class="loginicon" src="./icon6.png" alt=""></a> -->

                <li class="nav-item active">
                    <a class="nav-link" href="home.php">HOME</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        MENU
                    </a>
                    <ul class="dropdown-menu animated fadeInDown" style="animation-delay: 0.5s tranform: 0.2s">
                        <li><a class="dropdown-item" href="./students/display.php">Students</a></li>
                        <li><a class="dropdown-item" href="./employee/display.php">Employees</a></li>
                        <li><a class="dropdown-item" href="./products/display.php">Products</a></li>
                    </ul>
                </li>

              
                
                
        
                <li class="nav-item active">
                    <a class="nav-link" href="" >SERVICES</a>
                </li>
            
                <li class="nav-item active">
                    <a class="nav-link" href="">CONTACT</a>
                </li>

                <li class="nav-item active">
                    
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">ABOUT</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user"></i></a>
                    <ul class="dropdown-menu animated fadeInDown" style="animation-delay: 0.5s tranform: 0.2s">
                        <li><a href="login.php" class="dropdown-item">Login</a></li>
                        <li><a href="logout.php" class="dropdown-item">Logout</a></li>
                    </ul>
                </li>
                <!-- <button class="btn btn-dark btn-sm">
                    <a href="logout.php" class="text-light text-decoration-none" ><img class="logouticon d-inline-block align-top" src="./icon5.png" width="40" height="40"></a>
                </button> -->
            </ul>


        </div>
    
    </nav>
    
    <section id="section-1">
        <div id="mainpage" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainpage" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainpage" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainpage" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#mainpage" data-bs-slide-to="3"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="overlay">

                </div>
                <div class="carousel-item active">
                    <img src="./fitness11.jpg" alt="Los Angeles" class="d-block w-100">
                    <div class="carousel-caption">
                        <h4 class="animated fadeInLeft" style="animation-delay: 1s">BECOME FITTER, <span class="specific-color">STRONGER</span> <br>AND MORE CONFIDENT</h4>
                        <p class="animated fadeInLeft" style="animation-delay: 1s">Get in best shape of your life with your best fitness partner.</p>
                        <a class="animated bounceInUp" style="animation-delay: 2s" href="">GET INFO</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./fitness12.jpg" alt="Chicago" class="d-block w-100">
                    <div class="carousel-caption">
                        <h4 class="animated fadeInLeft" style="animation-delay: 1s">CHALLENGE YOUR <span class="specific-color">LIMITS<span></h4>
                        <p class="animated fadeInLeft" style="animation-delay: 1s">Get in best shape of your life with your best fitness partner.</p>
                        <a class="animated bounceInUp" style="animation-delay: 2s" href="">GET INFO</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./fitness13.jpg" alt="New York" class="d-block w-100">
                    <div class="carousel-caption">
                        <h4 class="animated fadeInLeft" style="animation-delay: 1s">ITS TIME TO PUT<br> <span class="specific-color">FITNESS</span> FIRST</h4>
                        <p class="animated fadeInLeft" style="animation-delay: 1s">Get in best shape of your life with your best fitness partner.</p>
                        <a class="animated bounceInUp" style="animation-delay: 2s" href="">GET INFO</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./fitness14.jpg" alt="New York" class="d-block w-100">
                    <div class="carousel-caption">
                        <h4 class="animated fadeInLeft" style="animation-delay: 1s">TRAIN YOURSELF TO <BR>BE <span class="specific-color">PERFECT</span></h4>
                        <p class="animated fadeInLeft" style="animation-delay: 1s">Get in best shape of your life with your best fitness partner.</p>
                        <a class="animated bounceInUp" style="animation-delay: 2s" href="">GET INFO</a>
                    </div>
                </div>
            </div>
            
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#mainpage" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#mainpage" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>

    <section id="section-2">
        <div class="mainpage-2" >
            <div class="row">
                <div class="col-4 " data-aos="fade-up"  data-aos-duration="1000"  >
                    <img src="./mainpage-2-fitness.jpg" alt="">
                </div>
                <div class="col-4 " >
                <h6>INFORMATION ABOUT US</h6>
                    <h1>PRIME FITNESS A <span class="specific-color">CROSSFIT</span> WORKOUT TRAINING CENTER</h1>
                    <p><strong>MOTIVATION:</strong> If you find workouts tough and struggle to motivate yourself to start, or find it hard to keep pushing through a difficult new workout, a personal trainer provides plenty of motivation to get you in the fitness center and keep going toward your goals. </p>
                    <ul>
                        <li>MEN FITNESS AND WORKOUT</li>
                        <li>WOMEN FITNESS AND WORKOUT</li>
                        <li>PERSONAL TRAININGS</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    
    <section id="section-3">
        <div class="mainpage-3">
            <div class="text">
                <p>WHY CHOOSE US?</p>
                <h1>PUSH YOUR LIMITS FORWARD</h1>
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-3">
                        <i class="fa-solid fa-heart"></i>
                        <h2>HEALTHY NUTRITION PLAN</h2>
                    </div>
                    <div class="col-3">
                        <i class="fa-solid fa-dumbbell"></i> 
                        <h2>MODERN EQUIPMENT</h2>  
                    </div>
                    <div class="col-3">
                        <i class="fa-solid fa-ranking-star"></i>
                        <h2>PROFESSIONAL TRAINING PLAN</h2>
                    </div>
                    <div class="col-3">
                        <i class="fa-solid fa-weight-hanging"></i>
                       <h2>UNIQUE TO YOUR NEEDS</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- <section id="section-3">
        <div class="price-table">
            <div class="row">
                Free Tier
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited
                                    Private Projects</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated
                                    Phone Support</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain
                                </li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                                    Reports</li>
                            </ul>
                            <div class="d-grid">
                            <a href="#" class="btn btn-primary text-uppercase">Button</a>
                            </div>
                        </div>
                    </div>
                </div>
                Plus Tier
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                        <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
                        <hr>
                        <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                        <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                            Reports</li>
                        </ul>
                        <div class="d-grid">
                        <a href="#" class="btn btn-primary text-uppercase">Button</a>
                        </div>
                    </div>
                    </div>
                </div>
                Pro Tier
                <div class="col-lg-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                        <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                        <hr>
                        <ul class="fa-ul">
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong>
                        </li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free
                            Subdomains</li>
                        <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                        </ul>
                        <div class="d-grid">
                        <a href="#" class="btn btn-primary text-uppercase">Button</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <footer>
        <div class="footer">
            <div class="footer-1">
                <div class="row">
                    <div class="col-3">
                        <a href="home.php" 
                            class="navbar-brand">
                            <i class="fa-solid fa-dumbbell"></i>
                            <strong>PRIME FITNESS</strong>
                        </a>
                    </div>
                    <div class="col-3">
                        <ul class="list" style="list-style-type:none;">
                            <li><a href="">SERVICES</a></li>
                            <li><a href="">GALLERY</a></li>
                            <li><a href="">ABOUT US</a></li>
                            <li><a href="">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <div class="footer-2">
                <div class="sociologo">
                    <a href="www.facebook.com/jahanzaaib0"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    <a href=""><i class="fa-brands fa-google"></i></a>
                </div>
                <div class="copyright">
                    <p>2022 <span>&copy;</span>Copyright Prime Fitness LLC. All rights reserved. </p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>