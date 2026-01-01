document.addEventListener('DOMContentLoaded', () => {
    console.log("FAQ JS Loaded");

    // Select all FAQ questions
    const faqQuestions = document.querySelectorAll('.faq-question');

    faqQuestions.forEach(question => {
        question.addEventListener('click', () => {
            console.log("FAQ clicked"); // ✅ Test if this shows up

            // Toggle the answer's visibility
            const answer = question.nextElementSibling;
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        });
    });
});
