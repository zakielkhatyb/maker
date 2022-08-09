-- Agmir Hassan 
CREATE DATABASE gestion_cv;
USE gestion_cv;

CREATE TABLE IF NOT EXISTS `user` (
  `id` INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `username` VARCHAR(50),
  `eamil` VARCHAR(50) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `token` VARCHAR(100) NOT NULL
);



CREATE TABLE IF NOT EXISTS `personne` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `avatar` VARCHAR(300),
  `nom` VARCHAR(30),
  `prenom` VARCHAR(30),
  `cin` VARCHAR(20) UNIQUE,
  `email` VARCHAR(40),
  `tel` VARCHAR(15),
  `adress` VARCHAR(100),
  `code_postal` VARCHAR(10),
  `ville` VARCHAR(30),
  `slug`  VARCHAR(100) NOT NULL,
  `complet` BOOLEAN DEFAULT 0 NOT NULL,
  `user_id` INT NOT NULL,
  FOREIGN KEY(`user_id`) REFERENCES user(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `competences` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `competence` VARCHAR(50) NOT NULL,
  `niveau` INT NOT NULL,
  `personne` INT(11) NOT NULL,
  FOREIGN KEY(personne) REFERENCES personne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- diplome
CREATE TABLE IF NOT EXISTS `diplomes` ( 
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `diplome` VARCHAR(255) NOT NULL,
  `etablissement` VARCHAR(255) NOT NULL,
  `ville` VARCHAR(50) NOT NULL,
  `date_obtention` date NOT NULL,
  `description` VARCHAR(255),
  `personne` INT NOT NULL, 
  FOREIGN KEY (personne) REFERENCES personne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Experiences
CREATE TABLE IF NOT EXISTS `experiences` (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `exprience` VARCHAR(50) NOT NULL,
  `employeur` VARCHAR(30) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `ville` VARCHAR(30) NOT NULL,
  `description` VARCHAR(255) NOT NULL,
  `personne` INT(11) NOT NULL,
  FOREIGN key(personne) REFERENCES personne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- Languages
CREATE TABLE IF NOT EXISTS `langues` (
  `id` INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `langue` VARCHAR(50) NOT NULL,
  `niveau` INT NOT NULL,
  `personne` INT(11) NOT NULL,
  FOREIGN KEY(personne) REFERENCES personne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE IF NOT EXISTS `loisirs` (
  `id` INT(11) NOT NULL PRIMARY KEY  AUTO_INCREMENT,
  `loisir` VARCHAR(50) NOT NULL,
  `personne` INT(11) NOT NULL,
  FOREIGN KEY(personne) REFERENCES personne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE IF NOT EXISTS `qualites` (
  `id` INT(11) NOT NULL PRIMARY KEY  AUTO_INCREMENT ,
  `qualite` VARCHAR(100) NOT NULL,
  `personne` INT(11) NOT NULL,
  FOREIGN KEY(personne) REFERENCES personne(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

