CREATE DATABASE poll_tutorial;
USE poll_tutorial;

CREATE TABLE poll_votes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    option VARCHAR(50) NOT NULL
);