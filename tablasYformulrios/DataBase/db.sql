DROP DATABASE IF EXISTS usuarios;

CREATE DATABASE usuarios;

USE usuarios;
CREATE TABLE user(
    id INT NOT NULL AUTO_INCREMENT,
    user VARCHAR(30) NOT NULL,
    correo VARCHAR(60) NOT NULL,
    pass VARCHAR(30) NOT NULL,
    tipo INT(1) NOT NULL,

    PRIMARY KEY(id)
);

CREATE TABLE datosPersonales(
    id INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(45) NOT NULL,
    apPaterno VARCHAR(45) NOT NULL,
    apMaterno VARCHAR(45) NOT NULL,
    edad INT(3) NOT NULL,
    sexo BOOLEAN NOT NULL,
    calle VARCHAR(45) NOT NULL,
    colonia VARCHAR(45) NOT NULL,
    cp VARCHAR(45) NOT NULL,
    user_id INT NOT NULL,

    PRIMARY KEY(id),
    CONSTRAINT fk_datosPersonales_user FOREIGN KEY(user_id) REFERENCES user(id)
);

CREATE TABLE datosEscolares(
    id INT NOT NULL AUTO_INCREMENT,
    uAcademica VARCHAR(20) NOT NULL,
    programa VARCHAR(30) NOT NULL,
    semestre INT(1) NULL,
    grupo VARCHAR(4) NOT NULL,
    user_id INT NOT NULL,

    PRIMARY KEY(id),
    CONSTRAINT fk_datosEscolares_user FOREIGN KEY(user_id) REFERENCES user(id)
);

CREATE TABLE deportivoCultural(
    id INT NOT NULL AUTO_INCREMENT,
    seguro BOOLEAN NOT NULL,
    Alergia VARCHAR(50),
    problemasSalud VARCHAR(50),
    deporte VARCHAR(20),
    aCultural VARCHAR(20),
    user_id INT NOT NULL,
    
    PRIMARY KEY(id),
    CONSTRAINT fk_deportivoCultural_user FOREIGN KEY(user_id) REFERENCES user(id)
);
