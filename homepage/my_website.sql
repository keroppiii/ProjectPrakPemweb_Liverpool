CREATE DATABASE my_website;

USE my_website;

CREATE TABLE dashboard_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

AlTER TABLE dashboard_jersey AUTO_INCREMENT = 200;
AlTER TABLE dashboard_souvenirs AUTO_INCREMENT = 300;
AlTER TABLE dashboard_signed AUTO_INCREMENT = 400;