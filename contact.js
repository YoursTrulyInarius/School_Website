function submitContactForm(event) {
    event.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    const status = document.getElementById('form-status');

    if (name && email && message) {
        status.innerText = "✅ Message sent successfully!";
        status.style.color = "green";

      
        setTimeout(() => {
            status.innerText = "";
            document.getElementById('contact-form').reset();
        }, 2000);
    } else {
        status.innerText = "⚠️ Please fill out all fields.";
        status.style.color = "red";
    }
}

const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
    });
});
