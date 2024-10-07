<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Stock Today - News  </title>
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

    <?php
    // Include the database connection file
    include 'Admin_Panel/Database/db_connection.php';
    ?>

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
                                    <li class="title"><span class="flaticon-energy"></span> Stock - Today</li>
                                    <li>Daily News </li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-date">
                                    <li><span class="flaticon-calendar"></span>(+91)95378 55111</li>
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
                        <!--
                        Header Banner
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/gallery/header_card.png" alt="">
                            </div>
                        </div>-->
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
<div class="trending-area fix pt-25 gray-bg">
    <div class="container">
        <div class="trending-main">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Trending Top -->
                    <div class="slider-active">
                        <?php
                                           
                        $sql = "SELECT id, title, image, author, published_date FROM posts ORDER BY published_date DESC LIMIT 3";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($post = $result->fetch_assoc()) {
                                ?>
                                <!-- Single -->
                                <div class="single-slider">
                                    <div class="trending-top mb-20">
                                        <div class="trend-top-img">
                                            <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" class="card-img-top" alt="Blog Image">
                                            <div class="trend-top-cap">
                                                <h2>
                                                    <a href="latest_news.php?id=<?php echo htmlspecialchars($post['id']); ?>">
                                                        <?php echo htmlspecialchars($post['title']); ?>
                                                    </a>
                                                </h2>
                                                <p class="card-text">
                                                    <small class="text-muted">
                                                        by <?php echo htmlspecialchars($post['author']); ?> on <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                                                    </small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        } else {
                            echo "<p>No trending posts found.</p>";
                        }

                        $conn->close();
                        ?>
                    </div>
                </div>

                <div class="col-lg-4">
                 
                    <?php

                include 'Admin_Panel/Database/db_connection.php';

                    // Fetching additional posts for the right section
                    $sql = "SELECT id, title, image, author, published_date FROM posts ORDER BY published_date DESC LIMIT 3 OFFSET 3";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($post = $result->fetch_assoc()) {
                            ?>
                            <div class="single-slider">
                                <div class="trending-top mb-20">
                                    <div class="trend-top-img">
                                        <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" class="card-img-top" alt="Blog Image">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h4>
                                                <a href="latest_news.php?id=<?php echo htmlspecialchars($post['id']); ?>" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">
                                                    <?php echo htmlspecialchars($post['title']); ?>
                                                </a>
                                            </h4>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">
                                                by <?php echo htmlspecialchars($post['author']); ?> - <?php echo date('M d, Y', strtotime($post['published_date'])); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No additional posts found.</p>";
                    }

                    $conn->close();
                    ?>
                </div> 
            </div>
        </div>
    </div>
</div>

            
    <!-- Trending Area End -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                <div class="whats-news-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="row justify-content-between align-items-end mb-15">
                        <div class="col-xl-4">
                            <div class="section-tittle mb-30">
                                <h3>What's New</h3>
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
                                        <!-- <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a> -->
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
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                      
    <?php
   
   include 'Admin_Panel/Database/db_connection.php';

    $sql = "SELECT id, title,image, category, author, published_date FROM posts WHERE category = 'Business' ORDER BY published_date DESC LIMIT 2";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($post = $result->fetch_assoc()) {
            ?>
            <div class="whats-news-single mb-40">
                <div class="whates-img">
                    <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" alt="Post Image">
                </div>
                <div class="whates-caption">
                    <h3><a href="latest_news.php?id=<?php echo htmlspecialchars($post['id']); ?>">
                        <?php echo htmlspecialchars($post['title']); ?>
                    </a></h3>
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

                                <!-- Card two -->
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="row">
        <!-- Left Details Caption -->
        <div class="col-12"> 
            <?php
 
            include 'Admin_Panel/Database/db_connection.php';

            $sqli = "SELECT id, title, author, content, published_date, image FROM posts WHERE category = 'Travel' ORDER BY published_date DESC LIMIT 2";
            $result = $conn->query($sqli);

            if ($result->num_rows > 0) {
                while ($article = $result->fetch_assoc()) {
                    ?>
                    <div class="whats-news-single mb-40">
                        <div class="whates-img">
                            <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($article['image']); ?>" alt="" class="img-fluid"> <!-- Added img-fluid for responsiveness -->
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

<!-- Fashion ---->

     <!-- Card three -->
     <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
     <div class="row">
    <!-- Left Details Caption -->
  
        <?php

        include 'Admin_Panel/Database/db_connection.php';

        $sqli = "SELECT id, title, author, content, published_date, image FROM posts WHERE category = 'Fashion' ORDER BY published_date DESC LIMIT 2";
        $result = $conn->query($sqli);

        if ($result->num_rows > 0) {
            while ($article = $result->fetch_assoc()) {
                ?>
                <div class="whats-news-single mb-40">
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

        // Close connection
        $conn->close();
        ?>
    </div>
</div>
    
                                      
            
                                <!-- Technology three -->

<?php

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch technology news
    $stmt = $pdo->prepare("SELECT * FROM posts WHERE category = :category");
    $stmt->execute(['category' => 'Technology']);
    $newsArticles = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


<div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
    <div class="row">
        <!-- Left Details Caption -->
        <div class="col-12">
            <?php if (!empty($newsArticles)): ?>
               
                    <?php foreach ($newsArticles as $index => $article): ?>
                    <div class="whats-news-single mb-40">
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
                                <?php echo isset($article['publish_date']) ? date('M d, Y', strtotime($article['publish_date'])) : 'Now'; ?>
                            </span>
                        </div>
                    </div>
                    <?php if (($index + 1) % 2 == 0): ?>
                            </div><div class="row"> <!-- Start a new row every 2 articles -->
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No technology news available at the moment.</p>
                <?php endif; ?>
        </div>
    </div>
</div>


                             
                                <!-- card Five -->
                                <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                    <div class="row">
                                        <!-- Left Details Caption -->
                                        <div class="col-xl-6">
                                            <div class="whats-news-single mb-40">
                                                <div class="whates-img">
                                                    <img src="assets/img/gallery/whats_news_details1.png" alt="">
                                                </div>
                                                <div class="whates-caption">
                                                    <h4><a href="#">Secretart for Economic Air
                                                        plane that looks like</a></h4>
                                                    <span>by Alice cloe   -   Jun 19, 2020</span>
                                                    <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Right single caption -->
                                        <div class="col-xl-6 col-lg-12">
                                            <div class="row">
                                                <!-- single -->
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img1.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img2.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorb">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img3.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorg">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-6 col-md-6 col-sm-10">
                                                    <div class="whats-right-single mb-20">
                                                        <div class="whats-right-img">
                                                            <img src="assets/img/gallery/whats_right_img4.png" alt="">
                                                        </div>
                                                        <div class="whats-right-cap">
                                                            <span class="colorr">FASHION</span>
                                                            <h4><a href="latest_news.html">Portrait of group of friends ting eat. market in.</a></h4>
                                                            <p>Jun 19, 2020</p> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                <!-- Banner -->
                <div class="banner-one mt-20 mb-30">
                    <img src="" alt="">
                </div>
                </div>
                <div class="col-lg-4">
                    <!-- Flow Socail -->
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
                    <!-- Most Recent Area -->
                    <div class="most-recent-area">
    <!-- Section Title -->
    <div class="small-tittle mb-20">
        <h4>Most Recent</h4>
    </div>
    <!-- Details -->
    <div class="most-recent mb-40">
        <?php
      
      include 'Admin_Panel/Database/db_connection.php';

        $sql = "SELECT id, title, category, author, published_date, image FROM posts ORDER BY published_date DESC LIMIT 1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $article = $result->fetch_assoc();
            ?>
            <div class="most-recent-img">
                <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($article['image']); ?>" alt="">
                <div class="most-recent-cap">
                    <span class="bgbeg"><?php echo htmlspecialchars($article['category']); ?></span>
                    <h4><a href="latest_news.php?id=<?php echo $article['id']; ?>">
                        <?php echo htmlspecialchars($article['title']); ?>
                    </a></h4>
                    <p><?php echo htmlspecialchars($article['author']); ?>  |  
                        <?php echo date('M d, Y', strtotime($article['published_date'])); ?></p>
                </div>
            </div>
            <?php
        } else {
            echo "<p>No recent news available.</p>";
        }

        $conn->close();
        ?>
    </div>


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
</section>

 <!--   Weekly2-News start -->
 <div class="weekly2-news-area pt-50 pb-30 gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <div class="row">
                    <!-- Banner -->
                    <!--<div class="col-lg-3">
                        <div class="home-banner2 d-none d-lg-block">
                            <img src="assets/img/gallery/body_card2.png" alt="">
                        </div>-->
                    </div>
                    <div class="col-lg-9">
    <div class="slider-wrapper">
        <!-- Section Title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="small-tittle mb-30">
                    Trending Blogs
                </div>
            </div>
        </div>
        <!-- Slider -->
        <div class="row">
            <div class="col-lg-12">
                <div class="weekly2-news-active d-flex">
                    <?php
                    // Database connection
                  
                    include 'Admin_Panel/Database/db_connection.php';
                    // Fetching blog posts
                    $sql = "SELECT id, title, image, author, published_date FROM posts ORDER BY published_date DESC LIMIT 4"; // Adjust limit as necessary
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($blog = $result->fetch_assoc()) {
                            ?>
                            <!-- Single Blog Post -->
                            <div class="weekly2-single">
                            <div class="weekly2-img">
    <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($blog['image']); ?>" alt="Blog Image">
</div>

                                <div class="weekly2-caption">
                                    <h4>
                                        <a href="latest_news.php?id=<?php echo htmlspecialchars($blog['id']); ?>">
                                            <?php echo htmlspecialchars($blog['title']); ?>
                                        </a>
                                    </h4>
                                    <p>
                                        <?php echo htmlspecialchars($blog['author']); ?> | <?php echo date('F j, Y', strtotime($blog['published_date'])); ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<p>No blog posts found.</p>";
                    }

                    $conn->close();
                    ?>
                </div>
</div>
</div>
</div>
                </div>
                </div>
                </div>
 
                <?php
    // Include the database connection
    include 'Admin_Panel/Database/db_connection.php';

    // Fetch only 4 videos from the database (1 for large, 3 for small)
    $sql = "SELECT video_name FROM videos LIMIT 100";
    $result = $conn->query($sql);

    // Initialize an array to store video names
    $videos = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $videos[] = $row; // Store each fetched row in the $videos array
        }
    }
?>

<div class="youtube-area video-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="video-items-active">
                    
                    <!-- Display the first video as a large video (if exists) -->
                    <?php
                    if (count($videos) > 0) {
                        $videoPath = 'Admin_Panel/videos/' . htmlspecialchars($videos[0]['video_name']);
                        echo '<div class="video-items text-center">';
                        echo '<video controls class="w-100" style="max-height: 500px;">'; // Full width and larger height
                        echo '<source src="' . $videoPath . '" type="video/mp4">';
                        echo 'Your browser does not support the video tag.';
                        echo '</video>';
                        echo '</div>';
                    } else {
                        echo "<p>No videos found.</p>";
                    }
                    ?>
                    
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Display the next 3 videos in a 1-row, 3-column layout -->
            <?php
            if (count($videos) > 1) {
                // Loop through the next 3 videos starting from index 1
                for ($i = 1; $i < min(100, count($videos)); $i++) {
                    $videoPath = 'Admin_Panel/videos/' . htmlspecialchars($videos[$i]['video_name']);
                    
                    echo '<div class="col-md-4 col-sm-6 col-12">'; // 3-column layout for medium screens, stack on smaller screens
                    echo '<div class="video-items text-center">';
                    echo '<video controls class="w-100" style="max-height: 240px;">'; // Full width, smaller height
                    echo '<source src="' . $videoPath . '" type="video/mp4">';
                    echo 'Your browser does not support the video tag.';
                    echo '</video>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No additional videos found.</p>";
            }
            ?>
        </div>
    </div>
</div>

<?php
// Close the database connection
if ($conn && !$conn->connect_error) {
    $conn->close(); // Close the connection safely
}
?>

           
   <!-- End Start Video area-->


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
<!-- Search model End -->

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