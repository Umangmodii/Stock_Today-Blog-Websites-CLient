<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$servername = "localhost";
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "Blogs"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get post ID from URL
$post_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Fetch post details
$sql = "SELECT title, author, content, published_date, image FROM posts WHERE id = $post_id";
$result = $conn->query($sql);

// Fetch other posts for the sidebar (including images and descriptions)
$other_posts_sql = "SELECT id, title, image, content FROM posts WHERE id != $post_id LIMIT 5"; // Limit to 5 posts
$other_posts_result = $conn->query($other_posts_sql);

if ($result->num_rows > 0) {
    $post = $result->fetch_assoc();
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title><?php echo htmlspecialchars($post['title']); ?></title>
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Stock Today</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="manage_post.php">Blog</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1><?php echo htmlspecialchars($post['title']); ?></h1>
                    <p><small class="text-muted">by <?php echo htmlspecialchars($post['author']); ?> on <?php echo date('M d, Y', strtotime($post['published_date'])); ?></small></p>
                    <img src="Admin_Panel/uploads/<?php echo htmlspecialchars($post['image']); ?>" class="img-fluid" alt="Post Image">
                    <div class="mt-4">
                        <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
                    </div>
                    <a href="manage_post.php" class="btn btn-primary">Back to Blog</a>
                </div>
                <div class="col-lg-4">
                    <h4>Other Blog Posts</h4>
                    <ul class="list-group">
                        <?php
                        if ($other_posts_result->num_rows > 0) {
                            while ($other_post = $other_posts_result->fetch_assoc()) {
                                // Fetch a short description by limiting the content
                                $short_description = nl2br(htmlspecialchars(substr($other_post['content'], 0, 100))) . '...';
                                ?>
                                <li class="list-group-item">
                                    <a href="post_detail.php?id=<?php echo $other_post['id']; ?>">
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
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-light text-center py-4">
            <div class="container">
                <p class="mb-0">&copy; 2024 Stock Today. All rights reserved.</p>
                <p><a href="privacy_policy.php">Privacy Policy</a> | <a href="terms_of_service.php">Terms of Service</a></p>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>
    <?php
} else {
    echo "<div class='container my-5'>Post not found.</div>";
}

// Close connection
$conn->close();
?>
