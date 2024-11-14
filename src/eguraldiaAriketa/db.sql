CREATE DATABASE IF NOT EXISTS eguraldia;
USE eguraldia;

CREATE TABLE IF NOT EXISTS herria (
    id INT AUTO_INCREMENT PRIMARY KEY,
    izena VARCHAR(255) NOT NULL
);

CREATE TABLE IF NOT EXISTS iragarpena (
    id INT AUTO_INCREMENT PRIMARY KEY,
    herria_id INT,
    eguna DATE NOT NULL,
    iragarpena_testua VARCHAR(255),
    eguraldia VARCHAR(255),
    tenperatura_minimoa INT,
    tenperatura_maximoa INT,
    FOREIGN KEY (herria_id) REFERENCES herria(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS iragarpena_orduko (
    id INT AUTO_INCREMENT PRIMARY KEY,
    iragarpena_id INT,
    ordua TIME NOT NULL,
    eguraldia VARCHAR(255),
    tenperatura INT,
    prezipitazioa INT,
    haizea_nondik VARCHAR(255),
    haizea_kmh INT,
    FOREIGN KEY (iragarpena_id) REFERENCES iragarpena(id) ON DELETE CASCADE
);
