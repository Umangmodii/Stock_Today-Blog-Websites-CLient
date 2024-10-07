<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News HTML-5 Template</title>
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
    <!-- Preloader End -->

    <!-- Header Start -->
    <header>
        <div class="header-area">
            <div class="main-header">
                <div class="header-top black-bg d-none d-sm-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li class="title"><span class="flaticon-energy"></span> Trending News</li>
                                        <li>Latest updates and insights from the business world</li>
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
                                    <a href="index.php"><img src="assets/img/logo/logo_1.png.jpg" alt="Logo"></a>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                                <div class="sticky-logo">
                                    <a href="index.php"><img src="assets/img/logo/logo_1.png.jpg" alt="Logo"></a>
                                </div>
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
                                    <ul class="header-social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/@Stocktoday-news/videos"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
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
    </header>
    <!-- Header End -->
    <div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <!-- Nav Card -->
            <div class="tab-content" id="nav-tabContent">
                <!-- Card for Business category -->
                <div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-business-tab">
                <a href="index.php" class="btn btn-primary mb-4">Back to Home</a>
                    <h2 class="mb-4">Top Travel Posts</h2>
                    <div class="row">
                        <?php
                        // Database connection
                        // include 'Admin_Panel/Database/db_connection.php';

                        $topCategory = 'Travel'; 
                        $topSql = "SELECT id, title, image, author, published_date FROM posts WHERE category = ? ORDER BY published_date DESC LIMIT 500"; // Fetching top 3 posts
                        $topStmt = $conn->prepare($topSql);
                        $topStmt->bind_param("s", $topCategory); 
                        $topStmt->execute();
                        $topResult = $topStmt->get_result();

                        if ($topResult->num_rows > 0) {
                            while ($topPost = $topResult->fetch_assoc()) {
                                ?>
                                <div class="col-md-4 mb-4">
                                    <div class="whats-news-single mb-40">
                                        <div class="whates-img">
                                            <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($topPost['image']); ?>" alt="Post Image" class="img-fluid">
                                        </div>
                                        <div class="whates-caption">
                                            <h3>
                                                <a href="latest_news.php?id=<?php echo htmlspecialchars($topPost['id']); ?>">
                                                    <?php echo htmlspecialchars($topPost['title']); ?>
                                                </a>
                                            </h3>
                                            <span>by <?php echo htmlspecialchars($topPost['author']); ?> - <?php echo date('M d, Y', strtotime($topPost['published_date'])); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No top business posts found.</p>";
                        }

                        $topStmt->close();
                        ?>
                    </div>

                    <h2 class="mb-4">Recent Travel Posts</h2>
                    <div class="row">
                        <?php
                     
                        $limit = 10; 
                        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1; 
                        $offset = ($page - 1) * $limit; 

                        $sql = "SELECT id, title, image, category, author, published_date FROM posts WHERE category = ? ORDER BY published_date DESC LIMIT ? OFFSET ?";
                        $stmt = $conn->prepare($sql);
                        $stmt->bind_param("sii", $category, $limit, $offset); 
                        $stmt->execute();
                        $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($post = $result->fetch_assoc()) {
                                ?>
                                <div class="col-md-6 mb-4">
                                    <div class="whats-news-single mb-40">
                                        <div class="whates-img">
                                            <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image" class="img-fluid">
                                        </div>
                                        <div class="whates-caption">
                                            <h3>
                                                <a href="latest_news.php?id=<?php echo htmlspecialchars($post['id']); ?>">
                                                    <?php echo htmlspecialchars($post['title']); ?>
                                                </a>
                                            </h3>
                                            <span>by <?php echo htmlspecialchars($post['author']); ?> - <?php echo date('M d, Y', strtotime($post['published_date'])); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No business-related blog posts found.</p>";
                        }

                        $sqlCount = "SELECT COUNT(*) as total FROM posts WHERE category = ?";
                        $stmtCount = $conn->prepare($sqlCount);
                        $stmtCount->bind_param("s", $category);
                        $stmtCount->execute();
                        $resultCount = $stmtCount->get_result();
                        $totalPosts = $resultCount->fetch_assoc()['total'];
                        $totalPages = ceil($totalPosts / $limit); 

                        $stmt->close();
                        $stmtCount->close();
                        $conn->close();
                        ?>
                    </div>

           
                  <div class="row">
    <div class="col-12">
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php if ($page > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page - 1; ?>">Previous</a>
                    </li>
                <?php endif; ?>

                <?php
                $pageLimit = 2; 
                for ($i = max(1, $page - $pageLimit); $i <= min($totalPages, $page + $pageLimit); $i++): ?>
                    <li class="page-item <?php echo ($i === $page) ? 'active' : ''; ?>">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>

                <?php if ($page < $totalPages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $page + 1; ?>">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div>


                </div>
            </div>
        </div>
    </div>
</div>
                       

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

   
    <!-- Footer End -->

    <!-- JS here -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>


