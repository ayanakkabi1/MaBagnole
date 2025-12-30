CREATE DATABASE IF NOT EXISTS mabagnole;
USE mabagnole;


CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    mot_de_passe_hash VARCHAR(255) NOT NULL,
    date_creation DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
    description TEXT
);

CREATE TABLE vehicules (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modele VARCHAR(100) NOT NULL,
    immatriculation VARCHAR(50) UNIQUE NOT NULL,
    prix_jour DECIMAL(10,2) NOT NULL,
    id_categorie INT NOT NULL,
    disponible BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (id_categorie) REFERENCES categories(id)
);

