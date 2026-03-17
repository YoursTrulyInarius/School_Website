<?php 
require_once 'config.php';
$page_title = "School Gallery";

// Fetch photos from database
$images_result = db_query("SELECT * FROM gallery ORDER BY created_at DESC");

include 'includes/header.php'; 
?>

<section id="gallery-hero" class="py-5 bg-dark-blue text-white text-center">
    <div class="container py-5">
        <h1 class="display-3 fw-bold mb-3 animate-fade-in">Campus <span class="text-warning">Life</span></h1>
        <p class="lead opacity-75">A glimpse into the vibrant environment and events at West Prime Horizon Inc.</p>
    </div>
</section>

<section id="gallery" class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-4">
            <?php 
            if (mysqli_num_rows($images_result) > 0):
                while($image = mysqli_fetch_assoc($images_result)): 
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card h-100 bg-white shadow-sm border-0 rounded-4 animate-fade-in">
                        <div class="gallery-img-wrapper overflow-hidden rounded-top-4">
                            <img src="<?php echo htmlspecialchars($image['image_path']); ?>" alt="<?php echo htmlspecialchars($image['caption']); ?>" class="img-fluid">
                        </div>
                        <?php if (!empty($image['caption'])): ?>
                            <div class="p-3">
                                <p class="mb-0 fw-semibold text-dark-blue text-center small"><?php echo htmlspecialchars($image['caption']); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php 
                endwhile;
            else:
                // Fallback static images if DB is empty
                $static_images = [
                    ['path' => './images/1.jpg', 'caption' => 'Academic Excellence'],
                    ['path' => './images/2.jpg', 'caption' => 'Modern Facilities'],
                    ['path' => './images/3.jpg', 'caption' => 'Student Life'],
                    ['path' => './images/4.jpg', 'caption' => 'Cultural Events'],
                    ['path' => './images/5.jpg', 'caption' => 'Sports Development'],
                    ['path' => './images/6.jpg', 'caption' => 'Graduation Day'],
                ];
                foreach ($static_images as $img):
            ?>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery-card h-100 bg-white shadow-sm border-0 rounded-4 animate-fade-in">
                        <div class="gallery-img-wrapper overflow-hidden rounded-top-4">
                            <img src="<?php echo $img['path']; ?>" alt="<?php echo $img['caption']; ?>" class="img-fluid">
                        </div>
                        <div class="p-3 text-center">
                            <p class="mb-0 fw-semibold text-dark-blue small"><?php echo $img['caption']; ?></p>
                        </div>
                    </div>
                </div>
            <?php 
                endforeach;
            endif; 
            ?>
        </div>
        
        <div class="text-center mt-5">
            <a href="admin_gallery.php" class="btn btn-outline-primary rounded-pill px-4">Admin: Manage Gallery</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
