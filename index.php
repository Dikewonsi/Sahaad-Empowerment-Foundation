<?php
    session_start();
    include('panel/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAHAAD FOUNDATION - Non Profit Organization</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/favicon.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Mean menu css -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- Preloader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img class="" src="assets/images/preloader.svg" alt="icon">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader area end -->

    <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="header-top-wrp">
                <ul class="info">
                    <li><svg width="15" height="12" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.8748 8.50453C13.8748 9.85566 12.7757 10.953 11.4263 10.953H3.39325C2.04384 10.953 0.94475 9.85563 0.94475 8.50453V3.39322C0.944449 2.95776 1.06111 2.53021 1.28253 2.15525L5.20216 6.07488C5.78856 6.663 6.57384 6.98706 7.41059 6.98706C8.24563 6.98706 9.03091 6.663 9.61731 6.07488L13.5369 2.15525C13.7584 2.5302 13.875 2.95776 13.8747 3.39322V8.50453H13.8748ZM11.4263 0.94475H3.39325C2.836 0.94475 2.32159 1.13334 1.91009 1.44712L5.86916 5.40791C6.27897 5.81597 6.82591 6.04231 7.41059 6.04231C7.99356 6.04231 8.54053 5.81597 8.95031 5.40791L12.9094 1.44712C12.4979 1.13334 11.9835 0.94475 11.4263 0.94475ZM11.4263 0H3.39325C1.52259 0 0 1.52259 0 3.39325V8.50456C0 10.3769 1.52259 11.8978 3.39325 11.8978H11.4263C13.2969 11.8978 14.8195 10.3769 14.8195 8.50456V3.39322C14.8195 1.52256 13.2969 0 11.4263 0Z"
                                fill="white" />
                        </svg>

                        <a href="mailto:info@sahaadfoundation.net" class="ms-1">info@sahaadfoundation.net</a>
                    </li>
                    <li class="ms-4"><svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_529_224)">
                                <path
                                    d="M14.8984 10.5909C14.8735 10.5703 12.0629 8.57063 11.304 8.69297C10.9379 8.75766 10.7288 9.0075 10.3093 9.50719C10.1933 9.6463 10.0747 9.7832 9.95352 9.91781C9.68836 9.83143 9.42973 9.72616 9.17961 9.60281C7.88845 8.97422 6.84524 7.93101 6.21665 6.63984C6.0933 6.38973 5.98803 6.1311 5.90165 5.86594C6.03946 5.73984 6.23258 5.57719 6.31508 5.50781C6.81243 5.09062 7.0618 4.88109 7.12649 4.51453C7.25915 3.75562 5.24915 0.945937 5.22852 0.920625C5.13698 0.790808 5.01777 0.682933 4.87948 0.604789C4.74118 0.526645 4.58726 0.480181 4.42883 0.46875C3.61415 0.46875 1.28821 3.48563 1.28821 3.99422C1.28821 4.02375 1.33086 7.02562 5.03258 10.7911C8.79383 14.4886 11.7957 14.5312 11.8252 14.5312C12.3334 14.5312 15.3507 12.2053 15.3507 11.3906C15.3392 11.2322 15.2926 11.0783 15.2144 10.94C15.1362 10.8017 15.0282 10.6825 14.8984 10.5909ZM11.7732 13.5909C11.3663 13.5562 8.84446 13.2239 5.69446 10.1297C2.58524 6.96422 2.26133 4.43813 2.22899 4.04672C2.84342 3.08233 3.58545 2.20548 4.43493 1.44C4.45368 1.45875 4.47852 1.48688 4.5104 1.52344C5.16188 2.41276 5.72309 3.36481 6.18571 4.36547C6.03527 4.51682 5.87626 4.65939 5.70946 4.7925C5.4508 4.98959 5.21328 5.21297 5.00071 5.45906C4.96474 5.50953 4.93914 5.56663 4.92538 5.62705C4.91162 5.68748 4.90998 5.75003 4.92055 5.81109C5.01975 6.24081 5.17169 6.65662 5.3729 7.04906C6.09378 8.52939 7.28997 9.72541 8.7704 10.4461C9.16276 10.6476 9.57859 10.7997 10.0084 10.8989C10.0694 10.9097 10.132 10.9082 10.1925 10.8944C10.2529 10.8807 10.31 10.8549 10.3604 10.8188C10.6074 10.6053 10.8315 10.3669 11.0293 10.1072C11.1765 9.93188 11.3729 9.69797 11.4474 9.63188C12.4506 10.094 13.4048 10.6559 14.2956 11.3091C14.3345 11.3419 14.3621 11.3672 14.3804 11.3836C13.6149 12.2333 12.7379 12.9755 11.7732 13.59V13.5909ZM11.6007 7.03125H12.5382C12.5371 6.03703 12.1416 5.08385 11.4386 4.38083C10.7356 3.67781 9.78243 3.28237 8.78821 3.28125V4.21875C9.5339 4.21949 10.2488 4.51605 10.7761 5.04333C11.3034 5.57062 11.6 6.28556 11.6007 7.03125Z"
                                    fill="white" />
                                <path
                                    d="M13.9445 7.03125H14.882C14.8801 5.41566 14.2375 3.86677 13.0951 2.72437C11.9527 1.58198 10.4038 0.939361 8.78821 0.9375V1.875C10.1552 1.87661 11.4658 2.42038 12.4324 3.38701C13.3991 4.35365 13.9428 5.66422 13.9445 7.03125Z"
                                    fill="white" />
                            </g>
                            <defs>
                                <clipPath>
                                    <rect width="15" height="15" fill="white" transform="translate(0.819458)" />
                                </clipPath>
                            </defs>
                        </svg>

                        <a href="tel:+2348101086263" class="ms-1">+234 810 1086 263</a>
                    </li>
                </ul>
                <ul class="link-info">
                    <li><a href="https://www.facebook.com/profile.php?id=100092666330110&sk=about_contact_and_basic_info"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/sahaadfoundation?igsh=MTBqMzB4ejNkNGN3aw=="><i class="fa-brands fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area">
        <div class="container">
            <div class="header__main">
                <a href="index.php" class="logo">
                    <img src="assets/images/preloader.svg" alt="logo">
                </a>
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li>
                                <a href="about.php">About Us</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="about.php">Who We Are</a>
                                    </li>
                                    <li>
                                        <a href="our-team.php">Our Team</a>
                                    </li>
                                    <li>
                                        <a href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#0">What is Autism?</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="causes-of-autism.php">What Causes Autism?</a>
                                    </li>
                                    <li>
                                        <a href="symptoms-of-autism.php">What are the symptoms of Autism?</a>
                                    </li>
                                    <li>
                                        <a href="autism-awareness.php">Why is Autism Awareness Important?</a>
                                    </li>
                                    <li>
                                        <a href="autism-news.php">Autism in the News</a>
                                    </li>
                                    <li>                                   
                                </ul>
                            </li>                                                        
                            <li><a href="faq.php">FAQs</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="btn-two d-none d-lg-inline-block">
                    <span class=" btn-circle">
                    </span>
                    <a href="donate.php" class="btn-inner">
                        <span class="btn-text">
                            DONATE NOW
                        </span>
                    </a>
                </div>
                <div class="bars d-block d-lg-none">
                    <i id="openButton" class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </header>
    <!-- Header area end here -->

    <!-- Sidebar area start here -->
    <div id="targetElement" class="sidebar-area sidebar__hide">
        <div class="sidebar__overlay"></div>
        <a href="index.php" class="logo mb-40">
            <img src="assets/images/preloader-light.png" alt="logo">
        </a>
        <div class="mobile-menu overflow-hidden"></div>
        <ul class="info pt-40">           
            </li>
            <li class="py-2"><i class="fa-solid primary-color fa-phone-volume"></i> <a
                    href="tel:+2348101086263">+234 810 1086 263</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info@sahaadfoundation.net</a></li>
        </ul>
        <div class="social-icon mt-20">
            <a href="https://www.facebook.com/profile.php?id=100092666330110&sk=about_contact_and_basic_info"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/sahaadfoundation"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <main>
        <!-- Banner area start here -->
        <section class="banner-area pt-160 pb-160">
            <div class="banner__left-shape wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms"><img
                    class="shape-hand__animation" src="assets/images/shape/hero-shape2.png" alt="shape"></div>
            <div class="banner__right-shape"><img src="assets/images/shape/hero-shape.png" alt="shape"></div>
            <div class="banner__hero"><img src="assets/images/banner/hero.png" alt="image"></div>
            <div class="container">
                <div class="banner__content">
                    <h3 class="mb-15 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Sahaad Foundation
                    </h3>
                    <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Creating autism awareness and supporting the less privileged</h1>
                    <div class="btn-one mt-45 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <span class="btn-circle">
                        </span>
                        <a href="about.php" class="btn-inner">
                            <span class="btn-text">
                                EXPLORE MORE
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner area end here -->

        <!-- About area start here -->
        <section class="about-two-area pt-120 pb-120 overflow-hidden">
            <div class="about-two__wrp">
                <div class="about-two__shape bobble__animation">
                    <img src="assets/images/shape/about-dot2.png" alt="image">
                </div>
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="about-two__image image pr-60">
                                <img src="assets/images/about/about-two-image1.jpg" alt="image">
                                <div class="line-shape sway_Y__animation">
                                    <img src="assets/images/shape/about-line.png" alt="shape">
                                </div>
                                <div class="dot-shape sway__animation">
                                    <img src="assets/images/shape/about-dot3.png" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header mb-20">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <i class="fa-regular fa-angles-left pe-1"></i> ABOUT US <i
                                        class="fa-regular fa-angles-right ps-1"></i>
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Goal</h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    At Sahaad Foundation, our goal is to raise awareness about autism and extend a 
                                    helping hand to the less privileged. We believe in fostering understanding, acceptance, 
                                    and providing meaningful support to create a positive impact on individuals and communities.
                                </p>
                            </div>
                            <div class="about-two__content">
                                <div class="item mb-30 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/icon/open-eye.png" width="50px;" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Advocacy & Awareness</h6>
                                        <p>Autism awareness in Africa is extremely low. A central aspect of Sahaad's work is to improve awareness around the condition in Africa.</p>
                                    </div>
                                </div>
                                <div class="item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/icon/diagram.png" width="50px;" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Structured Approach</h6>
                                        <p>We have put in place a structure that makes assessment & diagnosis more accessible to persons who may be on the spectrum.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-content-center flex-wrap gap-4 mt-40 wow fadeInDown"
                                    data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="btn-two">
                                        <span class="btn-circle">
                                        </span>
                                        <a href="about.php" class="btn-inner">
                                            <span class="btn-text">
                                                ABOUT US
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About area end here -->


        <?php
            $sql = "SELECT * FROM projects";
            $result = $conn->query($sql);
            $row=mysqli_fetch_array($result);
            if(mysqli_num_rows($result) > 0)
            {
        ?>  
            <!-- Cause area start here -->
                <section class="cause-area pb-120">
                    <div class="container">
                        <div class="section-header mb-60 text-center">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> FEATURED CAUSES <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Introducing Our Campaigns
                            </h2>
                        </div>
                        <div class="row g-4">
                            <?php 
                                 // Fetch projects with their images
                                    $sql = "SELECT p.id, p.title, p.body, GROUP_CONCAT(pi.image_path) AS image_paths 
                                    FROM projects p 
                                    LEFT JOIN project_images pi ON p.id = pi.project_id 
                                    GROUP BY p.id";
                                    $result = $conn->query($sql);

                                if (mysqli_num_rows($result) > 0)
                                {
                                    foreach ($result as $data)
                                    {
                            ?>                                                                          
                                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                        <div class="cause__item">
                                            <div class="cause__image image">
                                                <?php
                                                    // Display first image if available
                                                    if (!empty($data['image_paths'])) {
                                                        $images = explode(",", $data['image_paths']);
                                                        $first_image = trim($images[0]);
                                                        echo "<img src='panel/projects/" . $first_image . "' alt='Project Image' class='w-32 h-auto mb-2'>";
                                                    } else {
                                                        echo "<p>No images available for this project.</p>";
                                                    }
                                                ?>                                                                                                
                                            </div>
                                            <div class="cause__content">
                                                <h4 class="mb-4 mt-20"><a href="view-project.php?id=<?= $data['id']; ?> " class="primary-hover"><?= $data['title']; ?></a></h4>
                                                <div class="progress-area">                                                                                                        
                                                    <div class="btn-three mt-30">
                                                        <span class="btn-circle">
                                                        </span>
                                                        <a href="view-project.php?id=<?= $data['id']; ?>" class="btn-inner">
                                                            <span class="btn-text">
                                                                VIEW PROJECT
                                                            </span>                                                            
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                                                            
                            <?php
                                    }
                                }                            
                            ?>
                        </div>
                    </div>
                </section>
            <!-- Cause area end here -->
            <?php   
            }
            else
            {
                $null = 'nothing to show';
            }                                                                    
        ?>



        <!-- Counter area start here -->
        <section class="counter-area pt-100 pb-100">
            <div class="container">
                <div class="counter__wrp">
                    <div class="counter__item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/icon/give-heart.png" alt="icon">
                        </div>
                        <br>
                        <div class="content">
                            <h3><span class="count">2,500</span>+</h3>
                            <span>Lives Impacted</span>
                        </div>
                    </div>
                    <div class="counter__item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/icon/capacity.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3><span class="count">270</span>+</h3>
                            <span>Capacity Building Projects</span>
                        </div>
                    </div>
                    <div class="counter__item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/icon/group-target.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3><span class="count">50</span>+</h3>
                            <span>Community Projects</span>
                        </div>
                    </div>
                    <!-- <div class="counter__item wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/icon/counter4.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3><span class="count">8,700</span>+</h3>
                            <span>Worldwide Donor</span>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Counter area end here -->   
        
            
        <?php
            $sql = "SELECT * FROM gallery";
            $result = $conn->query($sql);
            $row=mysqli_fetch_array($result);
            if(mysqli_num_rows($result) > 0)
            {
        ?>  
            
            <!-- Project area start here -->
                <section class="project-area pt-120 pb-120">
                    <div class="container">
                        <div class="section-header mb-60 text-center">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> Our PROJECTS <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Making our Footprints
                            </h2>
                        </div>
                        <div class="row g-4">
                            <?php 
                                $query = "SELECT * FROM gallery ORDER BY date DESC LIMIT 5  ";
                                $query_run = mysqli_query($conn, $query);

                                if (mysqli_num_rows($query_run) > 0)
                                {
                                    foreach ($query_run as $data)
                                    {
                            ?>
                                        <div class="col-md-3 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                            <div class="project__item">
                                                <div class="image">
                                                    <img src="panel/gallery/<?= $data['image'];?>" style="width:300px;" alt="image">
                                                </div>
                                                <div class="project__content">
                                                    <div class="con">
                                                        <h4><a href="javascript:void(0);" class="text-white"><?= $data['type']; ?></a></h4>
                                                        <span class="text-white"><?= $data['date']; ?></span>
                                                    </div>                                                    
                                                </div>
                                            </div>
                                        </div>   
                            <?php
                                    }
                                }
                            ?>                 
                        </div>
                    </div>
                </section>
            <!-- Project area end here -->
            <!-- Cause area end here -->
            <?php   
            }
            else
            {
                $loc= "null";
            }                                                                    
        ?>


        <!-- Faq area start here -->
        <section class="faq-area secondary-bg overflow-hidden">
            <div class="faq__shape shape-hand__animation">
                <img src="assets/images/shape/faq-shape.png" alt="shape">
            </div>
            <div class="d-flex faq__wrp align-items-center justify-content-end">
                <div class="faq__left-item position-relative">
                    <div class="faq__item">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> FAQS <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Have
                                Any Questions?
                            </h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is autism, and how does the Sahaad Foundation contribute to <br> autism awareness?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Autism is a neurodevelopmental disorder affecting communication and behavior. 
                                            Sahaad Foundation raises awareness through educational programs, community events, 
                                            and collaborations to promote understanding and acceptance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Are there specific support programs for individuals with autism at <br> Sahaad Foundation?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                        Yes, Sahaad Foundation offers a range of support programs for individuals with autism, including counseling services, support groups, and resources to help navigate the challenges associated with autism.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInDown" data-wow-delay="400ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingthree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsethree" aria-expanded="false"
                                        aria-controls="collapsethree">
                                        How can I contribute to Sahaad Foundation's efforts in supporting individuals with autism and the less privileged?
                                    </button>
                                </h2>
                                <div id="collapsethree" class="accordion-collapse collapse"
                                    aria-labelledby="headingthree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                        You can contribute by making a donation, volunteering your time or skills, or participating in fundraising events. Your support helps us provide essential services for both autism and the less privileged.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow fadeInDown" data-wow-delay="600ms"
                                data-wow-duration="1500ms">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Does Sahaad Foundation provide resources for families and individuals affected by autism and economic challenges?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                        Absolutely. Sahaad Foundation offers resources, support groups, and counseling services to assist families dealing with autism. We also extend our efforts to help those facing economic challenges.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faq__right-item wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="image faq__image pl-70">
                        <img src="assets/images/faq/image.jpeg" alt="image">
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq area end here -->

        <!-- Blog area start here -->
        <section class="blog-area pt-120 pb-120">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i> Blog & news <i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Latest News Update</h2>
                </div>
                <div class="row g-4">
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="blog__item"> 
                            <div class="image">
                                <img src="assets/images/blog/blog-image4.jpg" alt="image">
                                <span class="blog-tag">News</span>
                            </div>
                            <div class="blog__content pt-4">
                                <ul>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.5435 5.19275C14.5435 7.69093 12.4989 9.7355 10.0008 9.7355C7.50262 9.7355 5.45804 7.69093 5.45804 5.19275C5.45804 2.69457 7.50258 0.65 10.0008 0.65C12.4989 0.65 14.5435 2.69458 14.5435 5.19275Z"
                                                stroke="#F74F22" stroke-width="1.3" />
                                            <path
                                                d="M18.2644 14.6706C18.1052 14.9458 17.9241 15.2073 17.7169 15.4766L17.7168 15.4765L17.7089 15.4873C17.4203 15.8788 17.0845 16.2373 16.7294 16.5924C16.4326 16.8892 16.0932 17.186 15.7567 17.4385C14.0794 18.6911 12.0621 19.3499 9.97814 19.3499C7.89836 19.3499 5.88506 18.6938 4.20976 17.4461C3.84588 17.1504 3.51367 16.8792 3.22686 16.5924L3.2199 16.5854L3.21272 16.5787C2.85663 16.2436 2.54238 15.8877 2.24745 15.4874L2.24747 15.4873L2.24414 15.4829C2.06192 15.24 1.8732 14.9756 1.71919 14.7169C1.83618 14.4559 1.98455 14.1847 2.14521 13.9526L2.14533 13.9527L2.15284 13.9413C3.06984 12.5556 4.53705 11.6388 6.16642 11.4148L6.186 11.4121L6.20538 11.4082C6.23087 11.4031 6.29494 11.4117 6.34548 11.4496L6.34546 11.4496L6.34947 11.4525C7.41651 12.2401 8.68629 12.6453 10.0008 12.6453C11.3153 12.6453 12.5851 12.2401 13.6521 11.4525L13.6521 11.4525L13.6561 11.4496C13.6715 11.438 13.7403 11.408 13.8492 11.4167C15.4688 11.6435 16.9121 12.5568 17.8524 13.9468L17.8524 13.9469L17.8564 13.9526C18.0165 14.1839 18.1557 14.4231 18.2644 14.6706Z"
                                                stroke="#F74F22" stroke-width="1.3" />
                                        </svg>
                                        <a href="blog-details-1.php"><span class="primary-hover transition">By
                                                Admin</span></a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66667 4.7915C6.325 4.7915 6.04167 4.50817 6.04167 4.1665V1.6665C6.04167 1.32484 6.325 1.0415 6.66667 1.0415C7.00833 1.0415 7.29167 1.32484 7.29167 1.6665V4.1665C7.29167 4.50817 7.00833 4.7915 6.66667 4.7915ZM13.3333 4.7915C12.9917 4.7915 12.7083 4.50817 12.7083 4.1665V1.6665C12.7083 1.32484 12.9917 1.0415 13.3333 1.0415C13.675 1.0415 13.9583 1.32484 13.9583 1.6665V4.1665C13.9583 4.50817 13.675 4.7915 13.3333 4.7915ZM7.08333 12.0832C6.975 12.0832 6.86667 12.0582 6.76667 12.0165C6.65833 11.9748 6.575 11.9165 6.49167 11.8415C6.34167 11.6832 6.25 11.4748 6.25 11.2498C6.25 11.1415 6.275 11.0332 6.31667 10.9332C6.35833 10.8332 6.41667 10.7415 6.49167 10.6582C6.575 10.5832 6.65833 10.5248 6.76667 10.4832C7.06667 10.3582 7.44167 10.4248 7.675 10.6582C7.825 10.8165 7.91667 11.0332 7.91667 11.2498C7.91667 11.2998 7.90833 11.3582 7.9 11.4165C7.89167 11.4665 7.875 11.5165 7.85 11.5665C7.83333 11.6165 7.80833 11.6665 7.775 11.7165C7.75 11.7582 7.70833 11.7998 7.675 11.8415C7.51667 11.9915 7.3 12.0832 7.08333 12.0832ZM10 12.0832C9.89167 12.0832 9.78333 12.0582 9.68333 12.0165C9.575 11.9748 9.49167 11.9165 9.40833 11.8415C9.25833 11.6832 9.16667 11.4748 9.16667 11.2498C9.16667 11.1415 9.19167 11.0332 9.23333 10.9332C9.275 10.8332 9.33333 10.7415 9.40833 10.6582C9.49167 10.5832 9.575 10.5248 9.68333 10.4832C9.98333 10.3498 10.3583 10.4248 10.5917 10.6582C10.7417 10.8165 10.8333 11.0332 10.8333 11.2498C10.8333 11.2998 10.825 11.3582 10.8167 11.4165C10.8083 11.4665 10.7917 11.5165 10.7667 11.5665C10.75 11.6165 10.725 11.6665 10.6917 11.7165C10.6667 11.7582 10.625 11.7998 10.5917 11.8415C10.4333 11.9915 10.2167 12.0832 10 12.0832ZM12.9167 12.0832C12.8083 12.0832 12.7 12.0582 12.6 12.0165C12.4917 11.9748 12.4083 11.9165 12.325 11.8415L12.225 11.7165C12.1934 11.6701 12.1682 11.6196 12.15 11.5665C12.1259 11.5193 12.1091 11.4687 12.1 11.4165C12.0917 11.3582 12.0833 11.2998 12.0833 11.2498C12.0833 11.0332 12.175 10.8165 12.325 10.6582C12.4083 10.5832 12.4917 10.5248 12.6 10.4832C12.9083 10.3498 13.275 10.4248 13.5083 10.6582C13.6583 10.8165 13.75 11.0332 13.75 11.2498C13.75 11.2998 13.7417 11.3582 13.7333 11.4165C13.725 11.4665 13.7083 11.5165 13.6833 11.5665C13.6667 11.6165 13.6417 11.6665 13.6083 11.7165C13.5833 11.7582 13.5417 11.7998 13.5083 11.8415C13.35 11.9915 13.1333 12.0832 12.9167 12.0832ZM7.08333 14.9998C6.975 14.9998 6.86667 14.9748 6.76667 14.9332C6.66667 14.8915 6.575 14.8332 6.49167 14.7582C6.34167 14.5998 6.25 14.3832 6.25 14.1665C6.25 14.0582 6.275 13.9498 6.31667 13.8498C6.35833 13.7415 6.41667 13.6498 6.49167 13.5748C6.8 13.2665 7.36667 13.2665 7.675 13.5748C7.825 13.7332 7.91667 13.9498 7.91667 14.1665C7.91667 14.3832 7.825 14.5998 7.675 14.7582C7.51667 14.9082 7.3 14.9998 7.08333 14.9998ZM10 14.9998C9.78333 14.9998 9.56667 14.9082 9.40833 14.7582C9.25833 14.5998 9.16667 14.3832 9.16667 14.1665C9.16667 14.0582 9.19167 13.9498 9.23333 13.8498C9.275 13.7415 9.33333 13.6498 9.40833 13.5748C9.71667 13.2665 10.2833 13.2665 10.5917 13.5748C10.6667 13.6498 10.725 13.7415 10.7667 13.8498C10.8083 13.9498 10.8333 14.0582 10.8333 14.1665C10.8333 14.3832 10.7417 14.5998 10.5917 14.7582C10.4333 14.9082 10.2167 14.9998 10 14.9998ZM12.9167 14.9998C12.7 14.9998 12.4833 14.9082 12.325 14.7582C12.2479 14.6799 12.1882 14.5862 12.15 14.4832C12.1083 14.3832 12.0833 14.2748 12.0833 14.1665C12.0833 14.0582 12.1083 13.9498 12.15 13.8498C12.1917 13.7415 12.25 13.6498 12.325 13.5748C12.5167 13.3832 12.8083 13.2915 13.075 13.3498C13.1333 13.3582 13.1833 13.3748 13.2333 13.3998C13.2833 13.4165 13.3333 13.4415 13.3833 13.4748C13.425 13.4998 13.4667 13.5415 13.5083 13.5748C13.6583 13.7332 13.75 13.9498 13.75 14.1665C13.75 14.3832 13.6583 14.5998 13.5083 14.7582C13.35 14.9082 13.1333 14.9998 12.9167 14.9998ZM17.0833 8.19984H2.91667C2.575 8.19984 2.29167 7.9165 2.29167 7.57484C2.29167 7.23317 2.575 6.94984 2.91667 6.94984H17.0833C17.425 6.94984 17.7083 7.23317 17.7083 7.57484C17.7083 7.9165 17.425 8.19984 17.0833 8.19984Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M13.3333 18.9582H6.66667C3.625 18.9582 1.875 17.2082 1.875 14.1665V7.08317C1.875 4.0415 3.625 2.2915 6.66667 2.2915H13.3333C16.375 2.2915 18.125 4.0415 18.125 7.08317V14.1665C18.125 17.2082 16.375 18.9582 13.3333 18.9582ZM6.66667 3.5415C4.28333 3.5415 3.125 4.69984 3.125 7.08317V14.1665C3.125 16.5498 4.28333 17.7082 6.66667 17.7082H13.3333C15.7167 17.7082 16.875 16.5498 16.875 14.1665V7.08317C16.875 4.69984 15.7167 3.5415 13.3333 3.5415H6.66667Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>14 Jan, 2024  </span>
                                    </li>
                                </ul>
                                <h4 class="mt-20 pb-25 bor-bottom"><a href="blog-details-1.php"
                                        class="primary-hover">Autism and Poverty in Africa</a></h4>
                                <a class="mt-4" href="autism-and-poverty-in-africa.php"><span class="read-more fw-bold transition">Read
                                        More <i class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/blog/blog-image-3.png" alt="image">
                                <span class="blog-tag">News</span>
                            </div>
                            <div class="blog__content pt-4">
                                <ul>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.5435 5.19275C14.5435 7.69093 12.4989 9.7355 10.0008 9.7355C7.50262 9.7355 5.45804 7.69093 5.45804 5.19275C5.45804 2.69457 7.50258 0.65 10.0008 0.65C12.4989 0.65 14.5435 2.69458 14.5435 5.19275Z"
                                                stroke="#F74F22" stroke-width="1.3" />
                                            <path
                                                d="M18.2644 14.6706C18.1052 14.9458 17.9241 15.2073 17.7169 15.4766L17.7168 15.4765L17.7089 15.4873C17.4203 15.8788 17.0845 16.2373 16.7294 16.5924C16.4326 16.8892 16.0932 17.186 15.7567 17.4385C14.0794 18.6911 12.0621 19.3499 9.97814 19.3499C7.89836 19.3499 5.88506 18.6938 4.20976 17.4461C3.84588 17.1504 3.51367 16.8792 3.22686 16.5924L3.2199 16.5854L3.21272 16.5787C2.85663 16.2436 2.54238 15.8877 2.24745 15.4874L2.24747 15.4873L2.24414 15.4829C2.06192 15.24 1.8732 14.9756 1.71919 14.7169C1.83618 14.4559 1.98455 14.1847 2.14521 13.9526L2.14533 13.9527L2.15284 13.9413C3.06984 12.5556 4.53705 11.6388 6.16642 11.4148L6.186 11.4121L6.20538 11.4082C6.23087 11.4031 6.29494 11.4117 6.34548 11.4496L6.34546 11.4496L6.34947 11.4525C7.41651 12.2401 8.68629 12.6453 10.0008 12.6453C11.3153 12.6453 12.5851 12.2401 13.6521 11.4525L13.6521 11.4525L13.6561 11.4496C13.6715 11.438 13.7403 11.408 13.8492 11.4167C15.4688 11.6435 16.9121 12.5568 17.8524 13.9468L17.8524 13.9469L17.8564 13.9526C18.0165 14.1839 18.1557 14.4231 18.2644 14.6706Z"
                                                stroke="#F74F22" stroke-width="1.3" />
                                        </svg>
                                        <a href="blog-details-2.php"><span class="primary-hover transition">By
                                                Admin</span></a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66667 4.7915C6.325 4.7915 6.04167 4.50817 6.04167 4.1665V1.6665C6.04167 1.32484 6.325 1.0415 6.66667 1.0415C7.00833 1.0415 7.29167 1.32484 7.29167 1.6665V4.1665C7.29167 4.50817 7.00833 4.7915 6.66667 4.7915ZM13.3333 4.7915C12.9917 4.7915 12.7083 4.50817 12.7083 4.1665V1.6665C12.7083 1.32484 12.9917 1.0415 13.3333 1.0415C13.675 1.0415 13.9583 1.32484 13.9583 1.6665V4.1665C13.9583 4.50817 13.675 4.7915 13.3333 4.7915ZM7.08333 12.0832C6.975 12.0832 6.86667 12.0582 6.76667 12.0165C6.65833 11.9748 6.575 11.9165 6.49167 11.8415C6.34167 11.6832 6.25 11.4748 6.25 11.2498C6.25 11.1415 6.275 11.0332 6.31667 10.9332C6.35833 10.8332 6.41667 10.7415 6.49167 10.6582C6.575 10.5832 6.65833 10.5248 6.76667 10.4832C7.06667 10.3582 7.44167 10.4248 7.675 10.6582C7.825 10.8165 7.91667 11.0332 7.91667 11.2498C7.91667 11.2998 7.90833 11.3582 7.9 11.4165C7.89167 11.4665 7.875 11.5165 7.85 11.5665C7.83333 11.6165 7.80833 11.6665 7.775 11.7165C7.75 11.7582 7.70833 11.7998 7.675 11.8415C7.51667 11.9915 7.3 12.0832 7.08333 12.0832ZM10 12.0832C9.89167 12.0832 9.78333 12.0582 9.68333 12.0165C9.575 11.9748 9.49167 11.9165 9.40833 11.8415C9.25833 11.6832 9.16667 11.4748 9.16667 11.2498C9.16667 11.1415 9.19167 11.0332 9.23333 10.9332C9.275 10.8332 9.33333 10.7415 9.40833 10.6582C9.49167 10.5832 9.575 10.5248 9.68333 10.4832C9.98333 10.3498 10.3583 10.4248 10.5917 10.6582C10.7417 10.8165 10.8333 11.0332 10.8333 11.2498C10.8333 11.2998 10.825 11.3582 10.8167 11.4165C10.8083 11.4665 10.7917 11.5165 10.7667 11.5665C10.75 11.6165 10.725 11.6665 10.6917 11.7165C10.6667 11.7582 10.625 11.7998 10.5917 11.8415C10.4333 11.9915 10.2167 12.0832 10 12.0832ZM12.9167 12.0832C12.8083 12.0832 12.7 12.0582 12.6 12.0165C12.4917 11.9748 12.4083 11.9165 12.325 11.8415L12.225 11.7165C12.1934 11.6701 12.1682 11.6196 12.15 11.5665C12.1259 11.5193 12.1091 11.4687 12.1 11.4165C12.0917 11.3582 12.0833 11.2998 12.0833 11.2498C12.0833 11.0332 12.175 10.8165 12.325 10.6582C12.4083 10.5832 12.4917 10.5248 12.6 10.4832C12.9083 10.3498 13.275 10.4248 13.5083 10.6582C13.6583 10.8165 13.75 11.0332 13.75 11.2498C13.75 11.2998 13.7417 11.3582 13.7333 11.4165C13.725 11.4665 13.7083 11.5165 13.6833 11.5665C13.6667 11.6165 13.6417 11.6665 13.6083 11.7165C13.5833 11.7582 13.5417 11.7998 13.5083 11.8415C13.35 11.9915 13.1333 12.0832 12.9167 12.0832ZM7.08333 14.9998C6.975 14.9998 6.86667 14.9748 6.76667 14.9332C6.66667 14.8915 6.575 14.8332 6.49167 14.7582C6.34167 14.5998 6.25 14.3832 6.25 14.1665C6.25 14.0582 6.275 13.9498 6.31667 13.8498C6.35833 13.7415 6.41667 13.6498 6.49167 13.5748C6.8 13.2665 7.36667 13.2665 7.675 13.5748C7.825 13.7332 7.91667 13.9498 7.91667 14.1665C7.91667 14.3832 7.825 14.5998 7.675 14.7582C7.51667 14.9082 7.3 14.9998 7.08333 14.9998ZM10 14.9998C9.78333 14.9998 9.56667 14.9082 9.40833 14.7582C9.25833 14.5998 9.16667 14.3832 9.16667 14.1665C9.16667 14.0582 9.19167 13.9498 9.23333 13.8498C9.275 13.7415 9.33333 13.6498 9.40833 13.5748C9.71667 13.2665 10.2833 13.2665 10.5917 13.5748C10.6667 13.6498 10.725 13.7415 10.7667 13.8498C10.8083 13.9498 10.8333 14.0582 10.8333 14.1665C10.8333 14.3832 10.7417 14.5998 10.5917 14.7582C10.4333 14.9082 10.2167 14.9998 10 14.9998ZM12.9167 14.9998C12.7 14.9998 12.4833 14.9082 12.325 14.7582C12.2479 14.6799 12.1882 14.5862 12.15 14.4832C12.1083 14.3832 12.0833 14.2748 12.0833 14.1665C12.0833 14.0582 12.1083 13.9498 12.15 13.8498C12.1917 13.7415 12.25 13.6498 12.325 13.5748C12.5167 13.3832 12.8083 13.2915 13.075 13.3498C13.1333 13.3582 13.1833 13.3748 13.2333 13.3998C13.2833 13.4165 13.3333 13.4415 13.3833 13.4748C13.425 13.4998 13.4667 13.5415 13.5083 13.5748C13.6583 13.7332 13.75 13.9498 13.75 14.1665C13.75 14.3832 13.6583 14.5998 13.5083 14.7582C13.35 14.9082 13.1333 14.9998 12.9167 14.9998ZM17.0833 8.19984H2.91667C2.575 8.19984 2.29167 7.9165 2.29167 7.57484C2.29167 7.23317 2.575 6.94984 2.91667 6.94984H17.0833C17.425 6.94984 17.7083 7.23317 17.7083 7.57484C17.7083 7.9165 17.425 8.19984 17.0833 8.19984Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M13.3333 18.9582H6.66667C3.625 18.9582 1.875 17.2082 1.875 14.1665V7.08317C1.875 4.0415 3.625 2.2915 6.66667 2.2915H13.3333C16.375 2.2915 18.125 4.0415 18.125 7.08317V14.1665C18.125 17.2082 16.375 18.9582 13.3333 18.9582ZM6.66667 3.5415C4.28333 3.5415 3.125 4.69984 3.125 7.08317V14.1665C3.125 16.5498 4.28333 17.7082 6.66667 17.7082H13.3333C15.7167 17.7082 16.875 16.5498 16.875 14.1665V7.08317C16.875 4.69984 15.7167 3.5415 13.3333 3.5415H6.66667Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>20 Jan, 2024</span>
                                    </li>
                                </ul>
                                <h4 class="mt-20 pb-25 bor-bottom"><a href="blog-details-2.php"
                                        class="primary-hover">Provision of healthy meals to impoverished communities</a></h4>
                                <a class="mt-4" href="blog-details-2.php"><span class="read-more fw-bold transition">Read
                                        More <i class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/blog/blog-image6.jpg" alt="image">
                                <span class="blog-tag">Medical</span>
                            </div>
                            <div class="blog__content pt-4">
                                <ul>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.5435 5.19275C14.5435 7.69093 12.4989 9.7355 10.0008 9.7355C7.50262 9.7355 5.45804 7.69093 5.45804 5.19275C5.45804 2.69457 7.50258 0.65 10.0008 0.65C12.4989 0.65 14.5435 2.69458 14.5435 5.19275Z"
                                                stroke="#F74F22" stroke-width="1.3" />
                                            <path
                                                d="M18.2644 14.6706C18.1052 14.9458 17.9241 15.2073 17.7169 15.4766L17.7168 15.4765L17.7089 15.4873C17.4203 15.8788 17.0845 16.2373 16.7294 16.5924C16.4326 16.8892 16.0932 17.186 15.7567 17.4385C14.0794 18.6911 12.0621 19.3499 9.97814 19.3499C7.89836 19.3499 5.88506 18.6938 4.20976 17.4461C3.84588 17.1504 3.51367 16.8792 3.22686 16.5924L3.2199 16.5854L3.21272 16.5787C2.85663 16.2436 2.54238 15.8877 2.24745 15.4874L2.24747 15.4873L2.24414 15.4829C2.06192 15.24 1.8732 14.9756 1.71919 14.7169C1.83618 14.4559 1.98455 14.1847 2.14521 13.9526L2.14533 13.9527L2.15284 13.9413C3.06984 12.5556 4.53705 11.6388 6.16642 11.4148L6.186 11.4121L6.20538 11.4082C6.23087 11.4031 6.29494 11.4117 6.34548 11.4496L6.34546 11.4496L6.34947 11.4525C7.41651 12.2401 8.68629 12.6453 10.0008 12.6453C11.3153 12.6453 12.5851 12.2401 13.6521 11.4525L13.6521 11.4525L13.6561 11.4496C13.6715 11.438 13.7403 11.408 13.8492 11.4167C15.4688 11.6435 16.9121 12.5568 17.8524 13.9468L17.8524 13.9469L17.8564 13.9526C18.0165 14.1839 18.1557 14.4231 18.2644 14.6706Z"
                                                stroke="#F74F22" stroke-width="1.3" />
                                        </svg>
                                        <a href="blog-details-3.php"><span class="primary-hover transition">By
                                                Admin</span></a>
                                    </li>
                                    <li>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.66667 4.7915C6.325 4.7915 6.04167 4.50817 6.04167 4.1665V1.6665C6.04167 1.32484 6.325 1.0415 6.66667 1.0415C7.00833 1.0415 7.29167 1.32484 7.29167 1.6665V4.1665C7.29167 4.50817 7.00833 4.7915 6.66667 4.7915ZM13.3333 4.7915C12.9917 4.7915 12.7083 4.50817 12.7083 4.1665V1.6665C12.7083 1.32484 12.9917 1.0415 13.3333 1.0415C13.675 1.0415 13.9583 1.32484 13.9583 1.6665V4.1665C13.9583 4.50817 13.675 4.7915 13.3333 4.7915ZM7.08333 12.0832C6.975 12.0832 6.86667 12.0582 6.76667 12.0165C6.65833 11.9748 6.575 11.9165 6.49167 11.8415C6.34167 11.6832 6.25 11.4748 6.25 11.2498C6.25 11.1415 6.275 11.0332 6.31667 10.9332C6.35833 10.8332 6.41667 10.7415 6.49167 10.6582C6.575 10.5832 6.65833 10.5248 6.76667 10.4832C7.06667 10.3582 7.44167 10.4248 7.675 10.6582C7.825 10.8165 7.91667 11.0332 7.91667 11.2498C7.91667 11.2998 7.90833 11.3582 7.9 11.4165C7.89167 11.4665 7.875 11.5165 7.85 11.5665C7.83333 11.6165 7.80833 11.6665 7.775 11.7165C7.75 11.7582 7.70833 11.7998 7.675 11.8415C7.51667 11.9915 7.3 12.0832 7.08333 12.0832ZM10 12.0832C9.89167 12.0832 9.78333 12.0582 9.68333 12.0165C9.575 11.9748 9.49167 11.9165 9.40833 11.8415C9.25833 11.6832 9.16667 11.4748 9.16667 11.2498C9.16667 11.1415 9.19167 11.0332 9.23333 10.9332C9.275 10.8332 9.33333 10.7415 9.40833 10.6582C9.49167 10.5832 9.575 10.5248 9.68333 10.4832C9.98333 10.3498 10.3583 10.4248 10.5917 10.6582C10.7417 10.8165 10.8333 11.0332 10.8333 11.2498C10.8333 11.2998 10.825 11.3582 10.8167 11.4165C10.8083 11.4665 10.7917 11.5165 10.7667 11.5665C10.75 11.6165 10.725 11.6665 10.6917 11.7165C10.6667 11.7582 10.625 11.7998 10.5917 11.8415C10.4333 11.9915 10.2167 12.0832 10 12.0832ZM12.9167 12.0832C12.8083 12.0832 12.7 12.0582 12.6 12.0165C12.4917 11.9748 12.4083 11.9165 12.325 11.8415L12.225 11.7165C12.1934 11.6701 12.1682 11.6196 12.15 11.5665C12.1259 11.5193 12.1091 11.4687 12.1 11.4165C12.0917 11.3582 12.0833 11.2998 12.0833 11.2498C12.0833 11.0332 12.175 10.8165 12.325 10.6582C12.4083 10.5832 12.4917 10.5248 12.6 10.4832C12.9083 10.3498 13.275 10.4248 13.5083 10.6582C13.6583 10.8165 13.75 11.0332 13.75 11.2498C13.75 11.2998 13.7417 11.3582 13.7333 11.4165C13.725 11.4665 13.7083 11.5165 13.6833 11.5665C13.6667 11.6165 13.6417 11.6665 13.6083 11.7165C13.5833 11.7582 13.5417 11.7998 13.5083 11.8415C13.35 11.9915 13.1333 12.0832 12.9167 12.0832ZM7.08333 14.9998C6.975 14.9998 6.86667 14.9748 6.76667 14.9332C6.66667 14.8915 6.575 14.8332 6.49167 14.7582C6.34167 14.5998 6.25 14.3832 6.25 14.1665C6.25 14.0582 6.275 13.9498 6.31667 13.8498C6.35833 13.7415 6.41667 13.6498 6.49167 13.5748C6.8 13.2665 7.36667 13.2665 7.675 13.5748C7.825 13.7332 7.91667 13.9498 7.91667 14.1665C7.91667 14.3832 7.825 14.5998 7.675 14.7582C7.51667 14.9082 7.3 14.9998 7.08333 14.9998ZM10 14.9998C9.78333 14.9998 9.56667 14.9082 9.40833 14.7582C9.25833 14.5998 9.16667 14.3832 9.16667 14.1665C9.16667 14.0582 9.19167 13.9498 9.23333 13.8498C9.275 13.7415 9.33333 13.6498 9.40833 13.5748C9.71667 13.2665 10.2833 13.2665 10.5917 13.5748C10.6667 13.6498 10.725 13.7415 10.7667 13.8498C10.8083 13.9498 10.8333 14.0582 10.8333 14.1665C10.8333 14.3832 10.7417 14.5998 10.5917 14.7582C10.4333 14.9082 10.2167 14.9998 10 14.9998ZM12.9167 14.9998C12.7 14.9998 12.4833 14.9082 12.325 14.7582C12.2479 14.6799 12.1882 14.5862 12.15 14.4832C12.1083 14.3832 12.0833 14.2748 12.0833 14.1665C12.0833 14.0582 12.1083 13.9498 12.15 13.8498C12.1917 13.7415 12.25 13.6498 12.325 13.5748C12.5167 13.3832 12.8083 13.2915 13.075 13.3498C13.1333 13.3582 13.1833 13.3748 13.2333 13.3998C13.2833 13.4165 13.3333 13.4415 13.3833 13.4748C13.425 13.4998 13.4667 13.5415 13.5083 13.5748C13.6583 13.7332 13.75 13.9498 13.75 14.1665C13.75 14.3832 13.6583 14.5998 13.5083 14.7582C13.35 14.9082 13.1333 14.9998 12.9167 14.9998ZM17.0833 8.19984H2.91667C2.575 8.19984 2.29167 7.9165 2.29167 7.57484C2.29167 7.23317 2.575 6.94984 2.91667 6.94984H17.0833C17.425 6.94984 17.7083 7.23317 17.7083 7.57484C17.7083 7.9165 17.425 8.19984 17.0833 8.19984Z"
                                                fill="#F74F22" />
                                            <path
                                                d="M13.3333 18.9582H6.66667C3.625 18.9582 1.875 17.2082 1.875 14.1665V7.08317C1.875 4.0415 3.625 2.2915 6.66667 2.2915H13.3333C16.375 2.2915 18.125 4.0415 18.125 7.08317V14.1665C18.125 17.2082 16.375 18.9582 13.3333 18.9582ZM6.66667 3.5415C4.28333 3.5415 3.125 4.69984 3.125 7.08317V14.1665C3.125 16.5498 4.28333 17.7082 6.66667 17.7082H13.3333C15.7167 17.7082 16.875 16.5498 16.875 14.1665V7.08317C16.875 4.69984 15.7167 3.5415 13.3333 3.5415H6.66667Z"
                                                fill="#F74F22" />
                                        </svg>
                                        <span>25 Jan, 2024</span>
                                    </li>
                                </ul>
                                <h4 class="mt-20 pb-25 bor-bottom"><a href="blog-details-3.php"
                                        class="primary-hover">Parents Losing Hope In Autism Needs-Based Program As Wait List Grow</a></h4>
                                <a class="mt-4" href="blog-details-3.php"><span class="read-more fw-bold transition">Read
                                        More <i class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog area end here -->
    </main>

    <!-- Footer area start here -->
    <footer class="footer-area secondary-bg overflow-hidden">
        <div class="footer__main-wrp">
            <div class="footer__shape-left wow slideInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="footer__shape__animation" src="assets/images/shape/footer-shape-left.png" alt="shape">
            </div>
            <div class="footer__shape-right wow slideInRight" data-wow-delay="400ms" data-wow-duration="1500ms">
                <img class="footer__shape__animation-right" src="assets/images/shape/footer-shape-right.png"
                    alt="shape">
            </div>
            <div class="container">
                <div class="footer__wrp pt-120 pb-120">
                    <div class="row g-4 justify-content-between">
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <a href="index.php" class="logo mb-40">
                                    <img src="assets/images/preloader-light.png" width="200%;" alt="image">
                                </a>
                                <p class="text-white">
                                    We believe in the transformative power of compassion and collective action. Our commitment is to make a positive impact on individuals and communities, fostering a world where everyone has the opportunity to thrive.
                                </p>
                                <div class="btn-one mt-40">
                                    <span class="btn-circle">
                                    </span>
                                    <a href="donate.php" class="btn-inner">
                                        <span class="btn-text">
                                            DONATE NOW
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <h3 class="title mb-40 text-white">Quick Links</h3>
                                <ul class="link">
                                    <li class="mb-3">
                                        <a href="about.php"><i class="fa-light fa-angles-right me-2"></i> About Us</a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="causes-of-autism.php"><i class="fa-light fa-angles-right me-2"></i> What is Autism</a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="projects.php"><i class="fa-light fa-angles-right me-2"></i> Our Projects</a>
                                    </li>
                                    <li>
                                        <a href="contact.php"><i class="fa-light fa-angles-right me-2"></i> Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>  
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="footer__item">
                                <h3 class="title mb-40 text-white">Contact Info</h3>
                                <ul class="link info">
                                    <li class="mb-3">
                                        <a href="tel:+2348101086263"><i
                                                class="fa-solid fa-phone me-1 primary-color"></i>
                                                +234 810 1086 263</a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="#0"><i class="fa-sharp fa-solid fa-envelope me-1 primary-color"></i>
                                            info@sahaadfoundation.net</a>
                                    </li>
                                    <li>
                                        <a href="#0"><i class="fa-solid fa-location-dot me-1 primary-color"></i> Kamjat House, Gbagi Ibadan. Nigeria</a>
                                    </li>
                                </ul>
                                <div class="social-icon mt-30">
                                    <a class="active" href="https://www.facebook.com/profile.php?id=100092666330110&sk=about_contact_and_basic_info"><i class="fa-brands fa-facebook-f"></i></a>
                                    <a class="active" href="https://www.instagram.com/sahaadfoundation?igsh=MTBqMzB4ejNkNGN3aw=="><i class="fa-brands fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copytext">
            <p class="wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">&copy; All Copyright Reserved <?= date('Y'); ?> by <a
                    href="#0" class="text-white primary-hover">Sahaad Empowerment Foundation</a></p>
        </div>
    </footer>
    <!-- Footer area end here -->

    <!-- Back to top area start here -->
    <div class="scroll-up">
        <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top area end here -->

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Mean menu Js -->
    <script src="assets/js/meanmenu.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>
</body>

</html>