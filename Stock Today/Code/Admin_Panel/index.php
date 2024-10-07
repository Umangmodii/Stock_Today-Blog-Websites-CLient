<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Stock Today || Admin Panel</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    .navbar-brand img {
      height: 50px;
      margin-right: 10px;
    }
    .toggle-sidebar-btn {
      display: none;
    }
    /* Responsive Sidebar */
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
      .toggle-sidebar-btn {
        display: block;
      }
    }
    /* Responsive Cards */
    @media (max-width: 768px) {
      .col-sm-6, .col-md-4 {
        width: 100%;
        margin-bottom: 20px;
      }
    }
    /* Responsive Table */
    .table-responsive {
      margin-top: 20px;
    }
    /* Footer */
    footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 10px 0;
      position: relative;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>

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
          <img src="https://pnghq.com/wp-content/uploads/pnghq.com-stock-market-icon-line-hi-6.png" alt="Logo">
          Stock Today | Admin Panel
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
   
      </div>
    </nav>

    <div class="container mt-4">
    <div class="row">
        <?php
       
       include 'Database/db_connection.php';

        // Count total posts
        $sqlPosts = "SELECT COUNT(*) AS total_posts FROM posts";
        $resultPosts = $conn->query($sqlPosts);
        $totalPosts = ($resultPosts && $resultPosts->num_rows > 0) ? $resultPosts->fetch_assoc()['total_posts'] : 0;

        // Count total categories
        $sqlCategories = "SELECT COUNT(DISTINCT category) AS total_categories FROM posts";
        $resultCategories = $conn->query($sqlCategories);
        $totalCategories = ($resultCategories && $resultCategories->num_rows > 0) ? $resultCategories->fetch_assoc()['total_categories'] : 0;

        // Count total videos (assuming you have a 'videos' table)
        $sqlVideos = "SELECT COUNT(*) AS total_videos FROM videos"; // Adjust the table name if necessary
        $resultVideos = $conn->query($sqlVideos);
        $totalVideos = ($resultVideos && $resultVideos->num_rows > 0) ? $resultVideos->fetch_assoc()['total_videos'] : 0;

        $conn->close();
        ?>

        <div class="col-sm-6 col-md-4">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Posts</h5>
                    <p class="card-text"><?php echo htmlspecialchars($totalPosts); ?></p>
                </div>
            </div>
        </div>
      
        <div class="col-sm-6 col-md-4">
            <div class="card text-white bg-warning">
                <div class="card-body">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text"><?php echo htmlspecialchars($totalCategories); ?></p>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5 class="card-title">Total Videos</h5>
                    <p class="card-text"><?php echo htmlspecialchars($totalVideos); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>



   
  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&copy; 2024 Stock Today Admin Panel. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
