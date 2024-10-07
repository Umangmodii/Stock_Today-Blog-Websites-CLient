<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> StockToday - Blog </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/ticker-style.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<?php
                                        // Database connection
                                       
                                        include 'Admin_Panel/Database/db_connection.php';

                                        ?>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo_1.png.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top black-bg d-none d-sm-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li class="title"><span class="flaticon-energy"></span> Stock-Today</li>
                                    <li>News Blog</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-date">
                                    <li><span class="flaticon-calendar"></span> +880166 253 232</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/logo_1.png.jpg" alt=""></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.php"><img src="assets/img/logo/logo_1.png.jpg" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                            <nav>                  
                                <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="about.php">about</a></li>
                                        <li>
                                            <a href="categori.php">Category</a>
                                        <ul class="submenu">
                    <li><a href="business.php">Business</a></li>
                    <li><a href="travel.php">Travel</a></li>
                    <li><a href="fashion.php">Fashion</a></li>
                    <li><a href="technology.php">Technology</a></li>
                </ul>
             
            </li>
                                       <li>
                                            <a>Blogs</a>
                                            <ul class="submenu">
                                            <li> <a href="blog.php">Blog</a></li>
                                            <li> <a href="login.php">Login</a></li>
                                            <!-- <li> <a href="Admin_Panel/manage_post.php">Manage Post</a></li> -->
                                            </ul>
                                        </li>

                                        <!-- <li><a href="Admin_Panel/index.php">Manage Blog</a></li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Heder social -->
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="https://www.youtube.com/@Stocktoday-news/videos"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                <!-- Search Nav -->
                              
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!-- About US Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3> Daily Blogs </h3>
                            </div>
                        </div>
                        <div class="col-xl-8 col-md-9">
                            <div class="properties__button">
                                <!--Nav Button  -->                                            
                                <nav>                                                  
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Business</a>
                                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Travel</a>
                                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                                        <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a>
                                    </div>
                                </nav>
                                <!--End Nav Button  -->
                            </div>
                        </div>
                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- Business -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                    <div class="row">
                                        <?php
                                        // Database connection
                                       
                                        // include 'Admin_Panel/Database/db_connection.php';

                                        $sql = "SELECT id, title,image, category, author, published_date FROM posts WHERE category = 'Business' ORDER BY published_date DESC LIMIT 5";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($post = $result->fetch_assoc()) {
                                                ?>
                                                <div class="whats-news-single mb-40 col-lg-6 col-md-6">
                                                    <div class="whates-img">
                                                        <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image" class="img-fluid">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4><a href="latest_news.php?id=<?php echo htmlspecialchars($post['id']); ?>">
                                                            <?php echo htmlspecialchars($post['title']); ?>
                                                        </a></h4>
                                                        <span>by <?php echo htmlspecialchars($post['author']); ?> - <?php echo date('M d, Y', strtotime($post['published_date'])); ?></span>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "<p>No business-related blog posts found.</p>";
                                        }

                                        $conn->close();
                                        ?>
                                    </div>                                       
                                </div>

                                <!-- Travel -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <?php
                                            $conn = new mysqli($host, $username, $password, $database);
                                            $sqli = "SELECT id, title, author, content, published_date, image FROM posts WHERE category = 'Travel' ORDER BY published_date DESC LIMIT 200";
                                            $result = $conn->query($sqli);

                                            if ($result->num_rows > 0) {
                                                while ($article = $result->fetch_assoc()) {
                                                    ?>
                                                    <div class="whats-news-single mb-40 col-lg-6 col-md-6">
                                                        <div class="whates-img">
                                                            <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($article['image']); ?>" alt="" class="img-fluid">
                                                        </div>
                                                        <div class="whates-caption">
                                                            <h4><a href="latest_news.php?id=<?php echo $article['id']; ?>">
                                                                <?php echo htmlspecialchars($article['title']); ?></a></h4>
                                                            <span>by <?php echo htmlspecialchars($article['author']); ?> - 
                                                                <?php echo date('M d, Y', strtotime($article['published_date'])); ?></span>
                                                            <p><?php echo htmlspecialchars(substr($article['content'], 0, 100)); ?>...</p>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            } else {
                                                echo "<p>No travel news available at the moment.</p>";
                                            }

                                            $conn->close();
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Fashion -->
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <div class="row">
                                        <?php
                                        $conn = new mysqli($host, $username, $password, $database);
                                        $sqli = "SELECT id, title, author, content, published_date, image FROM posts WHERE category = 'Fashion' ORDER BY published_date DESC LIMIT 200";
                                        $result = $conn->query($sqli);

                                        if ($result->num_rows > 0) {
                                            while ($article = $result->fetch_assoc()) {
                                                ?>
                                                <div class="whats-news-single mb-40 col-lg-6 col-md-6">
                                                    <div class="whates-img">
                                                        <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($article['image']); ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="latest_news.php?id=<?php echo $article['id']; ?>">
                                                                <?php echo htmlspecialchars($article['title']); ?>
                                                            </a>
                                                        </h4>
                                                        <span>by <?php echo htmlspecialchars($article['author']); ?> - 
                                                            <?php echo date('M d, Y', strtotime($article['published_date'])); ?></span>
                                                        <p><?php echo htmlspecialchars(substr($article['content'], 0, 100)); ?>...</p>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "<p>No fashion news available at the moment.</p>";
                                        }

                                        $conn->close();
                                        ?>
                                    </div>
                                </div>

                                <!-- Technology -->
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                    <div class="row">
                                        <?php
                                       $conn = new mysqli($host, $username, $password, $database);
                                        $stmt = $conn->prepare("SELECT * FROM posts WHERE category = ?");
                                        $category = 'Technology';
                                        $stmt->bind_param("s", $category);
                                        $stmt->execute();
                                        $newsArticles = $stmt->get_result();

                                        if ($newsArticles->num_rows > 0) {
                                            while ($article = $newsArticles->fetch_assoc()) {
                                                ?>
                                                <div class="whats-news-single mb-40 col-lg-6 col-md-6">
                                                    <div class="whates-img">
                                                        <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($article['image']); ?>" class="card-img-top" alt="Blog Image">
                                                    </div>
                                                    <div class="whates-caption">
                                                        <h4>
                                                            <a href="latest_news.php?id=<?php echo urlencode($article['id']); ?>">
                                                                <?php echo htmlspecialchars($article['title']); ?>
                                                            </a>
                                                        </h4>
                                                        <span>
                                                            by <?php echo htmlspecialchars($article['author']); ?> - 
                                                            <?php echo isset($article['published_date']) ? date('M d, Y', strtotime($article['published_date'])) : 'Now'; ?>
                                                        </span>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "<p>No technology news available at the moment.</p>";
                                        }
                                        $stmt->close();
                                        $conn->close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>

.single-follow {
    background-color: #f8f9fa; /* Light background for contrast */
    border: 1px solid #e0e0e0; /* Subtle border */
    border-radius: 8px; /* Rounded corners */
    padding: 20px; /* Padding for spacing */
    transition: transform 0.3s ease; /* Smooth transition effect */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
}

.single-follow:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.2); /* Stronger shadow on hover */
}

.single-box {
    display: flex;
    align-items: center; /* Center items vertically */
}

.follow-icon {
    font-size: 24px; /* Icon size */
    color: #4267B2; /* Facebook color */
    margin-right: 15px; /* Space between icon and text */
}

.follow-caption {
    color: #333; /* Dark text color */
}

.follow-caption span {
    font-weight: bold; /* Bold for likes */
    font-size: 16px; /* Slightly larger text */
}

.follow-caption p {
    margin: 0; /* Remove default margin */
    font-size: 14px; /* Smaller text for description */
    color: #777; /* Lighter color for description */
}


            </style>

            <div class="col-lg-4">
                <!-- Flow Social -->
                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="follow-caption">
                                <span>1.5k Likes</span>
                                <p>Follow us on Facebook</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="follow-caption">
                                <span>900 Followers</span>
                                <p>Follow us on Twitter</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="follow-caption">
                                <span>3.2k Followers</span>
                                <p>Follow us on Instagram</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="single-follow mb-45">
                    <div class="single-box">
                        <div class="follow-us d-flex align-items-center">
                            <div class="follow-icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <div class="follow-caption">
                                <span>1k Subscribers</span>
                                <p>Follow us on YouTube</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
           
                               
              
    <!-- About US End -->
    <!--Start pagination -->
    
    
    <!-- End pagination  -->
</main>



<footer>
    <!-- Footer Start-->
    <div class="footer-main footer-bg">
        <div class="footer-area footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <div class="single-footer-caption mb-30">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.php"><img src="assets/img/logo/logo_1.png.jpg" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1"></p>
                                        <p class="info2"></p>
                                        <p class="info2">Phone: (+91)95378 55111 </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-7">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Popular posts</h4>
                            </div>
                            <!-- Popular post -->
                            <div class="whats-right-single mb-20">
                                <div class="whats-right-img">
                                    <div class="most-recent mb-40">
                                        <?php

                                        include 'Admin_Panel/Database/db_connection.php';

                                        $sql = "SELECT id, title, category, author, published_date, image FROM posts ORDER BY published_date DESC LIMIT 3";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($article = $result->fetch_assoc()) {
                                                ?>
                                                <div class="most-recent-img" style="max-width: 100%; display: flex; align-items: center; margin-bottom: 10px;">
                                                    <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($article['image']); ?>" alt="" style="width: 60px; height: 60px; object-fit: cover; margin-right: 10px;">
                                                    <div class="most-recent-cap">
                                                        <span class="bgbeg" style="font-size: 12px; color: white;"><?php echo htmlspecialchars($article['category']); ?></span>
                                                        <h4 style="font-size: 14px; margin: 0;">
                                                            <a href="latest_news.php?id=<?php echo $article['id']; ?>" style="color: white;">
                                                                <?php echo htmlspecialchars($article['title']); ?>
                                                            </a>
                                                        </h4>
                                                        <p style="font-size: 12px; color: white;">
                                                            <?php echo htmlspecialchars($article['author']); ?> |  
                                                            <?php echo date('M d, Y', strtotime($article['published_date'])); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "<p>No recent news available.</p>";
                                        }

                                        // Close connection
                                        $conn->close();
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer-bottom area -->
            <div class="footer-bottom-area footer-bg">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script>
                                        All rights reserved | <i class="fa fa-heart" aria-hidden="true"></i> by <a href="index.php" target="_blank">Stock Today</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </div>
</footer>

<!-- Search model Begin -->
<div class="search-model-box">
    <div class="d-flex align-items-center h-100 justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
                                    </div>


<!-- Search model Begin -->

<!-- Search model end -->

<!-- JS here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
</body>
</html>