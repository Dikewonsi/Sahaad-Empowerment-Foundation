<?php
    include ("config.php");
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors',TRUE); 
    $errors = array();

    if(isset($_POST['login'])){        
        $username = mysqli_escape_string($conn, $_POST['username']);
        $password = mysqli_escape_string($conn, $_POST['password']);

        $sql = "SELECT * from admin where username = '$username' and password= '$password' ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {   
            while($row = mysqli_fetch_assoc($result)) {   
                $_SESSION['admin_id']=$row['id'];
                header ("location:dashboard.php");   
            }                             
        }else{
            $errors['email'] = "Incorrect username or password!";
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sahaad Empowerment Foundation">
    <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">
    <title>Sahaad Empowerment Foundation - Admin Login</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/layerslider.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color.css">
    <link rel="stylesheet" href="assets/css/loader.css">
</head>

<body>

    <div class="preloader">
		<div class="loader xy-center"></div>
	</div>

    <div id="page_wrapper" class="bg-light">
        <!--============== Header Section Start ==============-->
        <header class="header-style nav-on-top bg-white">
            <div class="main-nav">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-secondary nav-primary-hover nav-line-active">
                                <a class="navbar-brand" href="#"><img class="nav-logo" src="assets/images/logo/logo.png" style="width:200px;" height="50px;" alt="Image not found !"></a>                               
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============-->

        <!--============== Signup Form Start ==============-->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 mx-auto">
                        <div class="bg-white xs-p-20 p-30 border rounded">
                            <div class="form-icon-left rounded form-boder">
                                <h4 class="mb-4">Admin Login</h4>
                                <div>
                                    <?php
                                        if(count($errors) == 1){
                                            ?>
                                            <div class="alert alert-danger text-center">
                                                <?php
                                                foreach($errors as $showerror){
                                                    echo $showerror;
                                                }
                                                ?>
                                            </div>
                                            <?php
                                        }elseif(count($errors) > 1){
                                            ?>
                                            <div class="alert alert-danger">
                                                <?php
                                                foreach($errors as $showerror){
                                                    ?>
                                                    <li><?php echo $showerror; ?></li>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                                    <div class="row row-cols-1 g-3">
                                        <div class="col">
                                            <label class="mb-2">Username</label>
                                            <input type="text" class="form-control bg-light" name="username" value="" required="">
                                        </div>
                                        <div class="col">
                                            <label class="mb-2">Password</label>
                                            <input type="password" class="form-control bg-light" name="password" value="" required="">
                                        </div>
                                        <div class="col">
                                            <button type="submit" name="login" class="btn btn-primary mb-3">Login</button>
                                        </div>                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--============== Copyright Section End ==============-->        
    </div>

    <!-- Javascript Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/range/tmpl.js"></script>
    <script src="assets/js/range/jquery.dependClass.js"></script>
    <script src="assets/js/range/draggable.js"></script>
    <script src="assets/js/range/jquery.slider.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/paraxify.js"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>