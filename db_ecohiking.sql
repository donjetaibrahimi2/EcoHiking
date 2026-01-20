-- DATABASE
CREATE DATABASE IF NOT EXISTS db_ecohiking;
USE db_ecohiking;

-- USERS TABLE
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    login_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
ALTER TABLE users
ADD password VARCHAR(255) NOT NULL AFTER username,
ADD role ENUM('admin','user') DEFAULT 'user' AFTER password;

-- GUIDES TABLE
CREATE TABLE guides (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    category ENUM('camping','adventures','winter') NOT NULL,
    date DATE NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    img VARCHAR(255) DEFAULT 'images/placeholder.jpg',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- BOOKINGS TABLE
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    guide_category ENUM('camping','adventures','winter') NOT NULL
);

-- SAMPLE DATA FOR CHART
INSERT INTO bookings (guide_category) VALUES
('camping'),
('camping'),
('winter'),
('adventures'),
('camping');

INSERT INTO users (firstname, lastname, username, password, role)
VALUES (
    'Donjeta',
    'Ibrahimi',
    'donjetarilind',
    '123456789',
    'admin'
);
