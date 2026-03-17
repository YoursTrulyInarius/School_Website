CREATE DATABASE IF NOT EXISTS school_db;
USE school_db;

CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    answer TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS gallery (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_path VARCHAR(255) NOT NULL,
    caption VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Seed some initial FAQs
INSERT INTO faqs (question, answer) VALUES 
('How can I apply for admission?', 'You can apply for admission through the "Apply Now" button on the Academics page or visit our campus for manual enrollment.'),
('What are the office hours?', 'Our office hours are from 8:00 AM to 5:00 PM, Monday to Friday.'),
('What tracks do you offer for Senior High?', 'We offer STEM, ABM, HUMSS, CSS, and EIM tracks.'),
('What are the requirements for college admission?', 'Basic requirements include Form 138 (Report Card), Certificate of Good Moral Character, and Birth Certificate (PSA).');
