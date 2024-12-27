<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
        }
        .gallery-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        img {
            max-width: 100%;
            height: 300px; /* Adjust height */
            border-radius: 8px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }
        .card {
            position: relative;
            overflow: hidden;
        }
        .no-records {
            text-align: center;
            padding: 20px;
            font-size: 18px;
            color: #666;
        }
        .pagination {
            justify-content: center;
            padding: 20px 0;
        }
        .pagination a {
            color: #4CAF50;
            padding: 8px 12px;
            border: 1px solid #ddd;
            text-decoration: none;
            margin: 0 4px;
            border-radius: 5px;
        }
        .pagination a.active {
            background-color: #4CAF50;
            color: white;
        }
        .pagination a:hover {
            background-color: #45a049;
            color: white;
        }
    </style>
</head>
<body>

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <img src="channels4_profile (2).jpg" alt="Logo" class="logo-img">
            <h1 class="sitename">Lxury Dream Cars</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="forms/orderbook.php">Register Now</a>
    </div>
</header>

<?php
// Database connection
$cn = mysqli_connect("localhost", "root", "", "caradmin");

if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Pagination settings
$limit = 12; // Images per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Fetch records from the database
$q_fetch = "SELECT * FROM uploads LIMIT $limit OFFSET $offset";
$result = mysqli_query($cn, $q_fetch);

// Count total images for pagination
$total_query = "SELECT COUNT(*) FROM uploads";
$total_result = mysqli_query($cn, $total_query);
$total_images = mysqli_fetch_row($total_result)[0];
$total_pages = ceil($total_images / $limit);
?>

<div class="gallery-container">
    <h3>Image Gallery</h3>
    <div class="row">
        <?php
        if ($result) {
            $count = 0;
            while ($r = mysqli_fetch_assoc($result)) {
                if ($count % 4 == 0 && $count > 0) {
                    echo '</div><div class="row">'; // Break row every 4 images
                }
                echo '<div class="col-md-3 mb-4">';
                echo '<img src="admin/uploads/' . basename($r['image_path']) . '" alt="Image" class="card">';
                echo '</div>';
                $count++;
            }
        } else {
            echo '<p class="no-records">No records found</p>';
        }
        ?>
    </div>
</div>



</body>
</html>
