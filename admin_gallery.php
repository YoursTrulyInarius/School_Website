<?php 
require_once 'config.php';
$page_title = "Admin - Gallery Manager";

$status_message = "";
$status_type = "";

// Handle Upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['upload'])) {
    $caption = db_escape($_POST['caption']);
    $target_dir = "images/uploads/";
    
    // Create directory if it doesn't exist
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    
    $file_extension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    $new_filename = uniqid() . '.' . $file_extension;
    $target_file = $target_dir . $new_filename;
    
    // Validate image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO gallery (image_path, caption) VALUES ('$target_file', '$caption')";
            if (db_query($sql)) {
                $status_message = "Photo uploaded successfully!";
                $status_type = "success";
            } else {
                $status_message = "Database error: " . mysqli_error($link);
                $status_type = "danger";
            }
        } else {
            $status_message = "Error uploading file.";
            $status_type = "danger";
        }
    } else {
        $status_message = "File is not an image.";
        $status_type = "danger";
    }
}

include 'includes/header.php'; 
?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow rounded-4 p-4 p-md-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bold mb-3">Gallery <span class="text-primary">Manager</span></h1>
                    <p class="text-muted">Add new photos to the school gallery.</p>
                </div>

                <?php if ($status_message): ?>
                    <div class="alert alert-<?php echo $status_type; ?> rounded-3 mb-4">
                        <?php echo $status_message; ?>
                    </div>
                <?php endif; ?>

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-4">
                        <label class="form-label fw-bold">Select Image</label>
                        <input type="file" name="image" class="form-control bg-light p-3" accept="image/*" required>
                        <small class="text-muted">Recommended: Landscape orientation, max 2MB.</small>
                    </div>
                    <div class="mb-5">
                        <label class="form-label fw-bold">Caption</label>
                        <input type="text" name="caption" class="form-control bg-light p-3" placeholder="e.g., Annual Sports Meet 2025" required>
                    </div>
                    <div class="d-flex gap-3">
                        <button type="submit" name="upload" class="btn btn-primary btn-lg flex-grow-1 py-3 fw-bold rounded-pill">Upload Photo</button>
                        <a href="gallery.php" class="btn btn-outline-secondary btn-lg py-3 px-4 rounded-pill">Back</a>
                    </div>
                </form>
            </div>
            
            <div class="mt-5 text-center">
                <p class="small text-muted">Note: This is a simplified admin interface for demonstration purposes.</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
