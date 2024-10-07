<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Latest News - Blog </title>
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
                                    <li class="title"><span class="flaticon-energy"></span> trending-title</li>
                                    <li>Class property employ ancho red multi level mansion</li>
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
                                <a href="index.html"><img src="assets/img/logo/logo_1.png.jpg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/gallery/header_card.png" alt="">
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
                                <div class="nav-search search-switch">
                                    <i class="fa fa-search"></i>
                                </div>
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


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Admin_Panel/Database/db_connection.php';

$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

$sql = "SELECT title, author, content, published_date, image FROM posts WHERE id = $post_id";
$result = $conn->query($sql);

$other_posts_sql = "SELECT id, title, image, content FROM posts WHERE id != $post_id LIMIT 200"; // Limit to 5 posts
$other_posts_result = $conn->query($other_posts_sql);

if ($result->num_rows > 0) {
    $post = $result->fetch_assoc();
}
?>

<div class="container my-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
                    <p><small class="text-muted">by <?php echo htmlspecialchars($post['author']); ?> on <?php echo date('M d, Y', strtotime($post['published_date'])); ?></small></p>
                    <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" class="img-fluid" alt="Post Image">
                    <div class="mt-4">
                        <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                    </div>
                    <a href="index.php" class="btn btn-primary">Back to Blog</a>
                </div>

                <div class="col-lg-4">
                    <h4>Other Blog Posts</h4>
                    <ul class="list-group">
                        <?php
                        if ($other_posts_result->num_rows > 0) {
                            while ($other_post = $other_posts_result->fetch_assoc()) {
                              
                                $short_description = nl2br(htmlspecialchars(substr($other_post['content'], 0, 100))) . '...';
                                ?>
                                <li class="list-group-item">
                                    <a href="latest_news.php?id=<?php echo $other_post['id']; ?>">
                                        <div class="media">
                                            <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($other_post['image']); ?>" class="mr-3" alt="Post Image" style="width: 64px; height: 64px;">
                                            <div class="media-body">
                                                <h5 class="mt-0"><?php echo htmlspecialchars($other_post['title']); ?></h5>
                                                <p><?php echo $short_description; ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <?php
                            }
                        } else {
                            echo "<li class='list-group-item'>No other posts available.</li>";
                        }
                        ?>
                    </ul>
                </div>

    <!-------------------- Flow Socail---------------->
    <div class="single-follow mb-45">
                            <div class="single-box">
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-fb.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">  
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div> 
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-tw.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                    <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="#"><img src="assets/img/news/icon-ins.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>8,045</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                                <div class="follow-us d-flex align-items-center">
                                    <div class="follow-social">
                                        <a href="https://www.youtube.com/@Stocktoday-news/videos"><img src="assets/img/news/icon-yo.png" alt=""></a>
                                    </div>
                                    <div class="follow-count">
                                        <span>202</span>
                                        <p>Fans</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                        
                    </div>
                </div>
        </div>
    </div>
 <!-- About US End -->

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