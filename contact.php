<?php 
require_once 'config.php';
$page_title = "Contact Us";

$message_sent = false;
$error_message = "";

// Handle Form Submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['send_message'])) {
    $name = db_escape($_POST['name']);
    $email = db_escape($_POST['email']);
    $message = db_escape($_POST['message']);

    if (!empty($name) && !empty($email) && !empty($message)) {
        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
        if (db_query($sql)) {
            $message_sent = true;
        } else {
            $error_message = "Oops! Something went wrong. Please try again later.";
        }
    } else {
        $error_message = "Please fill in all fields.";
    }
}

// Fetch FAQs
$faqs_result = db_query("SELECT * FROM faqs ORDER BY created_at DESC");

include 'includes/header.php'; 
?>

<section id="contact-hero" class="py-5 bg-primary text-white text-center">
    <div class="container py-5">
        <h1 class="display-3 fw-bold mb-3 animate-fade-in">Connect With <span class="text-warning">Us</span></h1>
        <p class="lead opacity-75">Have questions about admissions or our programs? We're here to help.</p>
    </div>
</section>

<section id="contact-info" class="py-5">
    <div class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center hover-lift">
                    <span class="fs-1 mb-3">📍</span>
                    <h5 class="fw-bold">Visit Us</h5>
                    <p class="text-muted small">V. Sagun St., Pagadian City, Philippines</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center hover-lift">
                    <span class="fs-1 mb-3">📞</span>
                    <h5 class="fw-bold">Call Us</h5>
                    <p class="text-muted small">+123-456-7890<br>+123-098-7654</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm p-4 text-center hover-lift">
                    <span class="fs-1 mb-3">📧</span>
                    <h5 class="fw-bold">Email Us</h5>
                    <p class="text-muted small">sonjeevcabardo69@gmail.com<br>info@westprime.edu.ph</p>
                </div>
            </div>
        </div>

        <div class="row g-5">
            <div class="col-lg-6">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100">
                    <h2 class="fw-bold mb-4">Send us a <span class="text-primary">Message</span></h2>
                    
                    <?php if ($message_sent): ?>
                        <div class="alert alert-success border-0 shadow-sm rounded-4 p-4 mb-4">
                            <h5 class="fw-bold m-0 text-success">✅ Thank you!</h5>
                            <p class="m-0 text-success opacity-75">Your message has been sent successfully. We'll get back to you soon.</p>
                        </div>
                    <?php endif; ?>

                    <?php if ($error_message): ?>
                        <div class="alert alert-danger border-0 shadow-sm rounded-4 p-4 mb-4">
                            <p class="m-0"><?php echo $error_message; ?></p>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" class="form-control bg-light border-0 p-3 rounded-3" placeholder="Enter your name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" class="form-control bg-light border-0 p-3 rounded-3" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Message</label>
                            <textarea name="message" class="form-control bg-light border-0 p-3 rounded-3" rows="5" placeholder="How can we help you?" required></textarea>
                        </div>
                        <button type="submit" name="send_message" class="btn btn-primary btn-lg w-100 py-3 fw-bold rounded-pill shadow-sm">Send Message</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="h-100">
                    <h2 class="fw-bold mb-4">Frequently Asked <span class="text-primary">Questions</span></h2>
                    <div class="accordion accordion-flush" id="faqAccordion">
                        <?php 
                        if (mysqli_num_rows($faqs_result) > 0):
                            $i = 0;
                            while($faq = mysqli_fetch_assoc($faqs_result)): 
                                $i++;
                        ?>
                            <div class="accordion-item mb-3 border-0 rounded-4 overflow-hidden shadow-sm">
                                <h3 class="accordion-header" id="heading<?php echo $i; ?>">
                                    <button class="accordion-button fw-bold text-dark-blue collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i; ?>">
                                        <?php echo htmlspecialchars($faq['question']); ?>
                                    </button>
                                </h3>
                                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body p-4 bg-light-blue text-muted">
                                        <?php echo htmlspecialchars($faq['answer']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            endwhile;
                        else:
                        ?>
                            <p class="text-muted">No FAQs found at the moment.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
