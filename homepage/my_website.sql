CREATE DATABASE my_website;

USE my_website;

CREATE TABLE dashboard_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

INSERT INTO dashboard_data (image_url, info, price) VALUES
('path/to/jersey1.jpg', 'LFC Nike Mens 24/25 Home Stadium Jersey', 95.00),
('path/to/ball.jpg', 'LFC Size 5 Neon Football', 15.00),
('path/to/cap.jpg', 'LFC Signed Gravenberch Netherlands Cap', 150.00),
('path/to/jersey2.jpg', 'LFC Nike Mens 24/25 Third Stadium Jersey', 80.00),
('path/to/mug.jpg', 'LFC Matte Gold Crest Mug', 12.00),
('path/to/shirt.jpg', 'LFC Signed Chiesa Boxed Shirt', 300.00);