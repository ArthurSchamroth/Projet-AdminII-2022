CREATE DATABASE DataBase_Woody;

CREATE USER admin IDENTIFIED WITH mysql_native_password BY 'PasswordDB';

GRANT ALL PRIVILEGES ON DataBase_Woody.* TO 'admin'@'%';

USE DataBase_Woody;

CREATE TABLE `table_jouets` (
    `id_jouet` INTEGER NOT NULL AUTO_INCREMENT,
    `nom_jouet` VARCHAR(128) NOT NULL,
    `prix_jouet` DECIMAL(8, 2),
    CONSTRAINT pk_jouet PRIMARY KEY(id_jouet)
);

INSERT INTO `table_jouets` (`nom_jouet`, `prix_jouet`) VALUES
('Bateau', 19.99),
('Voiture', 29.99),
('Avion', 59.90)