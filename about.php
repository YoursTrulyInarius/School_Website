<?php 
require_once 'config.php';
$page_title = "About Us";
include 'includes/header.php'; 
?>

<section id="about" class="py-5">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0 animate-fade-in">
                <h2 class="display-4 fw-bold mb-4">Dedicated to <span class="text-warning">Excellence</span></h2>
                <p class="lead text-muted mb-4">West Prime Horizon Inc. is deeply committed to fostering excellence in education, offering a diverse and comprehensive range of programs designed to equip students with the knowledge, skills, and experience they need to thrive.</p>
                <div class="border-start border-4 border-warning ps-4 my-4">
                    <p class="fst-italic text-dark-blue fw-medium fs-5">"Education is not just about imparting knowledge; it’s about shaping individuals into confident, capable, and forward-thinking members of society."</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="./images/wep.jpg" alt="About Us" class="img-fluid rounded-4 shadow-lg">
                    <div class="position-absolute bottom-0 end-0 bg-warning p-4 rounded-4 shadow transform-translate-middle d-none d-md-block" style="translate: 20px 20px;">
                        <h4 class="fw-bold m-0 text-dark-blue">EST. 2025</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-md-4">
                <div class="p-4 bg-light rounded-4 h-100 hover-lift shadow-sm">
                    <h4 class="fw-bold mb-3 text-primary">Dynamic Learning</h4>
                    <p class="small text-muted mb-0">Our curriculum blends academic rigor with practical application to ensure students are well-versed in both theory and real-world skills.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-light rounded-4 h-100 hover-lift shadow-sm">
                    <h4 class="fw-bold mb-3 text-primary">Expert Mentors</h4>
                    <p class="small text-muted mb-0">Highly qualified faculty members dedicated to guiding and supporting students throughout their entire educational journey.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-4 bg-light rounded-4 h-100 hover-lift shadow-sm">
                    <h4 class="fw-bold mb-3 text-primary">Career Ready</h4>
                    <p class="small text-muted mb-0">Strong industry partnerships and internship opportunities provide valuable professional connections and experience.</p>
                </div>
            </div>
        </div>
        
        <div class="mt-5 pt-4 text-center">
            <p class="text-muted mx-auto" style="max-width: 800px;">West Prime Horizon Inc. is more than just an educational institution — it is a vibrant and supportive community where students are empowered to dream big, push boundaries, and achieve their full potential.</p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
