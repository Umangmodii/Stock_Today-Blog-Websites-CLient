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
        .video-thumbnail {
            cursor: pointer;
        }
        .video-player {
            display: none;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php
// Include the database connection file
include 'Database/db_connection.php';

// Handle video upload
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'upload_video') {
    $video_name = $_FILES['video']['name'];
    $video_tmp_name = $_FILES['video']['tmp_name'];
    $video_folder = 'videos/' . $video_name;

    // Check if the video is valid and move to the target directory
    if (move_uploaded_file($video_tmp_name, $video_folder)) {
        $stmt = $conn->prepare("INSERT INTO videos (video_name) VALUES (?)");
        $stmt->bind_param("s", $video_name);
        $stmt->execute();
        $stmt->close();
        echo "<div class='alert alert-success'>Video uploaded successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to upload video.</div>";
    }
}

// Handle video deletion
if (isset($_GET['delete_video_id'])) {
    $video_id = $_GET['delete_video_id'];

    // Get the video name from the database
    $stmt = $conn->prepare("SELECT video_name FROM videos WHERE id = ?");
    $stmt->bind_param("i", $video_id);
    $stmt->execute();
    $stmt->bind_result($video_name);
    $stmt->fetch();
    $stmt->close();

    // Delete the video file from the server
    $video_path = 'videos/' . $video_name;
    if (file_exists($video_path)) {
        unlink($video_path); // Delete the video file
    }

    // Remove the video record from the database
    $stmt = $conn->prepare("DELETE FROM videos WHERE id = ?");
    $stmt->bind_param("i", $video_id);
    $stmt->execute();
    $stmt->close();

    echo "<div class='alert alert-success'>Video deleted successfully!</div>";
}

// Fetch videos from the database
$videos = [];
$result = $conn->query("SELECT * FROM videos");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $videos[] = $row;
    }
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
    <h2>Manage Videos</h2>
    
    <!-- Video Upload Form -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Upload Video</h5>
            <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="action" value="upload_video">
                <div class="mb-3">
                    <label for="video" class="form-label">Select Video</label>
                    <input type="file" class="form-control" name="video" accept="video/mp4" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload Video</button>
            </form>
        </div>
    </div>

    <!-- Video Player Section -->
    <div class="video-player" id="videoPlayer">
        <video id="currentVideo" width="100%" controls>
            <source id="videoSource" src="" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <!-- Video Table -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Uploaded Videos</h5>
            <div class="row">
                <?php foreach ($videos as $video): ?>
                    <div class="col-md-4">
                        <div class="video-thumbnail" onclick="playVideo('<?php echo 'videos/' . $video['video_name']; ?>')">
                            <video width="100%" height="auto">
                                <source src="<?php echo 'videos/' . $video['video_name']; ?>" type="video/mp4">
                            </video>
                            <p><?php echo $video['video_name']; ?></p>
                        </div>
                        <a href="?delete_video_id=<?php echo $video['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this video?');">Delete</a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Stock Today | Admin Panel</p>
    </footer>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5+5T5KwB5OtG5t7rWxY5mI+P82Bhb1cOHb5r3hJ" crossorigin="anonymous"></script>
<script>
    function toggleSidebar() {
        var sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('active');
    }

    function playVideo(videoPath) {
        var player = document.getElementById('currentVideo');
        var source = document.getElementById('videoSource');
        source.src = videoPath;
        player.load();
        player.play();
        document.getElementById('videoPlayer').style.display = 'block';
    }
</script>
</body>
</html>
