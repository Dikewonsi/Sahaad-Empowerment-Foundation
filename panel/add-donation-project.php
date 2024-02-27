<?php
    session_start();
    include ("config.php");
    include("myfunctions.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sahaad Empowerment Foundation - Add Donation">
    <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">
    <title>Sahaad Empowerment Foundation - Add Donation</title>
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

    <div id="page_wrapper" class="bg-light vh-100">
        <div class="container-fluid">
            <div class="row">
                <?php include('nav.php'); ?>

                <div class="col-md-8 col-lg-9 col-xl-10 px-0 dashboard-body" style="height: 100vh; overflow-y: scroll;">
                    <!--============== Header Section Start ==============-->
                        <?php include('header.php'); ?>
                    <!--============== Header Section End ==============-->

                    <!--============== Dashboard Start ==============-->
                    <div class="full-row px-40 py-30 xs-p-0">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <h3 class="my-3">Add New Donation Project</h3>
                                </div>
                            </div>
                            <form class="form-boder" action="code.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col mb-30">
                                        <div class="border rounded bg-white p-30">
                                            <h4 class="mb-4">Basic Information</h4>                                        
                                            <div class="row">
                                                <div class="col-md-6 mb-20">
                                                    <label class="mb-2 font-fifteen font-500">Project Type</label>
                                                    <select name="type" required>
                                                        <option>Select Types</option>
                                                        <option value="Food">Food</option>
                                                        <option value="Medicine">Medicine</option>
                                                        <option value="Education">Education</option>
                                                        
                                                    </select>
                                                </div>
                                                <div class="col-md-12 mb-20">
                                                    <label class="mb-2 font-fifteen font-500">Project Title</label>
                                                    <input class="form-control" name="title" required type="text">
                                                </div>
                                                <div class="col-md-12 mb-20">
                                                    <label class="mb-2 font-fifteen font-500">Description</label>
                                                    <textarea class="form-control" name="descrip" required rows="10"></textarea>
                                                </div>                                             
                                                <div class="col-md-6 mb-20">
                                                    <label class="mb-2 font-fifteen font-500">Target</label><span> (in numbers.)</span>
                                                    <input class="form-control" name="goal" type="number" required>
                                                </div>
                                                <div class="col-md-6 mb-20">
                                                    <label class="mb-2 font-fifteen font-500">Total Amount Raised</label><span> (in numbers.) Default is &#x20A6;0.00</span>
                                                    <input class="form-control" id="price" name="amount_raised" value="0" type="number">
                                                </div>                                                                                                                                             
                                            </div>                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col mb-30">
                                        <div class="border rounded bg-white p-30">
                                            <h4 class="mb-4">Project Picture</h4>                                        
                                            <div class="row">                                                                                                                                                        
                                                <div class="col-lg-3 col-md-6 mb-20">
                                                    <label class="mb-2 font-fifteen font-500">Image</label>
                                                    <input class="form-control" id="areasize" name="img_one" type="file" required>
                                                </div>                                                                                                                                                                                                
                                            </div>
                                            <div class="col-xl-12 col-lg-12 col-md-12">
                                                <button type="submit" name="add_new_donation_project" class="btn btn-primary">Add New Project</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>                            
                        </div>
                    </div>
                    <!--============== Dashboard End ==============-->

                    <!-- Footre -->
                    <div class="full-row pt-0 pb-5">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 text-center"><span>© <?php echo date('Y'); ?> SEP. All right reserved</span></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

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
    <script src="assets/js/custom.js"></script>

    <!-- AlertJS -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        <?php
        if (isset($_SESSION['message'])) {?>
            alertify.set('notifier','position', 'top-right');
            alertify.success('<?php echo $_SESSION['message']; ?>');
        <?php
            unset($_SESSION['message']);
        }
        ?>
    </script>
</body>

</html>