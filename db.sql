CREATE DATABASE api;

use api;

CREATE TABLE usuarios(
	id int(10) AUTO_INCREMENT PRIMARY KEY,
    name varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
    lastname varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
    email varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
    gender varchar(20) COLLATE utf8_spanish2_ci NOT NULL
);

INSERT INTO usuarios(name, lastname, email, gender) 
VALUES  ('Ricardo', 'Parra', 'ricardo.prxr16@gmail.com', 'masculino'),
        ('Robmy', 'Parra', 'robmy.pm@gmail.com', 'femenino'),
        ('Milagro', 'Marchán', 'milagro.marchan@gmail.com', 'femenino'),
        ('Raúl', 'Velásquez', 'raul.v@gmail.com', 'masculino'),
        ('José', 'Alvarado', 'jose_alva@gmail.com', 'masculino');