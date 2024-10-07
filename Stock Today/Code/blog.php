<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News  HTML-5 Template </title>
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
    <!-- Preloader Start-->
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
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <?php
                  
                  

            
                    $limit = 5; 
                    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
                    $offset = ($page - 1) * $limit; 

                    $sql_total = "SELECT COUNT(*) as total FROM posts";
                    $result_total = $conn->query($sql_total);
                    $total_posts = $result_total->fetch_assoc()['total'];
                    $total_pages = ceil($total_posts / $limit);

                    $sql = "SELECT id, title, image, category, author, published_date FROM posts ORDER BY published_date DESC LIMIT $limit OFFSET $offset";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($post = $result->fetch_assoc()) {
                            ?>
                            <article class="blog_item mb-40">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image">
                                    <a href="#" class="blog_item_date">
                                        <h3><?php echo date('d', strtotime($post['published_date'])); ?></h3>
                                        <p><?php echo date('M', strtotime($post['published_date'])); ?></p>
                                    </a>
                                </div>
                                <div class="blog_details">
                                    <a class="d-inline-block" href="latest_news.php?id=<?php echo htmlspecialchars($post['id']); ?>">
                                        <h2><?php echo htmlspecialchars($post['title']); ?></h2>
                                    </a>
                                    <span>by <?php echo htmlspecialchars($post['author']); ?> - <?php echo date('M d, Y', strtotime($post['published_date'])); ?></span>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> <?php echo htmlspecialchars($post['category']); ?></a></li>
                                        <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                            <?php
                        }
                    } else {
                        echo "<p>No blog posts found.</p>";
                    }

                    // Pagination links
                    echo '<nav aria-label="Page navigation">';
                    echo '<ul class="pagination justify-content-center">';
                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $page) {
                            echo '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                        }
                    }
                    echo '</ul>';
                    echo '</nav>';

                    $conn->close();
                    ?>
    
        
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <!-- <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder='Search Keyword'
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Search Keyword'">
                                        <div class="input-group-append">
                                            <button class="btns" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                    type="submit">Search</button>
                            </form>
                        </aside> -->

                        <aside class="single_sidebar_widget post_category_widget">
    <h4 class="widget_title">Categories</h4>
    <ul class="list cat-list">
        <?php
        // Database connection
        include 'Admin_Panel/Database/db_connection.php';


        // Fetch categories and their post counts
        $sql = "SELECT category, COUNT(*) AS post_count FROM posts GROUP BY category";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($category = $result->fetch_assoc()) {
                ?>
                <li>
                    <!-- <a href="latest_news.php?category=<?php echo urlencode($category['category']); ?>" class="d-flex"> -->
                        <p><?php echo htmlspecialchars($category['category']); ?></p>
                        <p>(<?php echo $category['post_count']; ?>)</p>
                    </a>
                </li>
                <?php
            }
        } else {
            echo "<li><p>No categories found.</p></li>";
        }

        $conn->close();
        ?>
    </ul>
</aside>


<div class="most-recent-area">
    <!-- Section Title -->
    <div class="small-tittle mb-20">
        <h4>Most Recent</h4>
    </div>
    <!-- Details -->
    <div class="most-recent mb-40">
        
        <?php
       
       include 'Admin_Panel/Database/db_connection.php';

        $sqli = "SELECT id, title, author, published_date, image FROM posts ORDER BY published_date DESC LIMIT 5";
        $result = $conn->query($sqli);

        if ($result->num_rows > 0) {
            while ($article = $result->fetch_assoc()) {
                ?>

                <!-- Single -->
                <div class="most-recent-single">
                    
                    <div class="most-recent-capt">
                        <h4>
                            <a href="latest_news.php?id=<?php echo $article['id']; ?>">
                                <?php echo htmlspecialchars($article['title']); ?>
                            </a>
                        </h4>
                        <p>
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

        $conn->close();
        ?>
    </div>
</div>
                     
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
  

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

    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    
    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

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