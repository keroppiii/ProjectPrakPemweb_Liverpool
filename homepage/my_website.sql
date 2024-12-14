CREATE DATABASE my_website;

USE my_website;

CREATE TABLE dashboard_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE dashboard_jersey (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE dashboard_souvenirs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

CREATE TABLE dashboard_signed (
    id INT AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    info VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

AlTER TABLE dashboard_jersey AUTO_INCREMENT = 200;
AlTER TABLE dashboard_souvenirs AUTO_INCREMENT = 300;
AlTER TABLE dashboard_signed AUTO_INCREMENT = 400;

-- Membuat database 'login'
CREATE DATABASE login;

-- Menggunakan database 'login'
USE login;

-- Membuat tabel 'users'
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL
);

-- Membuat tabel 'admin'
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    password VARCHAR(200) NOT NULL
);

CREATE TABLE goalkeepers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    number INT NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

CREATE TABLE defenders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    number INT NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

CREATE TABLE midfielders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    number INT NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

CREATE TABLE forward (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    number INT NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

AlTER TABLE goalkeepers AUTO_INCREMENT = 500;
AlTER TABLE defenders AUTO_INCREMENT = 600;
AlTER TABLE midfielders AUTO_INCREMENT = 700;
AlTER TABLE forward AUTO_INCREMENT = 800;

INSERT INTO goalkeepers (id, name, number, image_url) VALUES
(501, 'ALLISON', 1, '../players/uploads/allison1.webp'),
(502, 'VITEZSLAV', 56, '../players/uploads/vitezslav.webp'),
(503, 'CAOIMHIN', 62, '../players/uploads/caoimhin.webp');


INSERT INTO defenders (id, name, number, image_url) VALUES
(601, 'VIRGIL VAN DIJK', 4, '../players/uploads/dfm2.webp'),
(602, 'IBRAHIMA KONONATE', 5, '../players/uploads/ibrahima.webp'),
(600, 'JOE GOMEZ', 2, '../players/uploads/joe.webp');

INSERT INTO midfielders (id, name, number, image_url) VALUES
(701, 'WATARU ENDO', 3, '../players/uploads/wataru.webp'),
(702, 'DOMINIK SZOBOSZLAI', 8, '../players/uploads/dominik.webp'),
(700, 'ALEXIS MAC ALLISTER', 10, '../players/uploads/alexis.webp');

INSERT INTO forward (id, name, number, image_url) VALUES
(801, 'LUIS DIAZ', 7, '../players/uploads/luis.webp'),
(802, 'DARWIN NUNEZ', 9, '../players/uploads/darwin.webp'),
(800, 'MOHAMED SALAH', 11, '../players/uploads/salah.webp');