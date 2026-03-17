<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . " - West Prime Horizon" : "West Prime Horizon Inc."; ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Outfit for a premium feel -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="./images/images.jpeg" alt="School Logo" width="40" height="40" class="rounded-circle me-2 border border-2 border-white shadow-sm">
            <span class="fw-bold text-white">West Prime Horizon <span class="d-none d-sm-inline">Inc.</span></span>
        </a>
        <button class="navbar-toggler border-0 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item mx-lg-2"><a class="nav-link text-white fw-semibold" href="index.php">Home</a></li>
                <li class="nav-item mx-lg-2"><a class="nav-link text-white fw-semibold" href="about.php">About</a></li>
                <li class="nav-item mx-lg-2"><a class="nav-link text-white fw-semibold" href="academics.php">Academics</a></li>
                <li class="nav-item mx-lg-2"><a class="nav-link text-white fw-semibold" href="contact.php">Contact</a></li>
                <li class="nav-item mx-lg-2"><a class="nav-link text-white fw-semibold" href="gallery.php">Gallery</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="nav-spacer" style="height: 80px;"></div>
