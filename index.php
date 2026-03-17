<?php 
require_once 'config.php';
$page_title = "Home";
include 'includes/header.php'; 
?>

<section id="home" class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-start home-content animate-fade-in">
                <h1 class="display-3 fw-bold mb-4">Welcome to <span class="text-warning">West Prime Horizon</span></h1>
                <p class="lead mb-5 text-white-75">Your future begins here! We provide world-class education and a nurturing environment for every student to transform aspirations into reality.</p>
                <div class="d-flex gap-3">
                    <a href="about.php" class="btn btn-warning btn-lg px-4 py-3 fw-bold shadow-sm">Learn More</a>
                    <a href="academics.php" class="btn btn-outline-light btn-lg px-4 py-3 fw-bold shadow-sm">Explore Programs</a>
                </div>
            </div>
            <div class="col-lg-5 d-none d-lg-block">
                <div class="hero-image-container p-3 border border-warning border-2 rounded-4 shadow-lg rotate-3">
                    <img src="./images/wep.jpg" alt="Campus" class="img-fluid rounded-3 shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="vision-mission" class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4 hover-lift">
                    <div class="card-body">
                        <div class="icon-box mb-4 bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fs-2">👁️</span>
                        </div>
                        <h2 class="h3 fw-bold mb-3">Our Vision</h2>
                        <p class="text-muted">West Prime Horizon Institute envisions mature, highly-skilled and competent graduates who live with a quality life locally and globally.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-0 shadow-sm p-4 hover-lift">
                    <div class="card-body">
                        <div class="icon-box mb-4 bg-warning text-dark rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                            <span class="fs-2">🎯</span>
                        </div>
                        <h2 class="h3 fw-bold mb-3">Our Mission</h2>
                        <p class="text-muted">West Prime Horizon Institute is committed to provide quality education for the 21st century learners through a highly competent teachers, holistic curriculum, and conducive learning environment with advance facilities and equipment.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="testimonials" class="py-5">
    <div class="container py-5 text-center">
        <div class="mb-5">
            <h2 class="display-5 fw-bold mb-3 text-dark-blue">Voices of <span class="text-warning">Success</span></h2>
            <p class="text-muted mx-auto" style="max-width: 600px;">Hear what our students have to say about their journey and experiences at West Prime Horizon.</p>
        </div>
        
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000" data-bs-pause="hover">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="testimonial-content p-5 bg-white shadow rounded-4 mx-auto" style="max-width: 800px;">
                        <img src="./images/aw.jpeg" alt="Student" class="rounded-circle mb-4 border border-4 border-warning shadow-sm" width="120" height="120">
                        <p class="fs-4 fst-italic mb-4 text-dark opacity-75">"The best experience I've ever had! The teachers are amazing and the facilities are top-notch!"</p>
                        <h4 class="fw-bold mb-0 text-primary">- Dodong Barok</h4>
                        <span class="text-muted small">Alumnus</span>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-content p-5 bg-white shadow rounded-4 mx-auto" style="max-width: 800px;">
                        <img src="./images/awe.jpg" alt="Student" class="rounded-circle mb-4 border border-4 border-warning shadow-sm" width="120" height="120">
                        <p class="fs-4 fst-italic mb-4 text-dark opacity-75">"This school has helped me achieve my dreams. The support from the faculty is incredible!"</p>
                        <h4 class="fw-bold mb-0 text-primary">- May Pamana</h4>
                        <span class="text-muted small">Student Participant</span>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="testimonial-content p-5 bg-white shadow rounded-4 mx-auto" style="max-width: 800px;">
                        <img src="./images/ewa.jpeg" alt="Student" class="rounded-circle mb-4 border border-4 border-warning shadow-sm" width="120" height="120">
                        <p class="fs-4 fst-italic mb-4 text-dark opacity-75">"The extracurricular activities here are awesome. I've made lifelong friends!"</p>
                        <h4 class="fw-bold mb-0 text-primary">- Chippy Mcdonald</h4>
                        <span class="text-muted small">Class of 2024</span>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<!-- Admission Chatbot -->
<div id="chatbot-container" class="shadow-lg rounded-4 overflow-hidden border border-primary border-2">
    <div id="chatbot-header" class="bg-primary p-3 text-white d-flex align-items-center justify-content-between cursor-pointer" onclick="toggleChatbot()">
        <span class="fw-bold">🎓 Admission Assistant</span>
        <span id="chat-toggle-icon" class="fs-5">💬</span>
    </div>
    <div id="chatbot-body">
        <div id="chatbot-messages" class="p-3 bg-light">
            <div class="chatbot-message mb-3">
                <div class="message-content p-3 rounded-4 bg-white shadow-sm border border-light">
                    Welcome to West Prime Horizon! 🎒 How can I help you with admissions today?
                </div>
            </div>
        </div>
        <div id="chatbot-input-area" class="p-3 bg-white border-top d-flex gap-2">
            <input type="text" id="chatbot-input" class="form-control border-0 bg-light rounded-pill" placeholder="Ask about admission..." onkeypress="handleKeyPress(event)">
            <button onclick="sendMessage()" class="btn btn-primary rounded-circle shadow-sm" style="width: 45px; height: 45px;">➤</button>
            <button onclick="startVoiceInput()" class="btn btn-outline-primary rounded-circle shadow-sm" style="width: 45px; height: 45px;">🎙️</button>
        </div>
    </div>
</div>

<script>
    const chatbotBody = document.getElementById("chatbot-body");
    const chatbotMessages = document.getElementById("chatbot-messages");
    
    function toggleChatbot() {
        chatbotBody.classList.toggle("open");
        const icon = document.getElementById("chat-toggle-icon");
        icon.innerText = chatbotBody.classList.contains("open") ? "✖" : "💬";
    }
    
    function handleKeyPress(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    }
    
    function sendMessage() {
        const input = document.getElementById('chatbot-input');
        const message = input.value.trim();
        if (message) {
            displayMessage(message, 'user');
            input.value = '';
            generateResponse(message);
        }
    }
    
    function displayMessage(message, type) {
        const msgDiv = document.createElement('div');
        msgDiv.className = type === 'user' ? 'user-message mb-3 d-flex justify-content-end' : 'chatbot-message mb-3 d-flex justify-content-start';
    
        const content = document.createElement('div');
        content.className = `message-content p-3 rounded-4 shadow-sm ${type === 'user' ? 'bg-primary text-white' : 'bg-white border'}`;
        content.innerText = message;
    
        msgDiv.appendChild(content);
        chatbotMessages.appendChild(msgDiv);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    }
    
    function generateResponse(message) {
        const typingIndicator = document.createElement('div');
        typingIndicator.id = 'typing-indicator';
        typingIndicator.className = 'chatbot-message mb-2 text-muted small fst-italic';
        typingIndicator.innerText = 'Assistant is typing...';
        chatbotMessages.appendChild(typingIndicator);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
    
        setTimeout(() => {
            typingIndicator.remove();
            let response = "I'm sorry, I'm specifically trained to help with admissions. You can ask about requirements, enrollment dates, courses, or SHS tracks!";
            
            const msg = message.toLowerCase();
            
            if (msg.includes('hello') || msg.includes('hi')) {
                response = "Hello! Looking to join the West Prime family? Ask me anything about admission requirements or available courses!";
            } else if (msg.includes('requirement')) {
                response = "For College: Form 138, Good Moral, and PSA Birth Certificate. For SHS: Grade 10 Report Card and Certificate of Completion.";
            } else if (msg.includes('enroll') || msg.includes('apply')) {
                response = "You can enroll directly at our campus in Pagadian City. Just bring your requirements to the Registrar's Office!";
            } else if (msg.includes('course') || msg.includes('program') || msg.includes('track')) {
                response = "We offer BSIT, BTVTED, BAELS, and ACT for College. For SHS, we have STEM, ABM, HUMSS, CSS, and EIM tracks.";
            } else if (msg.includes('fee') || msg.includes('tuition')) {
                response = "Our tuition fees are very competitive! Please visit our Business Office for a detailed assessment based on your chosen program.";
            } else if (msg.includes('scholarship')) {
                response = "Yes! We offer Academic, Sports, and Government scholarships (CHED/TESDA). Visit the Guidance Office for details.";
            } else if (msg.includes('date') || msg.includes('when')) {
                response = "Enrollment for the upcoming semester is currently OPEN! Classes start in June/August depending on the department.";
            }
    
            displayMessage(response, 'chatbot');
        }, 800);
    }
    
    function startVoiceInput() {
        const recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition)();
        recognition.lang = 'en-US';
        recognition.start();
        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            displayMessage(transcript, 'user');
            generateResponse(transcript);
        };
    }
</script>

<?php include 'includes/footer.php'; ?>
