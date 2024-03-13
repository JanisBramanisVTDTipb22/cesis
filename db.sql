-- CREATE DATABASE ckc_janis_bramanis;
-- USE ckc_janis_bramanis;
CREATE TABLE pasakumi(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
date_time DATETIME NOT NULL,
title VARCHAR(255) NOT NULL,
place VARCHAR(255) NOT NULL
)

INSERT INTO pasakumi
(date_time, title, place)
VALUES
("2024-03-31 13:00:00", "Lieldienas Cēsīs", "Rožu laukums"),
("2024-04-04 18:00:00", "Leļļu teātra izrāde 'Gangsteromīte'", " Koncertzāle 'Cēsis'"),
("2024-07-19 08:00:00", "Cēsu pilsētas svētki 818", "Cēsis");


CREATE TABLE kolektivi(
id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
NAME VARCHAR(80) NOT NULL,
DESCRIPTION VARCHAR(500) NOT NULL
)

INSERT INTO kolektivi
(NAME, DESCRIPTION)
VALUES
("Cēsis", "Pūtēju orķestris"),
("Raitais solis", "Tautu deju ansamblis"),
("Vidzeme", "Jauktais koris"),
("Dzieti", "Tautas vērtes kopa");
