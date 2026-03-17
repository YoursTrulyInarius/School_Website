<?php 
require_once 'config.php';
$page_title = "Academics";
include 'includes/header.php'; 
?>

<section id="academics-hero" class="py-5 bg-dark-blue text-white text-center">
    <div class="container py-5">
        <h1 class="display-3 fw-bold mb-3 animate-fade-in">Academic <span class="text-warning">Programs</span></h1>
        <p class="lead opacity-75 mx-auto" style="max-width: 700px;">Empowering students with 21st-century skills through our comprehensive Senior High School and College tracks.</p>
    </div>
</section>

<section id="programs" class="py-5">
    <div class="container py-5">
        <div class="row g-5">
            <!-- SHS Section -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">
                    <div class="bg-primary p-4 text-white">
                        <h2 class="h3 fw-bold mb-0">Senior High School</h2>
                        <p class="small opacity-75 mb-0">Preparation for higher education & career</p>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item d-flex align-items-center py-3 border-light">
                                <span class="badge bg-warning text-dark-blue me-3">STEM</span>
                                <div>
                                    <h5 class="mb-0 fw-bold">STEM</h5>
                                    <small class="text-muted">Science, Tech, Engineering, & Math</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3 border-light">
                                <span class="badge bg-warning text-dark-blue me-3">ABM</span>
                                <div>
                                    <h5 class="mb-0 fw-bold">ABM</h5>
                                    <small class="text-muted">Accountancy, Business, & Management</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3 border-light">
                                <span class="badge bg-warning text-dark-blue me-3">HUMSS</span>
                                <div>
                                    <h5 class="mb-0 fw-bold">HUMSS</h5>
                                    <small class="text-muted">Humanities & Social Sciences</small>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-3 border-light">
                                <span class="badge bg-warning text-dark-blue me-3">VOC</span>
                                <div>
                                    <h5 class="mb-0 fw-bold">Tech-Voc Tracks</h5>
                                    <small class="text-muted">CSS and EIM Concentrations</small>
                                </div>
                            </li>
                        </ul>
                        <a href="contact.php" class="btn btn-primary btn-lg w-100 rounded-pill shadow-sm">Inquire for Enrollment</a>
                    </div>
                </div>
            </div>

            <!-- College Section -->
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow rounded-4 overflow-hidden">
                    <div class="bg-dark-blue p-4 text-white">
                        <h2 class="h3 fw-bold mb-0">College Programs</h2>
                        <p class="small opacity-75 mb-0">Professional skill development</p>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <ul class="list-group list-group-flush mb-4">
                            <li class="list-group-item py-3 border-light d-flex justify-content-between align-items-center">
                                <span class="fw-bold">BS Information Technology (BSIT)</span>
                                <span class="text-primary fs-4">💻</span>
                            </li>
                            <li class="list-group-item py-3 border-light d-flex justify-content-between align-items-center">
                                <span class="fw-bold">BTVTED (Technical Education)</span>
                                <span class="text-primary fs-4">🎓</span>
                            </li>
                            <li class="list-group-item py-3 border-light d-flex justify-content-between align-items-center">
                                <span class="fw-bold">BA English Language Studies (BAELS)</span>
                                <span class="text-primary fs-4">📖</span>
                            </li>
                            <li class="list-group-item py-3 border-light d-flex justify-content-between align-items-center">
                                <span class="fw-bold">Associate in Computer Tech (ACT)</span>
                                <span class="text-primary fs-4">⚙️</span>
                            </li>
                        </ul>
                        <a href="contact.php" class="btn btn-outline-dark-blue btn-lg w-100 rounded-pill shadow-sm mt-auto">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
