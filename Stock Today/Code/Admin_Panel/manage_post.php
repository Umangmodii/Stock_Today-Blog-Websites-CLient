<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Post - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            padding-top: 20px;
            transition: all 0.3s;
        }
        .sidebar a {
            padding: 15px;
            text-align: left;
            text-decoration: none;
            color: white;
            display: block;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: margin-left 0.3s;
        }
        .navbar {
            margin-left: 250px;
            transition: margin-left 0.3s;
        }
        .card {
            margin-bottom: 20px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            width: 100%;
            bottom: 0;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
                display: none;
            }
            .sidebar.active {
                display: block;
            }
            .main-content, .navbar {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

<?php
// Include the database connection file
include 'Database/db_connection.php';

// Check if the form is submitted for adding a post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'add') {
    // Get form data
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $published_date = $_POST['date'];
    $content = $_POST['content'];

    // Handle file upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image_name = basename($_FILES['image']['name']);
        $target_dir = __DIR__ . "/uploads/";

        // Check if uploads directory exists, if not create it
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true);
        }

        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            // Prepare an SQL statement to insert the post into the database
            $stmt = $conn->prepare("INSERT INTO posts (title, author, category, published_date, image, content) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $title, $author, $category, $published_date, $image_name, $content);

            if ($stmt->execute()) {
                echo "<script>alert('Post uploaded successfully!');</script>";
            } else {
                echo "<script>alert('Error uploading post: ".$stmt->error."');</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('Error uploading image.');</script>";
        }
    } else {
        echo "<script>alert('No image uploaded or there was an upload error.');</script>";
    }
}

// Check if the request is to update a post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'update') {
    // Get form data
    $postId = $_POST['post_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $published_date = $_POST['date'];
    $content = $_POST['content'];

    // Prepare an SQL statement to update the post in the database
    $stmt = $db->prepare("UPDATE posts SET title=?, author=?, category=?, published_date=?, content=? WHERE id=?");
    $stmt->bind_param("sssssi", $title, $author, $category, $published_date, $content, $postId);

    if ($stmt->execute()) {
        echo "<script>alert('Post updated successfully!');</script>";
    } else {
        echo "<script>alert('Error updating post: ".$stmt->error."');</script>";
    }
    $stmt->close();
}

// Check if the request is to delete a post
if (isset($_GET['delete_id'])) {
    $postId = $_GET['delete_id'];
    $stmt = $conn->prepare("DELETE FROM posts WHERE id=?");
    $stmt->bind_param("i", $postId);

    if ($stmt->execute()) {
        echo "<script>alert('Post deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting post: ".$stmt->error."');</script>";
    }
    $stmt->close();
}
?>

<!-- Toggle Button for Sidebar -->
<button class="btn btn-dark toggle-sidebar-btn" onclick="toggleSidebar()">☰ Toggle Sidebar</button>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <a href="index.php">Dashboard</a>
    <a href="manage_post.php">Manage Blog</a>
    <a href="manage_videos.php">Manage Videos</a>
  </div>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Navbar with Logo -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://pnghq.com/wp-content/uploads/pnghq.com-stock-market-icon-line-hi-6.png" alt="Logo" width="30" height="30">
                Stock Today | Admin Panel
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <div class="card mt-4">
    <div class="card-header">
        Add New Blogs
    </div>
    <div class="card-body">
        <form action="manage_post.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="add">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Business">Business</option>
                    <option value="Travel">Travel</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Sports">Sports</option>
                    <option value="Technology">Technology</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Published Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Upload Image</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Upload Post</button>
        </form>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        Manage Blogs
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Published Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                 
                    $results_per_page = 10;

                    $result = $conn->query("SELECT COUNT(*) AS total FROM posts");
                    $row = $result->fetch_assoc();
                    $total_results = $row['total'];

                    $number_of_pages = ceil($total_results / $results_per_page);

                  
                    $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                    if ($current_page < 1) {
                        $current_page = 1;
                    } elseif ($current_page > $number_of_pages) {
                        $current_page = $number_of_pages;
                    }

                  
                    $start_limit = ($current_page - 1) * $results_per_page;

                
                    $result = $conn->query("SELECT * FROM posts LIMIT $start_limit, $results_per_page");
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['title'] . "</td>";
                        echo "<td>" . $row['author'] . "</td>";
                        echo "<td>" . $row['category'] . "</td>";
                        echo "<td>" . date('M d, Y', strtotime($row['published_date'])) . "</td>";
                        echo '<td>
                                <a href="manage_post.php?edit_id=' . $row['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                                <a href="manage_post.php?delete_id=' . $row['id'] . '" class="btn btn-danger btn-sm">Delete</a>
                              </td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>


            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <?php
                    for ($page = 1; $page <= $number_of_pages; $page++) {
                        if ($page == $current_page) {
                            echo '<li class="page-item active"><a class="page-link" href="#">' . $page . '</a></li>';
                        } else {
                            echo '<li class="page-item"><a class="page-link" href="manage_post.php?page=' . $page . '">' . $page . '</a></li>';
                        }
                    }
                    ?>
                </ul>
            </nav>
        </div>
    </div>
</div>

    <?php
    // Check if the request is to edit a post
    if (isset($_GET['edit_id'])) {
        $postId = $_GET['edit_id'];
        $stmt = $conn->prepare("SELECT * FROM posts WHERE id=?");
        $stmt->bind_param("i", $postId);
        $stmt->execute();
        $result = $stmt->get_result();
        $post = $result->fetch_assoc();
    ?>
        <div class="card mt-4">
    <div class="card-header">
        Edit Post
    </div>
    <div class="card-body">
        <form action="manage_post.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?php echo $post['title']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="<?php echo $post['author']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-control" id="category" name="category" required>
                    <option value="Business" <?php if ($post['category'] == 'Business') echo 'selected'; ?>>Business</option>
                    <option value="Travel" <?php if ($post['category'] == 'Travel') echo 'selected'; ?>>Travel</option>
                    <option value="Fashion" <?php if ($post['category'] == 'Fashion') echo 'selected'; ?>>Fashion</option>
                  
                    <option value="Technology" <?php if ($post['category'] == 'Technology') echo 'selected'; ?>>Technology</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Published Date</label>
                <input type="date" class="form-control" id="date" name="date" value="<?php echo $post['published_date']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5" required><?php echo $post['content']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>
</div>

    <?php
    }
    ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Stock Today | Admin Panel</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-1O9en0l8FFOUMp0QK7AP5oHc8JtZMKq1fM+aBRBo43LRdIZcEKcI8MwzK6z8U9v7" crossorigin="anonymous"></script>
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById("sidebar");
        sidebar.classList.toggle("active");
    }
</script>
</body>
</html>
