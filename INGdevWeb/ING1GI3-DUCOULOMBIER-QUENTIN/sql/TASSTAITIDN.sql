DROP DATABASE IF EXISTS voyages;
CREATE DATABASE IF NOT EXISTS voyages;


CREATE TABLE produits (
    id INT AUTO_INCREMENT PRIMARY KEY,
    distance VARCHAR(255),
    direction VARCHAR(255),
    description TEXT,
    prix DECIMAL(10,2),
    stock INT,
    photo VARCHAR(255)
);