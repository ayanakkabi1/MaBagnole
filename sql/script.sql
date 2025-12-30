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

CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_client INT NOT NULL,
    id_vehicule INT NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    lieu_depart VARCHAR(100),
    lieu_retour VARCHAR(100),
    statut VARCHAR(50),
    FOREIGN KEY (id_client) REFERENCES clients(id),
    FOREIGN KEY (id_vehicule) REFERENCES vehicules(id)
);

CREATE TABLE avis (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_client INT NOT NULL,
    id_vehicule INT NOT NULL,
    note INT CHECK (note BETWEEN 1 AND 5),
    commentaire TEXT,
    soft_deleted BOOLEAN DEFAULT FALSE,
    date_avis DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_client) REFERENCES clients(id),
    FOREIGN KEY (id_vehicule) REFERENCES vehicules(id)
);

INSERT INTO categories (nom, description) VALUES
('Voiture', 'Véhicules de tourisme'),
('Moto', 'Deux roues motorisées'),
('Utilitaire', 'Véhicules pour transport de marchandises');
